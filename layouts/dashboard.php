<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TUGAS 2 WEB | Web Lanjutan</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/anyabelajr.jpeg" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/hyanya.jpeg" class="brand">
			<div class="user">Haryanzelina Bancin</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/anyeremove.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/user">
						<img class="icon" src="<?php echo AST; ?>/img/anyeremove.png" alt=""> User
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/golongan">
						<img class="icon" src="<?php echo AST; ?>/img/anyeremove.png" alt=""> Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/anyeremove.png" alt=""> Pelanggan
					</a>
				</li>
				<li>
				<a href="<?php echo URL; ?>/index">
					<img id="logout" class="icon" src="<?php echo AST; ?>/img/anyeremove.png" alt=""> LogOut
				</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Designed by Haryanzelina Bancin
		</footer>
	</main>

</body>

</html>