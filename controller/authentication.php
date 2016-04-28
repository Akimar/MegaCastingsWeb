<?php
	session_start();

	require_once'../persistence/authenticationQuery.php';
	require_once'../persistence/commonQuery.php';

	if (!empty($_POST['psswd']) && !empty($_POST['login']))
	{
		$_POST['psswd'] = hash("sha256", $_POST['psswd']);
		
		// Ouverture de la connexion à la base
		$db = getDb("127.0.0.1", "megacasting", "root", "formation");
		
		$query = Authentication($db, $_POST['login'], hash("sha256", $_POST['psswd']));

		if($query->rowCount())
		{
			$_SESSION['Login'] = $_POST['login'];
			
			header('location : ../index.php');
		}

		else
		{
			// erreur avec login et/ou password
			echo'<script> alert("pas ok");</script>';
		}
	}
	

	var_dump($_SESSION);
	var_dump($_POST);



	require_once '../view/authenticationView.php';

?>
