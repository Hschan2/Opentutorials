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
	<?php if(isset($_GET['id'])) { ?>
	<a href="update.php?id=<?= $_GET['id'] ?>">update</a>
	<?php } ?>
	
	<form action="update_process.php" method="post">
		<input type="hidden" name="old_title" value="<?= $_GET['id'] ?>">
		<p><input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>"></p>
		<p><textarea  name="description" placeholder="Description" >
			<?php print_description(); ?>
		</textarea></p>
		<p><input type="submit"></p>
	</form>
</body>
</html>