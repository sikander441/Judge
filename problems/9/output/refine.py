n=int(input("Enter number of test cases:"))
for i in range(1,n+1):
 filename=str(i)+".out"
 fileContents = open(filename,"r").read()
 f = open(filename,"w", newline="\n")
 f.write(fileContents)
 f.close()

