
<!-- mapage -->
<!-- création d'une fonction pour afficher  les potions en fonction de l'ID
utilisation des inner join afin de lier les tables entre elles afin de récuperer les champ et les les appeler dans notre html
  -->
<?php
function findPotionsById($db,$currentId){
  $sql = "SELECT p.id,p.name, p.couleur,p.contenanceML,p.prix,p.note, 
  m.medecin AS medecins,
  s.effect AS  sideffects,
  d.drugstore AS drugstores FROM potions AS p
  INNER JOIN medecins m ON p.medecinID = m.id 
  INNER JOIN sideffects s ON p.sideffectID = s.id
  INNER JOIN potions_drugstores pd ON p.id = pd.potionID
  JOIN  drugstores d ON pd.drugstoreID = d.id
  WHERE p.id = $currentId;";
  $requete = $db->query($sql);
  $potions = $requete->fetch();
  return $potions;
}

// <!-- création d'une fonction pour afficher  les photos en fonction de la potion
// utilisation de la requête SELECT*FROM pour récuperer les photos en fonction de l'id de la potion
//   -->
function findPictureByPotions($db,$currentId){
  $sql = "SELECT * FROM pictures WHERE potionID = $currentId;";
  $requete = $db->query($sql);
  $pictures = $requete->fetch();
  return $pictures;
}



