<html>
    <?php require('head.php'); session_start();?>

	<body>
	<?php require('header.php'); ?>
		<br/>
		<h1> Offres de castings </h1>
		<br/>
		<div class="table-responsive">
		<!-- form avec champ de recherches -->
		
		<p>Parcourir les offres de castings</p>	
		<form action = 'index.php' method="get">
		Mot clé : 
		<input type="text" name="Recherche"/>
		<input type="submit" value="Rechercher"/>
		</form>
		<br/>
		<table class="table table-hover table-striped table-bordered">
			<thead>
				<tr>
					<th>Titre</th>
					<th>Référence</th>
					<th>Description</th>
					<th>Lien</th>
				</tr>
			</thead>
			
			<tbody>
				<?php require('controller/datagrid.php'); ?>
			</tbody>
		</table>
		</div> 
		
		<br/>
		<?php require('footer.php');?>
		
	</body>

</html>
    