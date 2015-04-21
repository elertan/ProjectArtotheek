<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8">
	<title>DaVinci - Arthotheek</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
	<div id="main">
		{!! Form::open(['route' => 'artist_store', 'class' => 'form']) !!}
		{!! Form::label('testfield:') !!}
		{!! Form::text('test') !!}
		{!! Form::submit('Send') !!}
		{!! Form::close() !!}
	</div>
	<footer id="footer">
		<p>Artotheek project Da Vinci College</p>
	</footer>
</body>
</html>