
<?php
//  fonction pour appeler les tables grace à une requete SQL en utilisant 
// les inner join et à indiquer les champs dans notre cards
// fichier  potions.php dossier racine / onglet potions navbar
 function findAllOrderPotions($db){
  $sql = 'SELECT * FROM potions
  INNER JOIN sideffects s on potions.sideffectID = s.id
  JOIN pictures p ON potions.ID = p.potionID 
  JOIN potions_drugstores pd ON potions.id = pd.potionID 
  JOIN drugstores d ON pd.drugstoreID = d.id ORDER BY potions.id;';
  $requete = $db->query($sql);
  $potions = $requete->FetchAll();
   return $potions;
 }

   // fonction pour afficher toutes les potions dans notre dashboard potions.php
   function findAllPotions($db){
    $sql ="SELECT potions.id,potions.name,potions.couleur,
    potions.contenanceML,potions.prix,potions.note,
    medecins.medecin,sideffects.effect
    FROM `potions` 
    INNER JOIN `medecins` ON medecins.id = potions.medecinID
    JOIN `sideffects` ON sideffects.id = potions.sideffectID";
    $requete = $db->query($sql);
    $potions = $requete->fetchAll();
    return $potions;
  }

  // fonction pour récuperer toutes les potions en fonciton de l'id edit.php
  function findPotionsById($db, $currentId){
    $sql ="SELECT potions.id,potions.name,potions.couleur,
    potions.contenanceML,potions.prix,potions.note,
    medecins.medecin,sideffects.effect
    FROM `potions` 
    INNER JOIN `medecins` ON medecins.id = potions.medecinID
    JOIN `sideffects` ON sideffects.id = potions.sideffectID
    WHERE potions.id = $currentId" ;
    $requete = $db->query($sql);
    $potions_id = $requete->fetch();
    return $potions_id;
  }

  // fonction pour la modification via le fichier update.php
  // reprend notre table parent potions et nos tables sideffects et medecin (foreign key)
  function UpdatePotions($db, $currentId){
    $sql = "UPDATE `potions` SET `id`='[value-1]',`name`='[value-2]',
    `couleur`='[value-3]',`contenanceML`='[value-4]',`prix`='[value-5]',
    `note`='[value-6]',`medecinID`='[value-7]',`sideffectID`='[value-8]' WHERE id = $currentId"; 
    $requete = $db->query($sql);
    $update = $requete->fetch();
    return $update;
  }
// fonction pour récupérer les données actuelles dans la BDD 
// requete pour recuperer les champs de la table potions dans notre BDD
  function DonneesActuelles($db,$currentId){
  $sql ="SELECT potions.id,potions.name,potions.couleur,
  potions.contenanceML,potions.prix,potions.note
  FROM `potions` WHERE potions.id = $currentId" ;
  $requete = $db->query($sql);
  $donneesActuelles= $requete->fetch();
  return $donneesActuelles;
}







