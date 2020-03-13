#!/usr/bin/env python
# coding: utf-8

# In[2]:


import sys
import random 

def my_function(x):
  return x[::-1]

first_arg = sys.argv[1]
a = 'C:\\xampp\\htdocs\\uploads\\'
b= first_arg
c='.txt'
path = a+b+c
print(path)
a1 = 'C:\\xampp\\htdocs\\testmac\\'
b1= str(random.randrange(0, 1000, 3))
c1='.txt'
path1 = a1+b1+c1
f= open(path,"r")
for i in range(1):
    f1= open(path1,"w+")
    a=f.read()
    b = my_function(a)
    print(b)
    f1.write(b)
f1.close()
f.close()


# In[ ]:




