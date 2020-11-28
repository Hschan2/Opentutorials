#!python
print("Content-Type: text/html; charset-utf-8\n")

'''
import maths

print(maths.average(1,2,3))
print(maths.plus(1,2))
print(maths.pi)
'''

#print 에서 maths 를 안쓰기 위해서
from maths import average, plus, pi

print(average(1,2,3))
print(plus(1,2))
print(pi)