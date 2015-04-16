<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DaVinci - Arthotheek</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<a href="/" class="header-logo"></a>
			<nav class="navigation">
				<ul>
					<li><a href="#">Collectie</a></li>
					<li><a href="#">Leningen</a></li>
					<li><a href="#">Overigen</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div id="main" role="main">
		<h1>{{ $artist->name }}</h1>
		<p>{{ $artist->description }}</p>
		<img src="../{{ $artist->getSelfPortraitPath() }}" class="portrait-image" style="margin-top: 40px; width: 250px; height: 350px;">
	</div>
	<footer id="footer">
		<p>Artotheek project Da Vinci College</p>
	</footer>
</body>
</html>