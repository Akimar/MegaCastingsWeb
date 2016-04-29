<?php

session_start();

session_destroy();//vide la session => plus connecté

header('location: ../index.php');

?>