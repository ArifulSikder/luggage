<?php

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
            'extra_large' => 'Extra Large'
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
                $dailyPriceField = 'daily_price_' . (array_search(strtolower($size), array_keys($bagSizes)) + 1);
                
                $totals[$size] += $quantity;
                $totalPrice += $quantity * $hubPricing->$dailyPriceField;
                $totalBag += $quantity;
            }
        }

        // Handle case where bag information is in separate fields like "small", "medium", etc.
        foreach ($bagSizes as $requestKey => $size) {
            $quantity = isset($requestData[$requestKey]) ? (int)$requestData[$requestKey] : 0;
            if ($quantity > 0) {
                $dailyPriceField = 'daily_price_' . (array_search($requestKey, array_keys($bagSizes)) + 1);
                
                $totals[$size] += $quantity;
                $totalPrice += $quantity * $hubPricing->$dailyPriceField;
                $totalBag += $quantity;
            }
        }

        $totalPrice += distancePrice($hubPricing);

        if (isset($requestData['check_in_date_time']) && isset($requestData['check_out_date_time'])) {
            $checkInDate = $requestData['check_in_date_time'];
            $checkOutDate = $requestData['check_out_date_time'];
        } elseif (isset($requestData['checkInDate']) && isset($requestData['checkOutDate'])) {
            $checkInDate = $requestData['checkInDate'];
            $checkOutDate = $requestData['checkOutDate'];
        } else {
            // Handle the case when dates are not provided
            throw new \Exception('Check-in and Check-out dates are required.');
        }
        
        $dayCalculation = dayCalculation($checkInDate, $checkOutDate);
        $finalTotalPrice = $totalPrice * $dayCalculation;

        return [
            'totals' => $totals,
            'totalPrice' => $finalTotalPrice,
            'totalBag' => $totalBag,
        ];
    }
}

if (!function_exists('distancePrice')) {
    function distancePrice($hubPricing)
    {
        $totalPrice = 0;
        $shortestDistance = session()->get('shortestDistance');
        if ($shortestDistance) {
            $totalPrice += $shortestDistance * $hubPricing->per_km_price;
        }

        return $totalPrice;
    }
}


if (!function_exists('dayCalculation')) {
    function dayCalculation($checkinDate, $checkoutDate)
    {
        $checkinDate = new DateTime($checkinDate);
        $checkoutDate = new DateTime($checkoutDate);
        $diffInDays = $checkoutDate->diff($checkinDate)->days;

        return $diffInDays > 0 ? $diffInDays : 1;
    }
}
