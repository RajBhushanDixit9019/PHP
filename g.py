# set of numbers..
a=[1,2,4,4]

# sum value...
sum=7

x=0
y=len(a)
A=0
B=0
# Logic...
for i in a:
    if(a[i]+a[i+1]==sum):
        A=a[i]
        B=a[i+1]
        break
    else:
        x+=1  

# output...
if((A==0)and(B==0)):
    print("No")
else:
    print("Yes")  