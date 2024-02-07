<?php 
    require_once __DIR__ ."/utilities/header.php"; 
    require_once __DIR__ . "/function/potions.fn.php";
    $potions = findAllPotions($db);
    require_once __DIR__ . "/utilities/potionscards.php";
    require_once __DIR__ . "/utilities/footer.php";
  

 

  

