
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profiel</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Logistiek Memory</h1>
				<a href="home.php"><i class="fas fa-user-circle"></i>Profiel</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Log uit</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profiel pagina</h2>
			<div>
				<p>Uw account informatie:</p>
				<table>
					<tr>
						<td>Wachtwoord:</td>
						<td><?=$pass?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$name?></td>
					</tr>
				</table>
			</div>
	</body>
</html>