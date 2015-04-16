<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8">
	<title>DaVinci - Arthotheek</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
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
	<div id="main" role="main" ng-init="names=<?=$artistsNamesData?>">
		<p class="margin-left-30" id="tbxLabel">Search:</p>
		<input ng-model="tbxSearch" type="text" name="tbxSearch" id="tbxSearch">
		<div class="artworks-gallery">
			<div class="portrait" ng-repeat="name in names | filter:tbxSearch">
				<a href="/artists/{{ name.toLowerCase().split(' ').join('-') }}">
					<img src="images/{{ name.toLowerCase().split(' ').join('-') }}/selfportrait.jpg" class="portrait-image">
					<p class="portrait-desc">{{ name }}</p>
				</a>
			</div>
		</div>
	</div>
	<footer id="footer">
		<p>Artotheek project Da Vinci College</p>
	</footer>
</body>
</html>