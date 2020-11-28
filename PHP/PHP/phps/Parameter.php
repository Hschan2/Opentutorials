<!DOCTYPE html>
<html>
<head>
	<title>URL Parameter</title>
</head>
<body>
	<!-- url의 name 값을 php에 가져와 출력
	http://127.0.0.1/phps/parameter.php?name=leezche -->
	안녕하세요. <?php echo $_GET['name']; ?> <br>
	<!-- http://127.0.0.1/phps/parameter.php?name=hong&address=%EC%9D%B8%EC%B2%9C -->
	안녕하세요. <?php echo $_GET['address']; ?> 에 사시는 <?php echo $_GET['name']; ?> 님
</body>
</html>