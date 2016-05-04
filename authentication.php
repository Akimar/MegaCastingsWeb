<?php
	session_start();

	require_once'../persistence/authenticationQuery.php';
	require_once'../persistence/commonQuery.php';

	if (!empty($_POST['psswd']) && !empty($_POST['login']))
	{
	
		// Ouverture de la connexion à la base
		$db = getDb();
		
		$query = Authentication($db, $_POST['login'], hash("sha256", $_POST['psswd']));//appel fonction authentication
		if($query->rowCount())//si il y a un match login / mdp en base
		{
			$_SESSION['Login'] = $_POST['login'];//login mis en session
			header('location: ../index.php');//redirection page d'accueil
		}

		else
		{
			// erreur avec login et/ou password
			echo'<script> alert("Identifiant/Mot de passe non reconnu");</script>';
		}
	}
	
	require_once '../view/authenticationView.php';
?>
