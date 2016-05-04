<html>
	<?php require('head.php'); session_start();?>

	<body>
		<?php require('header.php'); ?>
		<div class="table-responsive">
			<table class="table table-condensed table-hover table-bordered table-striped centrage Offer">
				<?php require('../controller/Offer.php') ?>
			</table>
		</div>
		<div>
			<form method="POST" action="../controller/Upload.php?Offer=<?php echo $_GET["Offer"]?>" enctype="multipart/form-data">
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
