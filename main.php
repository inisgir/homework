<!DOCTYPE html>
<html>
	<head>
		<title>VISIT CARD</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="flex-container">
			<div class="header">
				<?php include 'img.inc.php' ?>
				<?php include 'menu.inc.php' ?>
			</div>
		
		<div class="about_me">
			<h1> <?php echo $hi ?> </h1>
			<div class="data">
			<div class="myImg">
			<?php echo "<img src='img/php.jpg' height='300px' >"; ?>
			</div>
			<div class="fullname"}>
				<p>Моё имя <?php echo $name, ' ', $surname . '<br>';
				   		         echo 'город', ' ', $city; ?> </p>
				<p>Мне <?php echo $age; ?> год </p>
				<p>Я научился создавть переменные </p>
				<p>Изучил обычные операции с ними </p>
			</div>
		</div>
		<div class="knowledge">
			<?php include 'knowledge.inc.php'; ?>
			<?php echo $a, ' ', $b, ' ', $c; ?> <br>
			<?php $a = 12;
				  $b = 18;
				  $c = $a + $b;
				  echo $c; ?> <br>
			<?php echo $d; ?>
		</div>
		
			<?php include 'footer.inc.php' ?>
		</div>
	</body>
</html>