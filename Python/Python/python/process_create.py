#!python

import cgi

form = cgi.FieldStorage()
name = form["name"].value
description = form['description'].value
#data 폴더에 CGI라는 네임의 파일을 쓰기형식으로 만들겠다
opened_file = open('data/' + name, 'w')
#CGI 파일에 description이라는 name의 내용을 넣겠다
opened_file.write(description)

#Redirection, 새로운 name의 이름으로 파일을 만들고 그 파일로 이동
print("Location: index.py?id="+name)
print()