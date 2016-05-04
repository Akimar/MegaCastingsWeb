<?php

	require_once'../persistence/authenticationQuery.php';
	require_once'../persistence/commonQuery.php';

	if (!empty($_POST['login']) && !empty($_POST['psswd'])  && !empty($_POST['cpsswd']))
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
			$db = getDb();

			// Vérifie si le login entré correspond à un partenaire
			$query = Exists($db, $_POST['login']);

			var_dump($query);

			if(!$query->rowCount())
			{
				// login ne correspont à aucune entrée en base
				echo'<script> alert("Login / mot de passe incorrect");</script>';
			}
			else
			{
				// Changement du mot de passe
				SetPassword($db, $_POST['login'], $_POST['psswd']);

				echo'<script> alert("Mot de passe modifié avec succès.");</script>';
			}
		}
		
	}

require '../view/firstPasswordView.php';
?>