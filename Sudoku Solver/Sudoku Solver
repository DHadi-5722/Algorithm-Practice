class Solution(object):
    def solveSudoku(self, board):
        """
        :type board: List[List[str]]
        :rtype: None Do not return anything, modify board in-place instead.
        """
     # Helper function to check if placing num in board[row][col] is valid
        def isValid(board, row, col, num):
            # Check the row
            for c in range(9):
                if board[row][c] == num:
                    return False
            
            # Check the column
            for r in range(9):
                if board[r][col] == num:
                    return False
            
            # Check the 3x3 sub-box
            box_row, box_col = 3 * (row // 3), 3 * (col // 3)
            for r in range(box_row, box_row + 3):
                for c in range(box_col, box_col + 3):
                    if board[r][c] == num:
                        return False
            
            return True
        
        # Helper function to solve the Sudoku using backtracking
        def solve(board):
            for row in range(9):
                for col in range(9):
                    if board[row][col] == '.':
                        for num in map(str, range(1, 10)):  # '1' to '9'
                            if isValid(board, row, col, num):
                                board[row][col] = num
                                if solve(board):
                                    return True
                                board[row][col] = '.'  # Reset on backtrack
                        return False  # No valid number found
            return True
        
        solve(board)

# Example usage:
solution = Solution()
board = [
    ["5","3",".",".","7",".",".",".","."],
    ["6",".",".","1","9","5",".",".","."],
    [".","9","8",".",".",".",".","6","."],
    ["8",".",".",".","6",".",".",".","3"],
    ["4",".",".","8",".","3",".",".","1"],
    ["7",".",".",".","2",".",".",".","6"],
    [".","6",".",".",".",".","2","8","."],
    [".",".",".","4","1","9",".",".","5"],
    [".",".",".",".","8",".",".","7","9"]
]
solution.solveSudoku(board)
print(board)   