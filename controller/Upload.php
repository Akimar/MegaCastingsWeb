<?php

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
			$dossier_upload = '/var/www/html/megacastings/upload/';

			if(is_dir($dossier_upload.$_GET["Offer"]))
			{
				mkdir($dossier_upload.$_GET["Offer"], 0700);
			}
		
			$fichier = $dossier_upload.$_GET["Offer"].basename($_FILES['cv']['name']);

			move_uploaded_file($_FILES['cv']['tmp_name'], $fichier);
			
			header('Location: ../view/offerView.php?Offer='.$_GET["Offer"]);
		}

	}
?>