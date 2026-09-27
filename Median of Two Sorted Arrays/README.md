# Median of Two Sorted Arrays

## Overview

This folder contains a JavaScript solution for finding the median of two sorted arrays. The implementation favors readability by merging both arrays first, sorting the combined values, and then selecting the middle value or the average of the two middle values.

## Implementation

The `findMedianSortedArrays` function combines the two arrays with `concat`, sorts the merged array numerically, and checks whether the merged length is even or odd.

## Files

- `Median of Two Sorted Arrays.js` - JavaScript implementation with a sample call.
- `README.md` - Folder documentation.

## How to Run

```bash
node "Median of Two Sorted Arrays.js"
```

## Complexity

- Time complexity: O((m + n) log(m + n)), because the merged array is sorted.
- Space complexity: O(m + n), because the two arrays are copied into a combined array.

## Notes

This is a clear practice solution. The optimal interview solution for this problem uses binary search and runs in O(log(min(m, n))) time.
