<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./Vues/css/style.css" />
		<title>Connection</title>
	</head>
	<body>
		<header>
			<div class="tete">
				<a href="/MVC/"><img src ="./Vues/images/logo.jpg"></a>
			</div>
		</header>
		<div class="login">
			<form method="post" action="./index.php?Etat=login">
				<label>Identifiant :</label>
				<div class="contours">
					<input type="text" name="login" id="login" placeholder="Identifiant" required>
				</div>
				<br>
				<label>Mot de passe : </label>
				<input type="password" name="password" id="mdp" placeholder="Mot de passe" required>
				<br/>
				<br>
				</br>
				<input class="button-1" type="submit" value="Connexion" />
				<div>
					
				</div>
			</form>
		</div>
	</div>
</body>
</html>