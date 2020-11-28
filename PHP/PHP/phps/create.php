<?php 
	require('lib/print.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>php실습</title>
</head>
<body>
	<!--
	<?php
		echo date('y-m-d H:i:s');
	?>
	-->
	<h1><a href = "index.php">Web</a></h1>
	<ul>
		<?php 
			print_list();
		?>
	</ul>
	<a href="create.php">create</a>
	<form action="create_process.php" method="post">
		<p><input type="text" name="title" placeholder="Title"></p>
		<p><textarea  name="description" placeholder="Description"></textarea></p>
		<p><input type="submit"></p>
	</form>
	<h2>
		<?php
		print_title();
		?>
	</h2>
	<?php
		print_description();
	?>
</body>
</html>