<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

	// $filtered는 보안을 위해
	settype($_POST['id'], 'integer');
	$filtered = array(
		'id' => mysqli_real_escape_string($conn, $_POST['id']),
	);

	/* author 와 연결된 topic 의 글도 삭제 
	$sql = "DELETE FROM topic WHERE author_id = {$filtered['id']}";
	mysqli_query($conn, $sql);
	*/ 

	$sql = "DELETE FROM author WHERE id = {$filtered['id']}";

	mysqli_query($conn, $sql);

	header('Location: author.php');
?>