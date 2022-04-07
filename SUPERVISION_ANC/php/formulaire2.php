<?php

if (isset($_POST['numero_identification'], $_POST['evenement'], $_POST['carte_gps'])) {
  if (!empty($_POST['numero_identification']) and !empty($_POST['evenement']) and !empty($_POST['carte_gps'])) {
    try {
      $bdd = new PDO('mysql:host=localhost;port=3308;dbname=anc;charset=utf8', 'root', '');
    } 
    catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
    $requete = 'INSERT INTO `mes conteneurs` (`id_cont`, `nom_event`, `num_carte`) VALUES("' . $_POST['numero_identification'] . '","' . $_POST['evenement'] . '","' . $_POST['carte_gps'] . '")';
    $resultat = $bdd->query($requete);
    if ($resultat) {
      echo '<script type="text/javascript">window.alert("' . "Le conteneur " . $_POST['numero_identification'] . " a été ajouté" . '");</script>';
    }
    else {
      echo '<script type="text/javascript">window.alert("' . "Le conteneur " . $_POST['numero_identification'] . " ou la carte GPS " . $_POST['carte_gps'] . " existe déjà" . '");</script>';
    }
    echo "<script type='text/javascript'>document.location.replace('index2.php');</script>";
  }
  else {
    echo "<p>Veuillez saisir tous les champs</p>";
  }
}

?>