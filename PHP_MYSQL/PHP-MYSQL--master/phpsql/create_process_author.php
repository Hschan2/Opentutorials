<?php
	$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');

	// $filtered는 보안을 위해
	$filtered = array(
		'name' => mysqli_real_escape_string($conn, $_POST['name']),
		'profile' => mysqli_real_escape_string($conn, $_POST['profile'])
	);

	$sql = "INSERT INTO author (name, profile) 
	VALUES (
	'{$filtered['name']}', 
	'{$filtered['profile']}'
	)";

	mysqli_query($conn, $sql);

	header('Location: author.php');
?>