<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

	// $filtered는 보안을 위해
	settype($_POST['id'], 'integer');
	$filtered = array(
		'id' => mysqli_real_escape_string($conn, $_POST['id']),
	);

	$sql = "DELETE FROM topic WHERE id = {$filtered['id']}";

	mysqli_query($conn, $sql);

	header('Location: index.php');
?>