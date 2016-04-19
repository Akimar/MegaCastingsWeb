
<html>
    <?php require('head.php'); ?>

	<body>
	<?php require('header.php'); ?>
		<br/>
		<h1> Offres de castings </h1>
		<br/>
		<div class="table-responsive">
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
				<?php require('controller\datagrid.php'); ?>
			</tbody>
		</table>
		</div> 
		
		<br/>
		<?php require('footer.php'); ?>
	</body>

</html>
    