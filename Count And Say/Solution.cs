using System;
using System.Text;
namespace CountAndSay
{
    

public class Solution{
    static void Main(){
        Console.WriteLine(CountAndSay(6));
    }
    public static string CountAndSay(int n) {
        // Base case: when n is 1, return "1"
        if (n == 1) return "1";
        
        // Start with the base case
        string result = "1";
        
        // Loop from 2 to n to build the sequence iteratively
        for (int i = 2; i <= n; i++) {
            StringBuilder current = new StringBuilder();
            int count = 1;
            char say = result[0];
            
            // Iterate through the previous sequence
            for (int j = 1; j < result.Length; j++) {
                if (result[j] == say) {
                    count++; // Increment count if the same number continues
                } else {
                    // Append the count and the number to the current sequence
                    current.Append(count.ToString());
                    current.Append(say);
                    // Reset the count and update the say character
                    count = 1;
                    say = result[j];
                }
            }
            
            // Append the last counted number and its count
            current.Append(count.ToString());
            current.Append(say);
            
            // Update result for the next iteration
            result = current.ToString();
        }
        
        // Return the nth sequence
        return result;
    }
}
}
