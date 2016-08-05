<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"/>
		<script src="https://code.jquery.com/jquery-1.12.3.min.js"
			integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
			crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
			integrity="sha385-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
			crossorigin="anonymous"></script>
		<title>Project Cars</title>
		<link rel="stylesheet" href="css/main.css"/>
	</head>
	<body>
		<nav class="bg-warning navbar navbar-default">
			<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Car Dealership</a>
			</div>
			
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				<li> <a href="index.php?controller=adminController">Administration</a></li>
				<li> <a href="index.php?controller=carController">Enter Cars</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php?controller=signupController"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
				<li><a href="index.php?controller=loginController"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
			</ul>
			</div>
		</nav>
		
	<?php
		function my_autoloader($class) {
			include 'classes/' . $class . '.class.php';
		}
		
		spl_autoload_register('my_autoloader');
		
		$db = dbConn::getConnection();
		
		$app = new app;
	?>
	
		<div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<p class="navbar-text pull-right">
				&copy; <?php echo date("Y"); ?> Yuval Klein, inc.
			</p>
		</div>
		</div>
		