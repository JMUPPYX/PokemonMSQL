<!-- page MAPAGE -->
<!-- cards des potions -->
<div class="container col-6 mb-5 ">
    <div class="card  text-center">
        <h1>Détail</h1>
        <!--  image-->
        <img class="card-img-top" src="<?= $path ?>" alt="..." />
        <div class="card-body p-4">
            <div class="text-center">
                <h4>
                    <?= $potions['name'] ?>
                </h4>
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <?= $potions['note'] . '/ 10 &nbsp;'; ?>;
                </div>
                <p class="fw-bold">Par :
                    <?= $potions['medecins'] ?>
                </p>
                <p>Drugstore :
                    <?= $potions['drugstores'] ?>
                </p>
                <div class="d-flex justify-content-around my-2">
                    <span class="badge bg-primary">
                        <p>Prix :
                            <?= $potions['prix'] ?>
                        </p>
                    </span>
                    <span class="badge bg-primary">
                        <p>Effet Secondaire :
                            <?= $potions['sideffects'] ?>
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>