#!python
print("content-type: text/html; charset-utf-8\n")
user_input = input('password?')

#기본 if
'''
if user_pwd = '111111':
	print('hello master')
else:
	print('who are you?')
'''

#중복 if
'''
if user_id == 'egoing':
	if user_pwd == '111111':
		print('hello master')
	else:
		print('who are you?')
else: 
	print('who are you?')
'''

#and 사용 if
'''
if user_id == 'egoing' and user_pwd == '111111':
	print('hello master')
else:
	print('who are you?')
'''

#else if 포함 => elif
if user_id == 'egoing' and user_pwd == '111111':
	print('hello master')
elif user_id == 'leezche' and user_pwd == '222':
	print('hello world')
else:
	print('who are you?')
