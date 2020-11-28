#!python
print("Content-Type: text/html; charset-utf-8\n")
print(1)
print('hello world\n')
#boolean
print(True)
print(False)
#Expression
print(1+1)
#true
print(1==1)
#false
print(1==2)
#Membership operator, hello 가 hello world 안에 있나 없나
print('hello' in 'hello world')

import os.path
print(os.path.exists('boolean2.py'))