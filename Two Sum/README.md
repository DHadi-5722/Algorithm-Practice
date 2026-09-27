# Two Sum

## Overview

This folder contains a Java solution for the "Two Sum" problem. Given an integer array and a target value, the goal is to return the indexes of two numbers that add up to the target.

## Implementation

The solution uses a `HashMap` to store each number and its index while scanning the array once. For each number, it computes the complement needed to reach the target and checks whether that complement has already been seen.

## Files

- `Two Sum/src/main/java/TwoSum/Main.java` - Java implementation with a sample input.
- `Two Sum/build.gradle` - Gradle build file.
- `Two Sum/settings.gradle` - Gradle settings file.
- `Two Sum/gradle.properties` - Gradle configuration.

## How to Run

Run from the nested Gradle project folder:

```bash
cd "Two Sum"
gradle run
```

## Complexity

- Time complexity: O(n), where `n` is the number of values in the array.
- Space complexity: O(n), for the hash map.
