<?php

	require('../persistence/commonQuery.php');

	if(!empty($_GET["Offer"]))
	{
		try 
		{  
			$db = getDb();
			$requete = "SELECT * FROM CastingOffer INNER JOIN Client ON CastingOffer.Client_id = Client.Id INNER JOIN ContractType ON CastingOffer.ContractType_id = ContractType.Id WHERE CastingOffer.Id=".$_GET["Offer"];
			
			$resultat = $db->query($requete);
			
			while ($donnees = $resultat->fetch())
			{
				echo '<h2>' . $donnees['Title'] . '</h2>';
				echo '<p>Référence : '.$donnees['Reference']."<br/>";
				echo 'Date de diffusion : '.$donnees['BroadcastStartingDate']."<br/>";
				echo 'Date de début de contrat : '.$donnees['ContractStartingDate']."<br/>";
				echo 'Lieu : '.$donnees['Location']."<br/>";
				echo 'Nombre de poste : '.$donnees['PostNumber']."<br/>";
				echo 'Description du poste : '.$donnees['PostDescription']."<br/>";
				echo 'Profi recherché : '.$donnees['ProfileDescription']."<br/>";
				echo 'Employeur : '.$donnees['Name']."<br/>";
				echo 'Type de Contrat : '.$donnees['ConType']."<br/>";
				
				echo '</tr>';
			}
		}
		catch(PDOException $e) {  
			print "Error!: " . $e->getMessage() . "<br/>";
		}

		$resultat->closeCursor();
		$db = null;
	}
	else
	{
		header('Location: ../index.php');   
	}
?>