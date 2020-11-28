#!python

import cgi, os

form = cgi.FieldStorage()
pageId = form["pageId"].value
name = form["name"].value
description = form['description'].value
#hidden 형식으로 되어있는 pageId 값을 열겠다
opened_file = open('data/' + pageId, 'w')
#CGI 파일에 description이라는 name의 내용을 넣겠다
opened_file.write(description)
#열었으면 닫아야 한다.
opened_file.close()

#data 폴더의 pageId를 data폴더의 name으로 바꾼다
os.rename('data/' + pageId,'data/' + name)

#Redirection, 새로운 name의 이름으로 파일을 만들고 그 파일로 이동
print("Location: index.py?id="+name)
print()