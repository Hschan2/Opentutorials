#!python
print("Content-Type: text/html")
print()
import cgi, os, view

'''
#함수로 data 폴더 리스트 가져오기
def getList() :
  files = os.listdir('data')
  #files 값 출력
  print(files)
  listStr = ''
  for item in files:
    listStr = listStr + '<li><a href="index.py?id={name}">{name}</a></li>'.format(name=item)
  #listStr 출력
  print(listStr)
  return listStr
'''
#모듈로 가져오기 (view.py)

form = cgi.FieldStorage()
if 'id' in form:
  pageId = form["id"].value
  description = open('data/' + pageId, 'r').read()
else:
  pageId = 'Welcome'
  description = 'Hello, web'

print('''<!doctype html>
<html>
<head>
  <title>WEB1 - Welcome</title>
  <meta charset="utf-8">
</head>
<body>
  <h1><a href="index.py">WEB</a></h1>
  <ol>
    {listStr}
  </ol>
  <a href = "create.py">create</a>
  <form action = "process_create.py" method = "post">
    <p><input type = "text" name = "name" placeholder = "title"></p>
    <p><textarea rows="4" name= "description" 
    placeholder = "description"></textarea></p>
    <p><input type = "submit"></p>
  </form>
</body>
</html>
'''.format(title=pageId, desc=description, listStr=view.getList()))