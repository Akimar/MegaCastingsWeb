<header class ="row">
    <div class= "col-md-4">
        <a href="/megacastings/index.php"><img alt="logo" src="/megacastings/Logo.png" width="200" /></a>
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
                <a class = "btn btn-primary" href="/megacastings/index.php">Accueil</a>
           </li>
           <li class = "menu_item">
                  <?php

                  if(empty($_SESSION['Login']))
                  {
                   echo'<a class = "btn btn-primary" href="/megacastings/controller/authentication.php">Connexion</a>';
                  }

                  else
                  {
                   echo'<a class = "btn btn-primary" href="/megacastings/controller/disconnection.php">Déconnexion</a>';
                  }
                   
                   ?>
           </li>
		   <li class = "menu_item"> 
                <a class = "btn btn-primary" href="/megacastings/view/rss.php">RSS</a>
           </li>
       </ul>
   </nav>

</header>

