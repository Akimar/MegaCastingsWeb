<html>
	<head>
		<title>Authentification</title>
		<meta charset='utf-8'/>
	</head>

	<body>
		<form method="post" action="" >
			<fieldset style="width: 30px;">
				<legend> Authentifiez-vous pour acccéder à vos flux </legend>
				<label for="login"> Login </label><br/>
				<input type="text" name="login" id="login"/><br/>
		
				<label for="mdp"> Mot de Passe </label><br/>
				<input type="password" name="mdp" id="mdp"/><br/><br/>

				<a href="../controller/managePassword.php" alt="Nouveau mot de passe">Mot de passe oubli&eacute; ?<a>
			    <a href="../controller/managePassword.php" alt="Première connexion">Première Connexion ?<a>

				<input type="submit" name="connexion" value="Connexion"/>
			</fieldset>
		</form>
	</body>

</html>
