
<html>
    <?php require('head.php'); ?>

	<body>
	<?php require('header.php'); ?>
		<br/>
		<h1> Offres de castings </h1>
		<br/>
		<div class="table-responsive">
		<!-- form avec champ de recherches -->
		<table class="table table-hover table-striped table-bordered">
			<thead>
				<tr>
					<th>Titre</th>
					<th>Référence</th>
					<th>Description</th>
					<th>Lien</th>
				</tr>
			</thead>
			<p>Parcourir les offres de castings</p>	
			<form action = 'controller\datagrid.php' method="get">
				Mot clé : 
				<input type="text" name="Recherche"><br>
				<input type="submit" value="Rechercher">
			</form>
			
			<tbody>
				<?php require('controller\datagrid.php'); ?>
			</tbody>
		</table>
		</div> 
		
		<br/>
		<?php require('footer.php'); ?>
	</body>

</html>
    