<?php
	session_start();

	require_once'../persistence/authenticationQuery.php';
	require_once'../persistence/commonQuery.php';

	if (!empty($_POST['psswd']) && !empty($_POST['login']))
	{
		// Ouverture de la connexion à la base
		$db = getDb("megacastings", "root", "formation");
		
		$query = Authentication($_POST['login'], hash("sha256", $_POST['psswd']));

		if($query.rowCount())
		{
			$_SESSION['Login'] = $_POST['login'];

			header('location : ../index.php');
		}

		else
		{
			// erreur avec login ou password
		}
	}
	


	
		

	var_dump($_SESSION);



	require_once '../view/authenticationView.php';

?>
