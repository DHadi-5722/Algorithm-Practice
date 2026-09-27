# Longest Substring Without Repeating Characters

## Overview

This folder contains a PHP solution for finding the length of the longest substring without repeating characters.

## Implementation

The solution uses a sliding-window approach. It tracks the start of the current non-repeating window and stores the most recent index of each character in an associative array. When a repeated character appears inside the current window, the start pointer moves to one position after that character's previous index.

## Files

- `LongestSubstringWithoutRepeatingCharacters.php` - PHP implementation of the `lengthOfLongestSubstring` method.

## How to Run

This file defines the solution class and method. To test it locally, add a small driver script or instantiate `Solution` from another PHP file.

Example:

```php
$solution = new Solution();
echo $solution->lengthOfLongestSubstring("abcabcbb");
```

## Complexity

- Time complexity: O(n), where `n` is the length of the input string.
- Space complexity: O(k), where `k` is the number of unique characters tracked in the current input.
