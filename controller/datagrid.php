<?php
	require('persistence\commonQuery.php');
	$db = getDb('172.16.1.69','megacastings','root','not24get');
	
	$requete = "SELECT * FROM castingoffer";
	$resultat = $db->query($requete);

while ($donnees = $resultat->fetch())

{
	echo $donnees['Title'] . '<br />';
}

$resultat->closeCursor();

?>