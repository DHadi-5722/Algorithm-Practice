def intToRoman( num):
        # Define the symbols and their corresponding values in descending order
        symbols = [
            (1000, 'M'), (900, 'CM'), (500, 'D'), (400, 'CD'),
            (100, 'C'), (90, 'XC'), (50, 'L'), (40, 'XL'),
            (10, 'X'), (9, 'IX'), (5, 'V'), (4, 'IV'), (1, 'I')
        ]
        roman_str = ''  # Initialize an empty string to store the result
        for value, symbol in symbols:
            while num >= value:
                roman_str += symbol  # Append the corresponding symbol to the result
                num -= value  # Subtract the value from num
        return roman_str

        
print(intToRoman(2015))
