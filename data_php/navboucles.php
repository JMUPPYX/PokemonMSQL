
<!-- boucles nav -->
<?php require_once dirname(__DIR__) . '/data_php/navtableau.php';
 
foreach ($onglets as $value) {
    echo '<li class="nav-item py-3">
    <a class="nav-link active text-dark fs-5 fw-bold text-uppercase" aria-current="page"
        href=" ' . $value['href'] . ' ">' . $value['onglet'] . '</a>
</li>';
}
?>