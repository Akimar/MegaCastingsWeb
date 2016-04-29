<html>
	<?php require('head.php'); session_start();?>

	<body>
		<?php require('header.php'); ?>
		<div class="table-responsive">
			<table class="table table-condensed table-hover table-bordered table-striped centrage Offer">
				<?php require('../controller/Offer.php') ?>
			</table>
		</div>
		<?php require('footer.php'); ?>
	</body>

</html>
