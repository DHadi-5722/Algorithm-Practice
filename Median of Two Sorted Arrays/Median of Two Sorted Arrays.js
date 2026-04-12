/*This project calculates the median of Two Sorted Arrays*/
const findMedianSortedArrays = (array1, array2) => {
    // Combine both arrays into one
    let combined = array1.concat(array2);

    // Sort the combined array in ascending order
    // Default sort is lexicographical, so we provide a comparator
    combined.sort(function(x, y){
        return x - y;
    });

    // Get the total length of the combined array
    let l = combined.length;

    // If the length is even
    // Median is the average of the two middle elements
    if (l % 2 === 0) {
        return (combined[Math.floor(l / 2) - 1] + combined[Math.ceil(l / 2)]) / 2;
    } 
    // If the length is odd
    // Median is the middle element
    else {
        return combined[Math.floor(l / 2)];
    }
};
console.log(findMedianSortedArrays([1, 2], [3, 4]));