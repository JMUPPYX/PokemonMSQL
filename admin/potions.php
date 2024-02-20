<!-- edit -->
<!-- dashboard / boucles-->
<?php 
    require_once dirname(__DIR__) . "/utilities/header.php";
    require_once dirname(__DIR__) . "/function/potions.fn.php";
// recupere les données de la table potions et les tables effects + medecins
    $potions = findAllPotions($db);

    // var_dump($potions);
?>


<!--   requete pour selectionner tous les produits / reprendre une fonction -->
<!-- afficher les éléments -->

<section class="intro">
  <div class="bg-image h-100" style="background-color: #6095F0;">
  <div class="mask d-flex align-items-center h-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-borderless mb-0">
                  <thead>
                    <tr>
                      <th scope="col">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                      </th>
                      <th scope="col">Name</th>
                      <th scope="col">Couleur</th>
                      <th scope="col">ML</th>
                      <th scope="col">Prix</th>
                      <th scope="col">Note</th>
                      <th scope="col">Medecin</th>
                      <th scope="col">Effect</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($potions as $row): ?> 
                    <tr>
                      <th scope="row">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked/>
                        </div>
                      </th>
                      <td><?=$row['name']?></td>
                      <td><?=$row['couleur']?></td>
                      <td><?=$row['contenanceML']?></td>
                      <td><?=$row['prix']?></td>
                      <td><?=$row['note']?></td>
                      <td><?=$row['medecin']?></td>
                      <td><?=$row['effect']?></td>
                      <td>
                        <a class="btn btn-primary mt-auto" href="edit.php?id=<?=$row['id']?>">MODIFIER</a>
                      </td>
                    </tr>
                     <?php endforeach;?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>






<?php require_once dirname(__DIR__) . "/utilities/footer.php"; ?>