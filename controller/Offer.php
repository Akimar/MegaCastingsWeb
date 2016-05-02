<?php
	
	require('../persistence/commonQuery.php');

	if(!empty($_GET["Offer"]))
	{
		try 
		{  
			$db = getDb();
			$requete = "SELECT * FROM CastingOffer INNER JOIN Client ON CastingOffer.Client_id = Client.Id INNER JOIN ContractType ON CastingOffer.ContractType_id = ContractType.Id WHERE CastingOffer.Id=".$_GET["Offer"];
			
			$resultat = $db->query($requete);
			
			while ($donnees = $resultat->fetch())//pour chaque offre
			{
				echo '<br/><h2>' . $donnees['Title'] . '</h2><br/>';//mettre dans tableau
				echo '<tr><th>Référence</th><th>'.$donnees['Reference']."</th></tr>";
				echo '<tr><th>Date de diffusion</th><th>'.$donnees['BroadcastStartingDate']."</th></tr>";
				echo '<tr><th>Date de début de contrat</th><th>'.$donnees['ContractStartingDate']."</th></tr>";
				echo '<tr><th>Lieu</th><th>'.$donnees['Location']."</th></tr>";
				echo '<tr><th>Nombre de poste</th><th>'.$donnees['PostNumber']."</th></tr>";
				echo '<tr><th>Description du poste</th><th>'.$donnees['PostDescription']."</th></tr>";
				echo '<tr><th>Profil recherché</th><th>'.$donnees['ProfileDescription']."</th></tr>";
				echo '<tr><th>Employeur</th><th>'.$donnees['Name']."</th></tr>";
				echo '<tr><th>Type de Contrat</th><th>'.$donnees['ConType']."</th></tr>";
				
				echo '</tr>';
			}
		}
		catch(PDOException $e) {  
			print "Error!: " . $e->getMessage() . "<br/>";
		}

		// tableau des messages d'erreur pour l'upload de fichiers
		$a_error=array(

			1 => 'La taille du fichier t&eacute;l&eacute;charg&eacute; exc&egrave;de la valeur upload_max_filesize configur&eacute;e dans php.ini.',
			2 => 'La taille du fichier t&eacute;l&eacute;charg&eacute; exc&egrave;de la valeur MAX_FILE_SIZE qui a &eacutet&eacute; sp&eacute;cifi&eacute;e dans le formulaire HTML.',
			3 => 'Le fichier n\'a &eacute;t&eacute; que partiellement t&eacutel&eacute;charg&eacute;.',
			4 => 'Aucun fichier n\'a &eacute;t&eacute; t&eacutel&eacute;charg&eacute;.',
			6 => 'Un dossier temporaire est manquant.',
			7 => '&Eacute;chec de l\'&eacute;criture du fichier sur le disque.',
			8 => 'Une extension de PHP a arr&ecirc;t&eacute; l\'envoi du fichier. PHP ne propose aucun moyen de d&eacute;terminer quelle extension est en cause.');


		if(!empty($_FILES['cv']))
		{
			if($_FILES['cv']['size'] > 10485760)// vérifie la taille du fichier
			{
				echo '<p class="error">Le fichier est trop volumieux (maximum 10 Mo).</p>';
			}

			else if($_FILES['cv']['error'] != 0)// si l'upload a échoué
			{

				echo '<p class="erreur">'.$a_error[$_FILES['cv']['error']].'</p>';
			}

			
			else
			{
				$dossier_upload = '../upload/';

				if(is_dir($dossier_upload.$donnees['Reference']))
				{
					mkdir($dossier_upload.$donnees['Reference'], 0700);
				}
			
				$fichier = $dossier_upload.$donnees['Reference'].basename($_FILES['cv']['name']);

				move_uploaded_file($_FILES['cv']['tmp_name'], $fichier);

			}
		$resultat->closeCursor();
		$db = null;
		}
	}
	else
	{
		header('Location: ../index.php');   
	}
?>