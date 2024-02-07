<?php
// REQUIRE_ONCE dirname(__DIR__) . nous permet d'integrer un fichier et ses propriétées et évite  
//les doublons de déclaration.
// dirname(__DIR__) .= le fichier actuel est dans un dossier du dossier racine (on lui indique le chemin)
require_once dirname(__DIR__) . ('/function/database.fn.php');
require_once dirname(__DIR__) . ('/config/config.php');
$db = getPDOlink($config);
?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/assets/favicon/favicon.png" type="image/x-icon">

    <!-- lien Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PokéDoc</title>
</head>

<body>
    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid h-100 justify-content-space-around">
                <!-- logo de la navbar-->
                <a class="navbar-brand" href="index.php">
                    <img class="logo" src="assets/img/logo1-removebg-preview.png" alt="logo">
                </a>
                <!-- menu burger -->
                <button class="navbar-toggler h-100" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- debut des menu -->
                <div class="collapse navbar-collapse h-md-100 justify-content-center" id="navbarSupportedContent">
                    <div class="">
                        <ul class="navbar-nav mb-2 mb-lg-0 h-100 px-2 ">
                            <!-- lien de la boucle nav -->
                            <?php include "data_php/navboucles.php" ?>
                        </ul>
                        
                    </div>
                </div>
                <a class="text-decoration-none" href="index.php">
                    <button class="btn btn-outline-dark d-none d-xl-block" type="submit">
                        <i class="bi-cart-fill me-1 "></i>
                        PANIER
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </a>
            </div>
            
                        
        </nav>
    </header>