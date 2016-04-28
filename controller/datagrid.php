<?php
	require('persistence/commonQuery.php');
	$db = getDb('172.16.1.69','megacastings','root','not24get');
	
	$requete = "SELECT * FROM CastingOffer";
	if (!empty($_GET["Recherche"]))
	{
		$requete = $requete." WHERE Title LIKE '%".$_GET["Recherche"]."%'";
	}
	$resultat = $db->query($requete);
 
while ($donnees = $resultat->fetch())

{
	echo '<br/>';
	echo '<tr>';
	
	echo '<td>' . $donnees['Title'] . '</td>';
	echo '<td>' . $donnees['Reference'] . '</td>';
	echo '<td>' . $donnees['PostDescription'] . '</td>';
	echo '<td><a href="view/offerView.php?Offer=' . $donnees['Id'] . '">Lien</a></td>';
	
	echo '</tr>';
}

$resultat->closeCursor();
$db = null;

?>