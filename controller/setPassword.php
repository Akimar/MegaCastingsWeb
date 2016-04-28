<?php

session_start();

	require_once'../persistence/authenticationQuery.php';
	require_once'../persistence/commonQuery.php';

	if (!empty($_POST['psswd'])  && !empty($_POST['cpsswd']))
	{
		$_POST['psswd'] = hash("sha256", $_POST['psswd']);
		$_POST['cpsswd'] = hash("sha256", $_POST['cpsswd']);

		if($_POST['psswd'] != $_POST['cpsswd'])
		{
			//mots de passe ne correspondent pas
		}

		else
		{
			// Ouverture de la connexion à la base
			$db = getDb("megacastings", "root", "formation");

			// Changement du mot de passe
			SetPassword($db, $_SESSION['Login'], $_POST['psswd']);
		}
		
	}
	var_dump($_SESSION);
	var_dump($_POST);


require '../view/managePasswordView.php';
?>

