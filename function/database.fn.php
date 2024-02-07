<!-- connexion à la base de données avec l objet PDO   -->
<?php

//$config prend les valeurs du tableau pour la connexion à la base de données
function getPDOlink ($config){

  // Etape 2  Data Source Name de connexion :
  $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];
  // echo $dsn;

  // Etape 3 try and catch On tente de se connecter à la base de données
  // try = essai de te connecter à la base de données 
  try {

  // Etape 4 On instancie l'objet PDO avec 3 élèments  et on crée notre variable$dsn, si la connexion échou un mesSage d'erreur apparaitra:
  $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);

  // Etape 5 si la connexion réussi execute = On envoi notre requete en utf8 pour afficher les caractères spéciaux :
  $db->exec("SET NAMES utf8");

  // Etape 6 setAttribute (méthode de PDO) récupère donne lui cette attribut
  // FETCH_ASSOC evite la repetition // à chaque fetch par défaut fais le en fetch assoc
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $db;
  // traque/attrape moi  l'erreur et montre le(s) moi / $e = variable et representation de PDOException 
  } catch (PDOException $e) {
  // -> sert à acceder au détail  de l'erreur
    exit('BDD Erreur de connexion : ' . $e->getMessage());
  }
}