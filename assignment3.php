<?php 

	spl_autoload_register(function ($class_name) {
			include $class_name . '.php';
	});

	$handa = new ChildClass("Henrique", "Student", "Brazil");

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<h1> Henrique Machado </h1>
	
	<section>
		<p> This is my first PHP Assignment</p>
		<p> It some how works!</p>
		
		<p> --------------------------------------</p>
		<p class = "output"><?= $handa; ?></p>
		
		<p>But now he moved to USA </p>
		<?= $handa->updatecountry("USA"); ?>

		<p>So now,</p>
		<p class = "output"><?= $handa; ?></p>
		<p> Enjoy your new experience abroad</p>
		
		
	</section>
</body>
</html>
