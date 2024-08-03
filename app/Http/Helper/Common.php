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

        return [
            'totals' => $totals,
            'totalPrice' => $totalPrice,
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

