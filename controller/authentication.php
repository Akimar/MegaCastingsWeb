<?php
	session_start();

	require_once'../persistence/authenticationQuery.php';

	if (!empty($_POST['password']) && !empty($_POST['login']))
	{
		
		$query = Authentication($_POST['login'], hash("sha256", $_POST['password']));

		if($query.rowCount())
		{
			$_SESSION['IsLogged'] = true;
			$_SESSION['Log'] = $_POST['login'];

			header('location : ../index.php');
		}

		else
		{
			$_SESSION['logError'] = false;
		}
	}
	


	
		

	



	require_once '../view/authenticationView.php';

?>
