<?php
	require('persistence\commonQuery.php');
	$db = getDb('172.16.1.69','megacastings','root','not24get');
	
	$requete = "SELECT * FROM castingoffer";
	$resultat = $db->query($requete);

while ($donnees = $resultat->fetch())

{
	echo '<tr>';
	
	echo '<td>' . $donnees['Title'] . '</td>';
	echo '<td>' . $donnees['Reference'] . '</td>';
	echo '<td>' . $donnees['PostDescription'] . '</td>';
	echo '<td><a href="offreview.php?o=' . $donnees['Id'] . '">Lien</a></td>';
	
	echo '</tr>';
}

$resultat->closeCursor();

?>