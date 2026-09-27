# Sudoku Solver

## Overview

This folder contains a Python solution for solving a 9x9 Sudoku puzzle. Empty cells are represented with `"."`, and the solver modifies the board in place.

## Implementation

The solution uses recursive backtracking. It scans the board for an empty cell, tries digits `"1"` through `"9"`, checks whether each digit is valid for the row, column, and 3x3 box, and backtracks when a placement does not lead to a solution.

## Files

- `Sudoku Solver.py` - Python implementation with an example Sudoku board.

## How to Run

```bash
python "Sudoku Solver.py"
```

## Complexity

- Time complexity: O(9^e) in the worst case, where `e` is the number of empty cells.
- Space complexity: O(e), for the recursion depth.

## Notes

Backtracking is a standard approach for Sudoku solving and is useful for practicing recursion, constraint checking, and search.
