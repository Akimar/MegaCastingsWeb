<html>
	<<?php require('head.php'); session_start();?>

	<body>
	<?php require('header.php'); ?>
		<form method="post" action="" class="centrage" >
			<fieldset style="width: 30px;">

				<legend> Créer votre mot de passe </legend>
				<label for="login"> Login </label><br/>
				<input type="text" name="login" id="login"/><br/>
		
				<label for="psswd"> Mot de Passe </label><br/>
				<input type="password" name="psswd" id="psswd"/><br/><br/>

				<label for="cpsswd"> Confirmer le mot de Passe </label><br/>
				<input type="password" name="cpsswd" id="cpsswd"/><br/><br/>


				<input type="submit" name="connexion" value="Envoyer"/>
			</fieldset>
		</form>
		<?php require('footer.php');?>
	</body>

</html>