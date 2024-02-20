<?php
// AJOUTER
// requête pour récuperer les elements de la table medecin
$medecins = "SELECT * FROM medecins";
$stath = $db->query($medecins);
$docteurs = $stath->fetchAll(); 
//  var_dump($docteurs);

 // requête pour récuperer les elements de la table medecin
 $sideffects = "SELECT * FROM sideffects";
 $stath = $db->query($sideffects);
 $effects = $stath->fetchAll(); 
// var_dump(dirname(__DIR__));

// requete pour récuperer les elements de la table drugstores
$drugstores = "SELECT * FROM drugstores";
 $stath = $db->query($drugstores);
 $drugstore = $stath->fetchAll(); 

if (isset($_POST['check'])) {
    // champ de la table potions
$nom = $_POST['name'] ;
$couleur = $_POST['couleur'];
$contenance = $_POST['contenanceML'];
$prix = $_POST['prix'];
$note = $_POST['note'];
$medecins_id = $_POST['medecinID'];
$effects_id = $_POST['sideffectID'];
$pathimg = $_POST['pathimg'];
$drugstores =$_POST['drugstore'];


try {
  
  $db->beginTransaction();
// champ de la table potions
$sql = "INSERT INTO potions(`name`, `couleur`, `contenanceML`,`prix`,`note`,`medecinID`,`sideffectID`) 
VALUES ('$nom','$couleur','$contenance','$prix','$note','$medecins_id','$effects_id')";
$db->query($sql);  

$potionsId = $db->lastInsertId();
$sql="INSERT INTO pictures (`pathimg`,`potionID`)
VALUES ('$pathimg','$potionsId')";
$db->query($sql);
// $db->commit();

$sql="INSERT INTO potions_drugstores (`potionID`,`drugstoreID`)
VALUES ('$potionsId', '$drugstores')";
$db->query($sql);
$db->commit();

} catch (PDOException $e) {
  $db->rollBack();
  echo "erreur" .$e->getMessage();
}
}


?>
<div class="d-flex flex-column justify-content-center align-items-center">
  <h1 class="py-3">Formulaire admin</h1>
  <form action="#" method="POST">
    <div class="form-row mx-auto py-4">
      <!-- nom de la potion -->
      <div class="col-12">
      <input type="text" class="form-control" placeholder="nom" name="name">
    </div>
    <!-- couleur de la potion -->
    <div class="col-12">
      <input type="text" class="form-control" placeholder="couleur" name="couleur">
    </div>
    <!--  contenu en millilitres -->
    <div class="col-12">
      <input type="number" class="form-control" placeholder="contenance" name="contenanceML">
    </div>
    <!-- prix -->
    <div class="col-12">
      <input type="number" class="form-control" placeholder="prix" name="prix">
    </div>
    <!-- note -->
    <div class="col-12">
      <input type="number" class="form-control" placeholder="note" name="note">
    </div>
    <!-- image -->
    <div class="col-12">
      <input type="text" class="form-control" placeholder="pathimg" name="pathimg">
    </div>
    <!-- selection du medecin -->
    <select class="form-select w-100" aria-label="Default select example" name="medecinID">
      <option selected>Selectionner le Medecin</option>
      <?php foreach ($docteurs as $row): ?>
        <option value="<?= $row["id"] ?>"><?= $row["medecin"] ?></option>
        <?php endforeach; ?>
      </select>
      <!-- selection des effects secondaires -->
      <select class="form-select w-100" aria-label="Default select example" name="sideffectID">
        <option selected>Selectionner Effet Secondaire</option>
        <?php foreach ($effects as $row): ?>
          <option value="<?= $row["id"] ?>"><?= $row["effect"] ?></option>
          <?php endforeach; ?>
        </select>
        <!-- selection du drugstore -->
        <select class="form-select w-100" aria-label="Default select example" name="drugstore">
        <option selected>Selectionner le Drugstore</option>
        <?php foreach ($drugstore as $row): ?>
            <option value="<?= $row["id"] ?>"><?= $row["drugstore"] ?></option>
        <?php endforeach; ?>
        </select>
        <!-- input envoyer -->
        <div class="col-5 m-auto justify-content-center pt-3">
          <input type="submit" class="form-control" value="envoyer" name="check">
        </div>
      </div>
    </form>
  </div>
    
    <!-- foreach ($drugstores as $d) {
     $db->exec($sql . ' WHERE drugstoreID='.$d["id"] -->

<?php require_once dirname(__DIR__ ) . "/utilities/footer.php"; ?>