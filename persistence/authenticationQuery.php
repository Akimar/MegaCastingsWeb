<?php


function Authentication($login, $password)
{
	$query = $db -> prepare('SELECT * FROM collaborator WHERE Login = :login AND Password = :password');
	$query-> execute(array(':login' => $login,
								  ':password' => $password));

		return $query;
}


?>