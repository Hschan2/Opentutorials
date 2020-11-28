#!python

import os

def getList() :
  files = os.listdir('data')
  '''
  #files 값 출력
  print(files)
  '''
  listStr = ''
  for item in files:
    listStr = listStr + '<li><a href="index.py?id={name}">{name}</a></li>'.format(name=item)
  '''
  #listStr 출력
  print(listStr)
  '''
  return listStr