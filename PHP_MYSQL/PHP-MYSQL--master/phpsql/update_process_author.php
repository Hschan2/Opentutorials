<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

	// $filtered는 보안을 위해
	settype($_POST['id'], 'integer');
	$filtered = array(
		'id' => mysqli_real_escape_string($conn, $_POST['id']),
		'name' => mysqli_real_escape_string($conn, $_POST['name']),
		'profile' => mysqli_real_escape_string($conn, $_POST['profile'])
	);

	$sql = "UPDATE author
	SET name = '{$filtered['name']}', 
	profile = '{$filtered['profile']}'
	WHERE id = {$filtered['id']}
	";

	mysqli_query($conn, $sql);

	header('Location: author.php');
?>