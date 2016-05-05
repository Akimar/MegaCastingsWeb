<?php
	require('persistence/commonQuery.php');
	$db = getDb();
	
	$requete = "SELECT * FROM CastingOffer";
	if (!empty($_GET["Recherche"]))//Filtre recherche
	{
		$requete = $requete." WHERE Title LIKE '%".$_GET["Recherche"]."%'";
	}
	$resultat = $db->query($requete);
 
while ($donnees = $resultat->fetch())//pour chaque resultat

{
	echo '<br/>';
	echo '<tr>';//faire une ligne 
	
	echo '<td>' . $donnees['Title'] . '</td>';
	echo '<td>' . $donnees['Reference'] . '</td>';
	echo '<td>' . $donnees['PostDescription'] . '</td>';
	echo '<td><a href="controller/Offer.php?Offer=' . $donnees['Id'] . '">Lien</a></td>';//lien unique de l'offre
	
	echo '</tr>';
}

$resultat->closeCursor();
$db = null;

?>