<?php


function Authentication($login, $password)
{
	try
	{
		$db  = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$query = $db -> prepare('SELECT * FROM collaborator WHERE Login = :login AND Password = :password');
	$query-> execute(array(':login' => $login,
								  ':password' => $password));

		return $query;
}
?>