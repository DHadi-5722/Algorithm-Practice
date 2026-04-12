# 📊 Median of Two Sorted Arrays

A simple and efficient **JavaScript solution** to calculate the **median of two sorted arrays** by merging and sorting them.

---

## ✨ Features
- Combines two input arrays into one
- Sorts the merged array in ascending order
- Handles both **even** and **odd** total lengths
- Returns the correct median value
- Clean and beginner-friendly JavaScript implementation

---

## 📂 File Structure
```text
.
├── Median of Two Sorted Arrays.js
└── README.md
```

---

## 🚀 How It Works
The function follows these steps:

1. **Merge both arrays**
   - Uses `.concat()` to combine the arrays
2. **Sort the merged array**
   - Uses `.sort()` with a numeric comparator
3. **Check the length**
   - If even → average the two middle values
   - If odd → return the middle value

---

## 💻 Code Example
```javascript
const nums1 = [1, 3];
const nums2 = [2];

console.log(findMedianSortedArrays(nums1, nums2));
// Output: 2
```

---

## 🧠 Function
```javascript
const findMedianSortedArrays = (array1, array2) => {
    let combined = array1.concat(array2);

    combined.sort(function(x, y){
        return x - y;
    });

    let l = combined.length;

    if (l % 2 === 0) {
        return (combined[Math.floor(l / 2) - 1] + combined[Math.ceil(l / 2)]) / 2;
    } else {
        return combined[Math.floor(l / 2)];
    }
};
```

---

## 📘 Example Outputs
| Array 1 | Array 2 | Median |
|---|---|---:|
| [1, 3] | [2] | 2 |
| [1, 2] | [3, 4] | 2.5 |
| [0, 0] | [0, 0] | 0 |

---

## ⚙️ Complexity
- **Time Complexity:** O((m+n) log(m+n))
- **Space Complexity:** O(m+n)

Where `m` and `n` are the lengths of the two arrays.

---

## 🌟 Notes
This solution is easy to understand and great for learning array manipulation in JavaScript.

Perfect for:
- coding practice 💡
- algorithm learning 📚
- GitHub portfolio projects 🚀

---
Made with ❤️ in JavaScript
