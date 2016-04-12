<?php   $link = mysql_connect("172.16.1.69", "root", "not24get");
        mysql_select_db("megacastings", $link) or die(mysql_error());
        error_reporting(E_ALL);
?>

<html>
    <?php include('head.php'); ?>

	<body>
	<?php include('header.php'); ?>
		<h1> Offres de castings </h1>
				
		<?php include('footer.php'); ?>
	</body>

</html>
    