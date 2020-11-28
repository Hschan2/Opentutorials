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

	$update_link = '';

	if (isset($_GET['id'])) {
		//$filtered_id 는 보안을 위해 사용
		$filtered_id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql = "SELECT * FROM topic WHERE id={$filtered_id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);

		$article = array('title' => htmlspecialchars($row['title']), 
			'description' => htmlspecialchars($row['description'])
			);

		//$article['title'] = $row['title'];
		//$article['description'] = $row['description'];
		$update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
	} else {
		$article = array('title' => 'Welcome', 
			'description' => 'This is Web');
	}
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
	<form action="update_process.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>">
		<p><input type="text" name="title" placeholder="Title" 
			value="<?= $article['title'] ?>"></p>
		<p><textarea name="description" placeholder="Description">
			<?= $article['description'] ?>
		</textarea></p>
		<p><input type="submit"></p>
	</form>
</body>
</html>