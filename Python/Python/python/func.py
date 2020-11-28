#!python
print("Content-Type: text/html; charset-utf-8\n")

'''
a = 1
b = 2
c = 3
s = a+b+c
r = s/3
print(r)
'''

'''
#average 함수 코드
def average() :
	a = 1
	b = 2
	c = 3
	s = a+b+c
	r = s/3
	print(r)

average()
'''
'''
#average 함수 코드 응용, 괄호에 변수를 넣어 더 쉽게 사용 (매개변수, parameter)
def average(a,b,c) :
	s = a+b+c
	r = s/3
	print(r)
#안에 값들은 인자라고 부른다. argument
average(10,20,30)
'''

def average(a,b,c) :
	s = a+b+c
	r = s/3
	return r
#안에 값들은 인자라고 부른다. argument
print(average(10,20,30))

def a() :
	return 'haha'
print(a())
