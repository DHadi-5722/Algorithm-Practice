class ListNode:
        def __init__(self, val = 0, next = None):
            self.val = val
            self.next = next
def addTwoNumbers(l1, l2):
        def ltonum(l1): # convert linked list to numbers; a null list leads to a zero
            l1ptr = l1  # current position for l1
            l1num = 0  # initiate the number
            i = 0  # initiate the power of ten
            while l1ptr != None:  # to void usig a null ptr to refer
                l1num += l1ptr.val * pow(10, i)  # starting from least significant digit, multiplying 10^i, `i` is increasing
                l1ptr = l1ptr.next  # shift the current position to the next node
                i += 1
            return l1num
        
        l1num = ltonum(l1)
        l2num = ltonum(l2)
        l3num = l1num + l2num
        
        # first node
        l3 = ListNode(l3num % 10) # head; the least significant digit as the head
        
        # remaining nodes, if there are any
        l3num = int(l3num / 10)  # the next least significant digit
        l3tail = l3  # only one node; the head is also the tail
        while l3num != 0:
            l3new = ListNode(l3num % 10)
            l3tail.next = l3new  # let the current tail point to the new node
            l3tail = l3new  # update the position of the tail
            l3num = int(l3num / 10)  # go to the next digit
        return l3  # return the head
def printlist(node):
            while node:
                print(node.val, end = "-")
                node = node.next
L1 = ListNode(8, ListNode(4, ListNode(9)))
L2 = ListNode(2, ListNode(5, ListNode(7)))
linkedlist = addTwoNumbers(L1, L2)
printlist(linkedlist)