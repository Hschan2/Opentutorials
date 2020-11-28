#!python
print("Content-Type: text/html; charset-utf-8\n")
s = [1, 'four', 9 , 16, 25]
print(s)
#s의 1 출력
print(s[0])
#s의 수(길이)
print(len(s))
#s의 2번째를 4로 변경
s[1] = 4
print(s)
#s의 3번째 삭제
del s[2]
print(s)

print('a'+'b')
#container로 합치기
print(['a']+['b'])
#길이
print(len(['a']+['b']+['c']))

a = ['egoing','seoul','programer']
print(a[0])

#id로 출력
person = {'name':'egoing','address':'seoul'}
print(person['name'])