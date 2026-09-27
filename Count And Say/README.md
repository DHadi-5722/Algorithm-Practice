# Count And Say

## Overview

This folder contains a C# solution for the "Count and Say" sequence problem. Given an integer `n`, the goal is to generate the nth term of the sequence by reading off groups of repeated digits from the previous term.

## Implementation

The solution starts with the base value `"1"` and iteratively builds each next term. For each previous term, it counts consecutive matching characters and appends the count followed by the digit to a `StringBuilder`.

## Files

- `Solution.cs` - Contains the `CountAndSay` method.
- `Program.cs` - Runs the solution with a sample input.
- `Count And Say.csproj` - .NET project file targeting .NET 8.

## How to Run

```bash
dotnet run
```

Run the command from this folder.

## Complexity

- Time complexity: O(total generated characters through n), because each term is scanned to build the next term.
- Space complexity: O(k), where `k` is the length of the current generated term.
