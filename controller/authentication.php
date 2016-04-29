<?php
	session_start();

	require_once'../persistence/authenticationQuery.php';
	require_once'../persistence/commonQuery.php';

	if (!empty($_POST['psswd']) && !empty($_POST['login']))
	{
	
		// Ouverture de la connexion à la base
		$db = getDb();
		
		$query = Authentication($db, $_POST['login'], hash("sha256", $_POST['psswd']));
		if($query->rowCount())
		{
			$_SESSION['Login'] = $_POST['login'];
			echo'<script> alert("prout");</script>';
			header('location : ../index.php');
		}

		else
		{
			// erreur avec login et/ou password
			echo'<script> alert("Identifiant/Mot de passe non reconnu");</script>';
		}
	}
	
	require_once '../view/authenticationView.php';
?>
