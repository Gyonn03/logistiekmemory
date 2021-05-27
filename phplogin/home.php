<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Pagina</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Logistiek Memory</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profiel</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log uit</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Pagina</h2>
			<p>Welkom terug, <?=$_SESSION['name']?>!</p>
		</div>
	
		<div class="content">
		<a href="../chart.php" class="chartbutton" >Resultaten</a>
</div>
</body>
</html>