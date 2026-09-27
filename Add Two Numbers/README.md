# Add Two Numbers

## Overview

This folder contains a Python solution for the "Add Two Numbers" linked-list problem. The problem represents two non-negative integers as linked lists where each node stores one digit in reverse order. The goal is to add the two numbers and return the sum as another reversed linked list.

## Implementation

The solution defines a simple `ListNode` class and an `addTwoNumbers` function. The function converts each linked list into a numeric value, adds the values, and then builds a new linked list from the result one digit at a time.

## Files

- `Add Two Numbers.py` - Python implementation with a small example that prints the resulting linked list.

## How to Run

```bash
python "Add Two Numbers.py"
```

## Complexity

- Time complexity: O(m + n + d), where `m` and `n` are the lengths of the input lists and `d` is the number of digits in the sum.
- Space complexity: O(d), for the returned linked list.

## Notes

This implementation is easy to follow for learning purposes. A more interview-oriented version could add digits directly while tracking carry values instead of converting the full linked lists into integers.
