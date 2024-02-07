<!--  page potions -->
<!-- fonction pour appeler les tables grace à une requete SQL en utilisant 
les inner join et à indiquer les champs dans notre cards -->
<?php
 function findAllPotions($db){
  $sql = 'SELECT * FROM potions
  INNER JOIN sideffects s on potions.sideffectID = s.id
  JOIN pictures p ON potions.ID = p.potionID 
  JOIN potions_drugstores pd ON potions.id = pd.potionID 
  JOIN drugstores d ON pd.drugstoreID = d.id;';
  $requete = $db->query($sql);
  $potions = $requete->FetchAll();
   return $potions;
 }






