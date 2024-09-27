def palindrome(num):
    n=num
    rev=0
    while(num>0):
        a=num % 10
        rev=(rev*10)+a
        num=num//10
    if (n==rev):
        return True
    else:
        return False
num=1000
num=num-1
while(True):
    if (palindrome(num)):
        break
        num=num+1
print("biggest palindrome number below:")
print(num)