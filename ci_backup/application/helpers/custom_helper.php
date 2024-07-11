<?php
    if (!function_exists('encodeID')) {
        function encodeID($num) {
            $encoded = base64_encode($num);
            // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            // $base = strlen($characters);
            // $encoded = '';
            
            // while ($num > 0) {
            //     $remainder = $num % $base;
            //     $encoded = $characters[$remainder] . $encoded;
            //     $num = floor($num / $base);
            // }
        
            // // Padding the string to ensure it is always 10 characters long
            return rtrim($encoded, 2);
        }
    }

    if (!function_exists('decodeID')) {
        function decodeID($encoded) {
            // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            // $base = strlen($characters);
            // $decoded = 0;
            
            // // Remove leading zeros
            // $encoded = ltrim($encoded, '0');
            
            // for ($i = 0; $i < strlen($encoded); $i++) {
            //     $decoded = $decoded * $base + strpos($characters, $encoded[$i]);
            // }
            $decoded = base64_decode($encoded);
            return $decoded;
        }
    }
?>