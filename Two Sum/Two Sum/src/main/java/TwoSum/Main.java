package TwoSum;

import java.util.HashMap;
import java.util.Map;


public class Main {

    public static void main(String[] args) {
        // Sample array used to test the solution
        int[] tree = {2, 4, 6, 10, 12};

        // Target value we want two numbers to add up to
        int target = 16;

        // Call the method and store the returned indexes
        int[] Golf = twoSum(tree, target);

        // Print the two indexes that make up the target sum
        System.out.print(Golf[0] + " " + Golf[1]);
    }

    public static int[] twoSum(int[] nums, int target) {
        // This map stores each number and its index as we go through the array
        Map<Integer, Integer> numMap = new HashMap<>();

        // Loop through each number in the array
        for (int i = 0; i < nums.length; i++) {

            // Find the number needed to reach the target
            int complement = target - nums[i];

            // Check if we have already seen the matching number
            if (numMap.containsKey(complement)) {

                // If found, return both indexes
                return new int[]{numMap.get(complement), i};
            }

            // If not found yet, store the current number and its index
            numMap.put(nums[i], i);
        }

        // Return null if no matching pair is found
        return null;
    }
}