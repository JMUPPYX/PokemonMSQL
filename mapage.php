<?php 
//on rappel nos fichiers pour accéder à la base de données
  require_once __DIR__. ('/config/config.php');  
  require_once __DIR__ . ('/function/database.fn.php');  
  $db = getPDOlink($config);

  // on rappel notre header qui contient notre connexion à la base de données et nos variable d'environnement
  require_once __DIR__ . ('/utilities/header.php');
  echo '<div class="py-3"></div>';
  // var_dump (getPDOlink ($config));
  
  //on rappel notre fonction qui nous permet de recuperer les potion et photos  des produits en BDD
  require_once __DIR__ . ('/function/mapage.fn.php');
  $potions = findPotionsById($db, $_GET['id']);
  $name = $potions['name'];
  $pictures = findPictureByPotions($db);
 $path=$pictures ['pathimg'];
  
 // on rappel notre cards qui contien la mise en forme HTML/CSS et les champs de notre base de données
  require_once __DIR__ . ('/utilities/cardsmapage.php');
  echo '<div class="py-3"></div>';

//   footer
  require_once __DIR__ . "/utilities/footer.php";