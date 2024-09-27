def process_data(array):
    prod=1
    for i in array:
       x = i[0]-i[1]
       prod=prod * x
    print(prod)
process_data([[2, 5], [3, 4], [8, 7]]) 