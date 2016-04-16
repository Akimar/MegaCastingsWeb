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
			$db = getDb("127.0.0.1", "megacasting", "root", "formation");

			// Vérifie si le login entré correspond à un partenaire
			$query = Exists($db, $_POST['login']);

			if(!$query.rowCount())
			{
				// login ne correspont à aucune entrée en base
				echo'<script> alert("pas ok");</script>';
			}
			else
			{
				// Changement du mot de passe
				SetPassword($db, $_SESSION['Login'], $_POST['psswd']);

				echo'<script> alert("ok");</script>';
			}

			
			
		}
		
	}



require '../view/firstPasswordView.php';
?>