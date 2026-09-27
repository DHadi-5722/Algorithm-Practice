# String to Integer Atoi

## Overview

This folder contains a PHP solution for the "String to Integer (atoi)" problem. The goal is to convert a string into a 32-bit signed integer using rules similar to the C `atoi` function.

## Implementation

The solution trims leading whitespace, checks for an optional `+` or `-` sign, reads consecutive digit characters, applies the sign, and clamps the result to the 32-bit signed integer range.

## Files

- `StringtoInteger(atoi).php` - PHP implementation with sample test cases.

## How to Run

```bash
php "StringtoInteger(atoi).php"
```

## Complexity

- Time complexity: O(n), where `n` is the length of the input string.
- Space complexity: O(1)
