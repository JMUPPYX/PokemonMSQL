<!-- PAGE index -->
<?php
// fonction pour récuperer la bdd
// Cette fonction prend deux paramètres : $db qui est une instance de la classe PDO definit dans le try/catch 
//et $limit qui est le  (un chiffre entier) nombre de films à afficher par page.
function lessPotions($db) {
  // On select la table potions SQL
  // ORDER BY permet de mettre les potions de la moins cher  à la plus cher
  // On utilise la clause LIMIT pour ne sélectionner un nombre definit de potion de +cher à la - cher
  $sql = "SELECT * FROM potions ORDER BY prix ASC;";

  // On exécute la requête SQL en utilisant la méthode query() de l'objet PDO
  // = fait cette requete sur cette base de données
  $requete = $db->query($sql);

  // On récupère les résultats de la requête en utilisant la méthode fetchAll() qui parcours la table et stocke 
  //les élèments dans un tableau de l'objet PDOStatement
  $potions = $requete->fetchAll();

  return $potions;
}
  function expansivePotions($db){
    $sql = "SELECT * FROM potions ORDER BY prix DESC;";
    $requete = $db->query($sql);
    $potions = $requete->fetchAll();
    return $potions;
  }

  function allPotions($db){
    $sql = "SELECT * FROM potions";
    $requete = $db->query($sql);
    $potions = $requete->fetchAll();
    return $potions ;
  }
 
// si ($_POST['Les_potions']) est égale à 1 alors  on appelle la fonction lessPotions 
//sinon si est égale à 1 alors  on appelle la fonction expansivePotions 
//sinon on appel la fonction allPotions
  if (($_POST['Les_potions']) == 'ASC') {
    $potions = lessPotions($db);
   
  }else if(($_POST['Les_potions']) == 'DESC'){
    $potions = expansivePotions($db);
  
  }else {
    $potions = allPotions($db);
  
  }



