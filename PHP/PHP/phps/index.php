<?php 
	require_once('lib/print.php');
	// require_once => 중복 예방차원. 한번만 실행하라.
	// reaquire 만 쓰면 중복 오류 가능성
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
	<?php if(isset($_GET['id'])) { ?>
	<a href="update.php?id=<?= $_GET['id'] ?>">update</a>
	<form action="delete_process.php" method="post">
		<p><input type="hidden" name="id" value="<?= $_GET['id'] ?>"></p>
		<input type="submit" value="delete">
	</form>
	<?php } ?>
	
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