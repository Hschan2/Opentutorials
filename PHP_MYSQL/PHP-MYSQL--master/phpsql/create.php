<?php
	$conn = mysqli_connect("localhost","root","111111","opentutorials");
	
	$sql = "SELECT * FROM topic";
	$result = mysqli_query($conn, $sql);
	$list = '';

	// DB 내용 모두 가져오기 (배열)
	while($row = mysqli_fetch_array($result)) {
		//echo '<li>'.$row['title'].'</li>';
		//echo "<li>{$row['title']}</li>";
		//$list = $list."<li>{$row['title']}</li>";
		
		// htmlspecialchars 는 보안을 위해, 소스 및 문자 그대로 출력
		$escaped_title = htmlspecialchars($row['title']);
		//<li><a href="index.php?id=3">HTML</a></li>
		$list = $list."<li><a href=\"index.php?id={$row['id']}\">
		{$escaped_title}</a></li>";
	}

	// 글 읽기 SQL
	// $article = array('title' => 'Welcome', 
	//		'description' => 'This is Web');
	$sql = "SELECT * FROM author";
	$result = mysqli_query($conn, $sql);
	$select_form = '<select name = "author_id">';
	while($row = mysqli_fetch_array($result)){
		$select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
	}
	$select_form .= '</select>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
</head>
<body>
	<h1><a href="index.php">Web</a></h1>
	<ol>
		<!-- <?php echo $list; ?> -->
		<?= $list ?>
	</ol>
	<form action="create_process.php" method="post">
		<p><input type="text" name="title" placeholder="Title"></p>
		<p><textarea name="description" placeholder="Description"></textarea></p>
		<?= $select_form ?>
		<p><input type="submit"></p>
	</form>
</body>
</html>