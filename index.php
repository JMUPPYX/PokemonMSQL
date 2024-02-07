<?php
// REQUIRE_ONCE __DIR__ nous permet d'integrer un fichier et ses propriétées et évite  
//les doublons de déclaration.
// __DIR__ = le fichier actuel est dans le fichier racine
require_once __DIR__ . "/utilities/header.php";
require_once __DIR__ . "/function/index.fn.php";

// var_dump (getPDOlink ($config));

?>
<main>
  <!-- slider -->
  <section class="d-flex justify-content-center pt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide w-50" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- pour la boucle ne pas prendre la div avec la classe active pour le slider sinon elle tourne pas et la classe active ne peut pas s'incrementer aux éléments qui suivent -->
        <div class="carousel-item active">
          <img src="./assets/slider/medecin2.jpg" class="d-block w-100 img-fluide" alt="...">
        </div>
        <?php include "data_php/carrouselboucle.php"; ?>
      </div>
    </div>
  </section>
  <?php
  // si la potion n'existe pas c'est  le choix 3 par defaut qui s'affiche
  if (!isset($_POST['Les_potions'])) {
    $_POST['Les_potions'] = 2;
  }
  $potions = findBestpotions($db, $_POST['Les_potions']);
  ?>

  <form class="m-2 col-3" method="post" action="index.php">
    <label class="m-2" for="Les_potions">Les potions :</label>
    <select class="form-select m-2" name="Les_potions" aria-label="Default select example" placeholder=""
      value=<?= $_POST['Les_potions'] ?>>
      <option value="2">Les moins cher</option>
      <option value="4">Les plus cher</option>
    </select>
    <button class="m-2" type="submit">Sélectionner</button>
  </form>
  <?php foreach ($potions as $potion) { ?>
    <p>
      <a href="mapage.php?id=<?= $potion['id'] ?>">
        <?= $potion['name'] ?>
      </a>
    </p>
  <?php } ?>
</main>
<!--footer -->
<?php require_once __DIR__ . "/utilities/footer.php"; ?>