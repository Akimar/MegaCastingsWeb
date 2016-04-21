<header class ="row">
    <div class= "col-md-4">
        <img alt="logo" src="Logo.png" width="200" />
    </div>
    <div class= "col-md-4">
       <h1>
           MEGACASTINGS
       </h1>
        <blockquote>
            De professionnels à professionnels
        </blockquote>
    </div>

   <nav class= "col-md-4">
       <ul>
           <li class = "menu_item"> 
                <a class = "btn btn-primary" href="index.php">Accueil</a>
           </li>
           <li class = "menu_item">
                  <?php

                  if(empty($_SESSION['Login']))
                  {
                   echo'<a class = "btn btn-primary" href="controller/authentication.php">Connexion</a>';
                  }

                  else
                  {
                    echo'<a class = "btn btn-primary" href="controller/authentication.php">Connexion</a>';

                     echo '<a href="../controller/setPassword.php" alt="Changer mot de passe">Changer son mot de passe<a>';
                  }
                   
                   ?>
           </li>
		   <li class = "menu_item"> 
                <a class = "btn btn-primary" href="view/rss.php">RSS</a>
           </li>
       </ul>
   </nav>

</header>

