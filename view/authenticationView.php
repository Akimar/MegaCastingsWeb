<html>

	<?php require('head.php'); ?>
	<body>
		<?php require('header.php'); ?>
		
		<form method="post" action="" >
			<fieldset class="centrage">
				<legend> Authentifiez-vous pour acccéder à vos flux </legend>
				<label for="login"> Login </label><br/>
				<input type="text" name="login" id="login"/><br/>
		
				<label for="psswd"> Mot de Passe </label><br/>
				<input type="password" name="psswd" id="psswd"/><br/><br/>

		
			    <a href="../controller/firstPassword.php" alt="Première connexion">Première Connexion ?<a>

				<input type="submit" name="connexion" value="Connexion"/>
			</fieldset>
		</form>
		<?php require('footer.php'); ?>
	</body>

</html>
