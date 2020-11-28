<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

	// $filtered는 보안을 위해
	$filtered = array(
		'title' => mysqli_real_escape_string($conn, $_POST['title']),
		'description' => mysqli_real_escape_string($conn, $_POST['description']),
		'author_id' => mysqli_real_escape_string($conn, $_POST['author_id'])
	);

	$sql = "INSERT INTO topic (title, description, created, author_id) 
	VALUES ('{$filtered['title']}', '{$filtered['description']}', NOW(), 
	'{$filtered['author_id']}')";

	mysqli_query($conn, $sql);

	header('Location: index.php'.$row['id']);
?>