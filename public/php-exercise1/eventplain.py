inp=list(map(int,input().split()))
peoples=inp[0]
budget=inp[1]
hotels=inp[2]
weeks=inp[3]
list1=[]
for i in range(hotels):
    inp1=int(input())
    inp2=list(map(int,input().split()))
    minimum=min(inp2)
    if minimum>=peoples:
        total=inp1*peoples
        if total<=budget:
            list1.append(total)
if len(list1)>0:
    print(min(list1))
else:
    print("Stay Home")