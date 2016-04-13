<?php
try
{
    $pdo = new PDO('mysql:host=172.16.1.69;dbname=megacastings', 'root', 'not24get');
}
catch(Exception $e)
{
    echo 'Echec de la connexion à la base de données';
    echo $e;
    exit();
}

$sql = 'SELECT * FROM membres';    
 5. $req = $pdo->query($sql);    
 6. while($row = $req->fetch()) {    
 7.     echo '<a href="membre-'.$row['id'].'.html">'.$row['pseudo'].'</a><br/>';    
 8. }    
 9. $req->closeCursor();    
?>

<html>
    <?php include('head.php'); ?>

	<body>
	<?php include('header.php'); ?>
		<h1> Offres de castings </h1>
				
		<?php include('footer.php'); ?>
	</body>

</html>
    