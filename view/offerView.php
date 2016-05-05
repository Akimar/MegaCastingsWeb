<html>
	<?php require('head.php');?>

	<body>
		<?php require('header.php'); ?>
		<div class="table-responsive">
			<table class="table table-condensed table-hover table-bordered table-striped centrage Offer">
				<?php 			
				
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
			
				$resultat->closeCursor();
				$db = null;
				
				?>
			</table>
		</div>
		<div>
			<form method="POST" action="Upload.php" enctype="multipart/form-data">
				<div>
					<input type="hidden" name="MAX_FILE_SIZE" value="10485760"/>
					<p>Postuler à cette offre avec votre CV :<input class="centrage GrandCentrage" type="file" name="cv" id="cv"/></p>
				</div>
				<br/>
					<input type="submit" value="Envoyer"/>    
			</form>
		</div>
		<?php require('footer.php'); ?>
	</body>

</html>
