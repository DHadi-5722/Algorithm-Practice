# Integer to Roman

## Overview

This folder contains a Python solution for converting an integer into a Roman numeral. The implementation supports standard Roman numeral symbols and subtractive combinations such as `IV`, `IX`, `XL`, `XC`, `CD`, and `CM`.

## Implementation

The solution uses a greedy approach. It stores Roman numeral values in descending order, repeatedly appends the largest possible symbol, and subtracts that value from the input number until the number reaches zero.

## Files

- `Integer to Roman.py` - Python implementation with a sample call using `2015`.

## How to Run

```bash
python "Integer to Roman.py"
```

## Complexity

- Time complexity: O(1) for the standard Roman numeral range because the symbol list is fixed.
- Space complexity: O(1), excluding the output string.
