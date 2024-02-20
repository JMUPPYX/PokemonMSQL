<?php
// formulaire ou l'on va effectuer la modification en fonction de l'id
require_once dirname(__DIR__) . "/utilities/header.php";
require_once dirname(__DIR__) . "/function/potions.fn.php";
// fonction qui va récuperer l'ID
$potion = findPotionsById($db, $_GET['id']);
// var_dump($potion);

?>

<section class="d-flex justify-content-center py-5 m-auto">
<div class="col-md-4 mb-3 d-flex justify-justify-content-center ">
    <div class="card px-3  bg-dark-subtle ">
        <h2>Modification des Potions</h2>
        <!-- renvoi sur le fichier qui va valider la modification -->
    <form action="update.php" method="POST">
  <div class="form-row">
    <!-- input hidden -->
  <input type="hidden" id="potions_id" name="potions_id" value="<?php echo $_GET['id']?>"/>
    <div class="col">
      <input type="text" class="form-control my-3 border border-dark" placeholder="nom" name="name" value="<?php echo $potion['name'] ?>">
    </div>
    <div class="col">
      <input type="file" class="form-control my-3 border border-dark" placeholder="couleur" name="couleur" value="<?php echo $potion['couleur'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control my-3 border border-dark" placeholder="ML" name="contenanceML"value="<?php echo $potion['contenanceML'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control my-3 border border-dark" placeholder="prix" name="prix"value="<?php echo $potion['prix'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control my-3 border border-dark" placeholder="note" name="note" value="<?php echo $potion['note'] ?>">
    </div>
    <!-- <select class="form-select border border-dark" aria-label="Default select example" name="pays_name">
        <option selected>Selectionne le pays</option>+
        
        <?php foreach ($mediacemnt as $row): ?>
            <option value="<?= $row["m_id"] ?>"><?= $row["pays_name"] ?></option>
        <?php endforeach; ?>
        </select> -->
    <div class="col">
      <input type="submit" class="form-control my-3 bg-info border border-dark display-5" value="Ajouter">
    </div>
  </div>
</form>
        </div>
    </div>
</div> 
</section>


                <!-- <p class="card-text text-uppercase fw-bold">Medecins :
                    <select class="form-select w-100" aria-label="Default select example" name="drugstore">
                        <option selected>Modifier le Medecin</option>
                        <option value="<?= $row["id"] ?>">
                            <?= $row["medecin"] ?>
                        </option>
                    </select>
                </p>
                <p class="card-text text-uppercase fw-bold">Effet :
                    <select class="form-select w-100" aria-label="Default select example" name="drugstore">
                        <option selected>Effet</option>
                        <option value="<?= $row["id"] ?>">
                            <?= $row["effect"] ?>
                        </option>
                    </select>
                </p> -->
              


<?php
require_once dirname(__DIR__) . "/utilities/footer.php";