<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        // Step 1: Ignore leading whitespace
        $s = ltrim($s);

        // Check if string is empty after stripping whitespace
        if ($s === '') {
            return 0;
        }

        // Step 2: Check for sign
        $sign = 1;
        if ($s[0] === '-') {
            $sign = -1;
            $s = substr($s, 1);
        } elseif ($s[0] === '+') {
            $s = substr($s, 1);
        }

        // Step 3: Read digits
        $num = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if (ctype_digit($char)) {
                $num = $num * 10 + intval($char);
            } else {
                break;
            }
        }

        // Apply sign
        $num *= $sign;

        // Clamp to 32-bit integer range
        $INT_MAX = 2**31 - 1;
        $INT_MIN = -2**31;
        if ($num > $INT_MAX) {
            return $INT_MAX;
        } elseif ($num < $INT_MIN) {
            return $INT_MIN;
        } else {
            return $num;
        }
    }
}

// Test cases
$solution = new Solution();
echo $solution->myAtoi("42") . "\n"; // Output: 42
echo $solution->myAtoi("   -42") . "\n"; // Output: -42
echo $solution->myAtoi("4193 with words") . "\n"; // Output: 4193