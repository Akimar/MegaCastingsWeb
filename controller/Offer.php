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
				echo '<br/><h2>' . $donnees['Title'] . '</h2><br/>';
				echo '<tr><th>Référence</th><th>'.$donnees['Reference']."</th></tr>";
				echo '<tr><th>Date de diffusion</th><th>'.$donnees['BroadcastStartingDate']."</th></tr>";
				echo '<tr><th>Date de début de contrat</th><th>'.$donnees['ContractStartingDate']."</th></tr>";
				echo '<tr><th>Lieu</th><th>'.$donnees['Location']."</th></tr>";
				echo '<tr><th>Nombre de poste</th><th>'.$donnees['PostNumber']."</th></tr>";
				echo '<tr><th>Description du poste</th><th>'.$donnees['PostDescription']."</th></tr>";
				echo '<tr><th>Profi recherché</th><th>'.$donnees['ProfileDescription']."</th></tr>";
				echo '<tr><th>Employeur</th><th>'.$donnees['Name']."</th></tr>";
				echo '<tr><th>Type de Contrat</th><th>'.$donnees['ConType']."</th></tr>";
				
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