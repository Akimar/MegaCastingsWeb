<?php
	
	require('../persistence/commonQuery.php');
	if (!empty($_SESSION["uploaded"]))
	{
		if ($_SESSION["uploaded"] = true)
		{
			echo '<p>Fichier envoyé avec succès</p>';
		}
		else if ($_SESSION["uploaded"] = false)
		{
			echo '<p>Echec lors de l\'envoie de fichier</p>';
		}
	}
	if(!empty($_GET["Offer"]))
	{
		session_start();
		$_SESSION["Offer"] = $_GET["Offer"];
		try 
		{  
			$db = getDb();
			$requete = "SELECT * FROM CastingOffer INNER JOIN Client ON CastingOffer.Client_id = Client.Id INNER JOIN ContractType ON CastingOffer.ContractType_id = ContractType.Id WHERE CastingOffer.Id=".$_GET["Offer"];
			
			$resultat = $db->query($requete);
		}
		
		catch(PDOException $e) {  
			print "Error!: " . $e->getMessage() . "<br/>";
		} 
	}
	else
	{
		header('Location: ../index.php');   
	}
	
	require('../view/offerView.php')
?>