<?php
	session_start();
	require('../persistence/commonQuery.php');
	
	if(empty($_SESSION['Login']))
	{
		header('location: ../view/authenticationView.php');
	}
	else
	{
		$db = getDb();
	
		$requete = "SELECT * FROM CastingOffer";
		$resultat = $db->query($requete);

		$date = date("d-m-Y");
		echo '<lastBuildDate>';
		echo $date;
		echo '</lastBuildDate>'."\n";
		

		while ($donnees = $resultat->fetch())

		{
			echo "\t"."\t"."\t".'<item>';
			
			echo '<title>'. $donnees['Title'] . '</title>';
			echo '<description>' . $donnees['PostDescription'] . '</description>';
			echo '</item>';
		}
		echo "\n";
		$resultat->closeCursor();
		$db = null;
	}
	
	
	
?>