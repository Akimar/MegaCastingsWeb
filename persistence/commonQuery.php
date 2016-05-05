<?php

/*
	Ensemble de requêtes utilisées dans toute l'application
**/


/**** Connexion à la base de données ******/

function getDb()
{
	//identifiants de la base
	$host = '172.16.1.69';
	$dbname = 'megacastings';
	$user = 'root';
	$pass = 'not24get';
	$dsn = 'mysql:host='.$host.';dbname='.$dbname;
	$username = $user;
	$password = $pass;
	$options = array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	try
	{
		$db = new PDO($dsn, $username, $password, $options);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e) 
	{
		echo 'Error : '.$e->getMessage();
  		die();
	}

	return $db; 
}



/****** Débute une transaction MySQL ******/

	function startTransaction($db)
	{
		$db->beginTransaction();
	}

/***** Termine et valide une transaction MySQL ******/

	function commitTransaction($db)
	{
		$db->commit();
	}

/****** Termine et annule une transaction MySQL ******/

	function rollbackTransaction($db)
	{
		$db->rollBack();
	}


/****** Change l'autocommit en fonction de la valeur en paramètre ******/

	function setAutoCommit($db, $val)
	{
		$commit = $db->query('SET AUTOCOMMIT ='.$val);
	}
?>