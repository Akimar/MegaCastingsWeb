<?php


function Authentication($db, $login, $password)
{
	$query = $db -> prepare('SELECT * FROM Collaborator WHERE Login = :login AND Password = :password');
	$query-> execute(array(':login' => $login,
						   ':password' => $password));

		return $query;
}

function SetPassword($db, $login, $password)
{
	$query = $db -> prepare('UPDATE Collaborator SET Password = :password WHERE Login = :login');
	$query-> execute(array(':login' => $login,
						   ':password' => $password));

}

function Exists($db, $login)
{
	$query = $db -> prepare('SELECT * FROM Collaborator WHERE Login = :login');
	$query-> execute(array(':login' => $login));

	return $query;
}



?>