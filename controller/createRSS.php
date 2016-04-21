<?php

	require('../persistence/commonQuery.php');
	
	$db = getDb('172.16.1.69','megacastings','root','not24get');
	
	$requete = "SELECT * FROM castingoffer";
	$resultat = $db->query($requete);

	$date = date("d-m-Y");
	echo '<lastBuildDate>';
	echo $date;
	echo '</lastBuildDate>';
	

while ($donnees = $resultat->fetch())

{
	echo '<item>';
	
	echo '<title>'. $donnees['Title'] . '</title>';
	echo '<description>' . $donnees['PostDescription'] . '</description>';
	echo '</item>';
}

$resultat->closeCursor();
$db = null;
?>