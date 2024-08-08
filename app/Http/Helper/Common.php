<?php
use Carbon\Carbon;

if (!function_exists('uploadPlease')) {
    function uploadPlease($image)
    {
        // $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // Image::make($image)->save('public/uploads/' . $imageName);
        // return $img_url = 'public/uploads/' . $imageName;
    }
}

if (!function_exists('requestBag')) {
    function requestBag($bagNumber)
    {
        $items = explode(', ', $bagNumber);
        $bags = [];

        if ($items[0] != 0) {
            foreach ($items as $item) {
                [$size, $quantity] = explode(' - ', $item);
                $quantity = (int) $quantity;
                $bags[] = [
                    'quantity' => $quantity,
                    'size' => $size,
                ];
            }
        }

        return count($bags) > 0 ? $bags : false;
    }
}

if (!function_exists('calculateBagTotals')) {
    function calculateBagTotals($requestData, $hubPricing)
    {
        $bagSizes = [
            'small' => 'Small',
            'medium' => 'Medium',
            'large' => 'Large',
            'extra_large' => 'Extra Large',
        ];

        $totals = collect([
            'Small' => 0,
            'Medium' => 0,
            'Large' => 0,
            'Extra Large' => 0,
        ]);

        $totalPrice = 0;
        $totalBag = 0;

        // Handle case where bag information is in a single string like "Small - 2, Medium - 1"
        if (isset($requestData['bagNumber'])) {
            $items = explode(', ', $requestData['bagNumber']);
            foreach ($items as $item) {
                [$size, $quantity] = explode(' - ', $item);
                $quantity = (int) $quantity;
                $price = calculatePrice($size, $quantity, $requestData, $hubPricing);

                $totals[$size] += $quantity;
                $totalPrice += $price;
                $totalBag += $quantity;
            }
        }

        // Handle case where bag information is in separate fields like "small", "medium", etc.
        foreach ($bagSizes as $requestKey => $size) {
            $quantity = isset($requestData[$requestKey]) ? (int) $requestData[$requestKey] : 0;
            if ($quantity > 0) {
                $price = calculatePrice($size, $quantity, $requestData, $hubPricing);

                $totals[$size] += $quantity;
                $totalPrice += $price;
                $totalBag += $quantity;
            }
        }

        $distanceInfo = distanceInfo($hubPricing);

        return [
            'totals' => $totals,
            'bagPrice' => $totalPrice,
            'totalBag' => $totalBag,
            'distance' => $distanceInfo['distance'],
            'totalPrice' => round($totalPrice + $distanceInfo['price']),
        ];
    }
}

if (!function_exists('distanceInfo')) {
    function distanceInfo($hubPricing)
    {
        // Retrieve the shortest distance from the session
        $shortestDistance = session()->get('shortestDistance', 0);

        $price = 0;
        if ($shortestDistance > 0) {
            $price = $shortestDistance * $hubPricing->per_km_price;
        }

        // Return both price and distance
        return [
            'price' => $price * 2,
            'distance' => $shortestDistance,
        ];
    }
}

if (!function_exists('calculatePrice')) {
    function calculatePrice($size, $quantity, $requestData, $hubPricing)
    {
        $size = str_replace(' ', '_', strtolower($size));
        $priceFieldPrefix = $size . '_per_bag_';

        if (isset($requestData['check_in_date_time']) && isset($requestData['check_out_date_time'])) {
            $checkInDate = $requestData['check_in_date_time'];
            $checkOutDate = $requestData['check_out_date_time'];
        } elseif (isset($requestData['checkInDate']) && isset($requestData['checkOutDate'])) {
            $checkInDate = $requestData['checkInDate'];
            $checkOutDate = $requestData['checkOutDate'];
        } 

        $checkInDate = Carbon::parse($checkInDate);
        $checkOutDate = Carbon::parse($checkOutDate);

        $diffInMinutes = $checkInDate->diffInMinutes($checkOutDate);
        $diffInDays = $checkInDate->diffInDays($checkOutDate);

        // Initialize price
        $price = 0;

        // Calculate price based on duration
        if ($diffInMinutes <= 1380) {
            $hours = ceil($diffInMinutes / 60);
            $priceField = $priceFieldPrefix . 'hourly_price';
            $price = $quantity * $hubPricing->$priceField * $hours;
        } elseif ($diffInMinutes > 1380 && $diffInDays <= 6) {
            $days = ceil($diffInMinutes / (60 * 24));
            // More than 1 hour but less than or equal to 1 day
            $priceField = $priceFieldPrefix . 'daily_price';
            $price = $quantity * $hubPricing->$priceField * $days;
        } elseif ($diffInDays <= 30 && $diffInDays > 6) {

            if ($diffInDays > 6 && $diffInDays <= 7) {
                $weeks = 1;
            }

            if ($diffInDays > 7) {
                $totalDays = $diffInDays / 7;
                $decimalPart = $totalDays - floor($totalDays);
                if ($decimalPart > 0) {
                    $day = 1;
                    $priceField = $priceFieldPrefix . 'daily_price';
                    $price += $quantity * $hubPricing->$priceField * $day;
                }

                $weeks = floor($totalDays);
                if ($weeks > 0) {
                    $priceFieldWeekly = $priceFieldPrefix . 'weekly_price';
                    $price += $quantity * $hubPricing->$priceFieldWeekly * $weeks;
                }
            }

        } elseif ($diffInDays > 30) {
            // More than 1 month
            $totalDays = $diffInDays / 30;
            $months = floor($totalDays);
            if ($months > 0) {
                $priceFieldMonthly = $priceFieldPrefix . 'monthly_price';
                $price += $quantity * $hubPricing->$priceFieldMonthly * $months;
            }

            $remainingDays = $diffInDays % 30;
            if ($remainingDays > 0) {
                if ($remainingDays > 6 && $remainingDays <= 7) {
                    $weeks = 1;
                } elseif($remainingDays < 6) {
                    $decimalPart = $totalDays - floor($totalDays);
                    if ($decimalPart > 0) {
                        $day = 1;
                        $priceField = $priceFieldPrefix . 'daily_price';
                        $price += $quantity * $hubPricing->$priceField * $day;
                    }
    
                    $oneMoreDay = floor($totalDays);
                    if ($oneMoreDay > 0) {
                        $priceFieldWeekly = $priceFieldPrefix . 'daily_price';
                        $price += $quantity * $hubPricing->$priceFieldWeekly * $oneMoreDay;
                    }
                }
                

                if ($remainingDays > 7) {
                    $totalDays = $remainingDays / 7;
                    $decimalPart = $totalDays - floor($totalDays);
                    if ($decimalPart > 0) {
                        $day = 1;
                        $priceField = $priceFieldPrefix . 'daily_price';
                        $price += $quantity * $hubPricing->$priceField * $day;
                    }
    
                    $weeks = floor($totalDays);
                    if ($weeks > 0) {
                        $priceFieldWeekly = $priceFieldPrefix . 'weekly_price';
                        $price += $quantity * $hubPricing->$priceFieldWeekly * $weeks;
                    }
                }

            }
        }

        return $price;
    }
}
