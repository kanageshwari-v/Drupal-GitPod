def minimum_char_same_char(string):
    string=string.upper()
    count=1
    for i in string:
        x=string.count(i)
        if x>count:
            count=x 
    minimum_count=len(string)-count        
    print(minimum_count)  
    
minimum_char_same_char("BBBX")  
minimum_char_same_char("ABCDA")
minimum_char_same_char("Abcdefgh")