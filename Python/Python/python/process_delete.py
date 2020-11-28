#!python

import cgi, os

form = cgi.FieldStorage()
pageId = form["pageId"].value

os.remove('data/' + pageId)

#Redirection, 새로운 name의 이름으로 파일을 만들고 그 파일로 이동
print("Location: index.py")
print()