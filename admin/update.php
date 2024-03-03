<?php
// fichier pour gérer les modifications soumises depuis notre formulaire
// suite au POST 
require_once dirname(__DIR__) . "/utilities/header.php";
require_once dirname(__DIR__) . "/function/potions.fn.php";
$update = UpdatePotions($db, $_POST['id'],$_POST);

// currentID correspond à l'id selectionner suite au post submit
$currentId = $_POST['id']; // récupère l'ID de la potion à modifier
$donneesActuelles = DonneesActuelles($db,$currentId);
// données soumises suite au  post (submit)
$donneesSoumises = $_POST;

var_dump($donneesActuelles);
var_dump($donneesSoumises);

// Utilise array_diff_assoc() pour comparer les tableaux. Cette fonction retourne un tableau des différences,
// qui sera vide si les deux tableaux sont équivalents.
// soumise = submit formulaire / donneesActuelles :BDD
$differences = array_diff_assoc($donneesSoumises, $donneesActuelles); 
if (!empty($differences)) { 
    $update;
}
var_dump( $differences ); //affiche les differences entre la BDD et ce qu'on a envoyé dans le formulaire

// exemple : j'ai modifié la couleur et il a affiché la clé et la valeur  de cette couleur
// lorsque je ne modifis rien il renvoit empty = vide


