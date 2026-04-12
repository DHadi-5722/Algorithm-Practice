class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        // Get the length of the input string
        $size = strlen($s);

        // $max stores the maximum length found so far
        // $dict stores the last index of each character
        $max = 0; 
        $dict = array();

        // $i = current index
        // $start = starting index of current substring window
        for ($i = 0, $start = 0, $max = 0; $i < $size; $i++) {

            // Current character
            $char = $s[$i]; 

            // If character is already seen AND is inside the current window
            if (isset($dict[$char]) && $dict[$char] >= $start) {

                // Calculate length of substring before repeating character
                $count = $i - $dict[$char];

                // Update max length if needed
                if ($count > $max) $max = $count;

                // Move start to one position after last occurrence of current char
                $start = $dict[$char] + 1; 

            } else { 
                // No repetition in current window, expand substring
                $count = ($i + 1) - $start;

                // Update max length if needed
                if ($count > $max) $max = $count;
            }

            // Update the last seen index of the current character
            $dict[$char] = $i; 
        }

        // Return the maximum length found
        return $max;
    }
}