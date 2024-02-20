<!-- Page POTIONS -->
<!-- cards de la page POTIONS la requete select nous permet d'indiquer les value des champs à selectionner-->
<section class="container-md w-66 m-auto">
    <h2 class="text-center py-5 fw-bold">Les Potions</h2>
    <p class="fs-4 text">
        Les Potions Pokémon sont des éléments essentiels dans l’univers des dresseurs. Que ce soit pour
        soigner un Pokémon blessé, augmenter ses capacités ou révéler des pouvoirs cachés,
        ces élixirs magiques ont une place spéciale dans nos aventures.
        En tant que dresseurs, nous apprenons à manier ces potions avec sagesse. Elles sont bien plus qu’un simple
        mélange d’ingrédients : elles sont le lien entre nous et nos fidèles compagnons.
        Alors, que tes aventures soient épiques et tes potions toujours à portée de main.
    </p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3 mx-0 mx-md-5">
        <?php
        foreach ($potions as $value) { ?>
            <div class="col mb-5">
                <div class="card h-100 border border-4">
                    <img src="<?= $value['pathimg'] ?>" class="card-img h-100 object-fit-cover" alt="potion">
                    <div class="card-body text-center">
                        <h5 class="card-link2 fw-bold text-decoration-none 
                    text-black text-uppercase fs-4">
                            <?= $value['name'] ?>
                        </h5>
                        <h5 class="card-link2 fw-bold text-decoration-none 
                    text-black  fs-4">Effet :
                            <?= $value['effect'] ?>
                        </h5>
                        <h4 class="card-text text-warning fs-5 text">Note :
                            <?= $value['note'] . '/10 &nbsp;'?>
                        </h4>
                        <p class="card-text text-uppercase fw-bold">
                            <?= $value['prix'] ?> Pokedollars
                        </p>
                        <p class="card-text text-uppercase fw-bold">Drugstores :
                            <?= $value['drugstore'] ?>
                        </p>
                        <a href="index.php" class="btn btn-primary">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>