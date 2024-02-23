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


  <form class="m-auto w-50" method="POST" action="index.php">
    <label class="m-2" for="Les_potions">Les potions :</label>
    <select class="form-select m-2" name="Les_potions" aria-label="Default select example">
      <option selected value="">Tous les produits</option>
      <option value="ASC">Les moins cher</option>
      <option value="DESC">Les plus cher</option>
    </select>
    <button class="m-2" type="submit">Sélectionner</button>
  </form>
  <?php foreach ($potions as $potion) { ?>
    <p class="d-flex flex-wrap justify-content-center" >
      <a class="text-decoration-none text-dark" href="mapage.php?id=<?= $potion['id'] ?>">
        <?= $potion['name'] ?>
      </a>
    </p>
  <?php } ?>
</main>
<!--footer -->
<?php require_once __DIR__ . "/utilities/footer.php"; ?>