<?php
	require('persistence/commonQuery.php');
	$db = getDb('172.16.1.69','megacastings','root','not24get');
	
	$requete = "SELECT * FROM CastingOffer";
	if (!empty($_GET["name"]))
	{
		$requete += "WHERE Title CONTAIN %".$_GET["Recherche"]."%";
	}
	$resultat = $db->query($requete);
//faire une fonction 
while ($donnees = $resultat->fetch())

{
	echo '<tr>';
	
	echo '<td>' . $donnees['Title'] . '</td>';
	echo '<td>' . $donnees['Reference'] . '</td>';
	echo '<td>' . $donnees['PostDescription'] . '</td>';
	echo '<td><a href="offerView.php?Offer=' . $donnees['Id'] . '">Lien</a></td>';
	
	echo '</tr>';
}

$resultat->closeCursor();
$db = null;

?>