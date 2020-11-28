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
	$delete_link = '';
	$author = '';
	if (isset($_GET['id'])) {
		//$filtered_id 는 보안을 위해 사용
		$filtered_id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id={$filtered_id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);

		$article = array('title' => htmlspecialchars($row['title']), 
			'description' => htmlspecialchars($row['description']),
			'name' => htmlspecialchars($row['name'])
			);

		//$article['title'] = $row['title'];
		//$article['description'] = $row['description'];
		$update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
		$delete_link = '
		<p><form action = "delete_process.php" method = "post">
			<input type = "hidden" name = "id" value ="'.$_GET['id'].'">
			<input type = "submit" value = "delete">
		</form></p>
		';

		$author = "<p>by {$article['name']} </p>";
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
	<a href="author.php">Author</a>
	<ol>
		<!-- <?php echo $list; ?> -->
		<?= $list ?>
	</ol>
	<p><a href="create.php">create</a></p>
	<?= $update_link ?>
	<?= $delete_link ?>
	<h2><?= $article['title'] ?></h2>
	<?= $article['description'] ?>
	<?= $author ?>
</body>
</html>