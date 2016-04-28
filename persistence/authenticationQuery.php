<?php


function Authentication($db, $login, $password)
{

	$query = $db -> prepare('SELECT * FROM collaborator WHERE Login = :login AND Password = :password');
	$query-> execute(array(':login' => $login,
						   ':password' => $password));

		return $query;
}

function SetPassword($db, $login, $password)
{
	$query = $db -> prepare('UPDATE collaborator SET Password = :password WHERE Login = :login');
	$query-> execute(array(':login' => $login,
								  ':password' => $password));

}

function Exists($db, $login)
{
	$query = $db -> prepare('SELECT * FROM collaborator WHERE Login = :login');
	$query-> execute(array(':login' => $login));

	return $query;
}



?>