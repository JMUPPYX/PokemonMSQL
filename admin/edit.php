<?php
require_once dirname(__DIR__) . "/utilities/header.php";
require_once dirname(__DIR__) . "/function/potions.fn.php";
// fonction qui va récuperer l'ID
$potion = findPotionsById($db, $_GET['id']);
$medecins = AllMedecins($db);
$sideffects = AllSideffects($db);
// var_dump($update);
?>

<section class="d-flex justify-content-center py-5 m-auto">
    <div class="col-md-4 mb-3 d-flex justify-justify-content-center ">
        <div class="card px-3  bg-dark-subtle ">
            <h2>Modification des Potions</h2>
            <!-- renvoi sur le fichier qui va valider la modification -->
            <!-- formulaire ou l'on va effectuer la modification en fonction de l'id -->
            <form action="update.php" method="POST">
                <div class="form-row">
                    <!-- input hidden = inclut des données qui ne peuvent pas être vues ou modifiées 
                    lorsque le formulaire est envoyé-->
                    <input type="hidden" id="potions_id" name="id" value="<?php echo $_GET['id'] ?>" />
                    <div class="col">
                        <input type="text" class="form-control my-3 border border-dark" placeholder="nom" name="name"
                            value="<?php echo $potion['name'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control my-3 border border-dark" placeholder="couleur"
                            name="couleur" value="<?php echo $potion['couleur'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control my-3 border border-dark" placeholder="ML"
                            name="contenanceML" value="<?php echo $potion['contenanceML'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control my-3 border border-dark" placeholder="prix" name="prix"
                            value="<?php echo $potion['prix'] ?>">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control my-3 border border-dark" placeholder="note" name="note"
                            value="<?php echo $potion['note'] ?>">
                    </div>
                    <select class="form-select border border-dark my-3" aria-label="Default select example" name="medecins">
                        <option selected value="<?php echo $potion['medecinID'] ?>" ><?php echo $potion['medecin'] ?></option>
                        <?php foreach ($medecins as $row): ?>
                            <option value="<?= $row["id"] ?>">
                                <?= $row["medecin"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <select class="form-select border border-dark my-3" aria-label="Default select example" name="sideffects">
                        <option selected value="<?php echo $potion['sideffectID'] ?>"><?php echo $potion['effect'] ?></option>
                        <?php foreach ($sideffects as $row): ?>
                            <option value="<?= $row["id"] ?>">
                                <?= $row["effect"] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="col">
                        <input type="submit" class="form-control my-3 bg-info border border-dark display-5"
                            value="Valider">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
require_once dirname(__DIR__) . "/utilities/footer.php";