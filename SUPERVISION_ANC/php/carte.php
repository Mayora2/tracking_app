<?php

//Connection à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;port=3308;dbname=anc;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//Envoi de la requête SQL
$sql = "SELECT * FROM `mes conteneurs` JOIN `infos` ON `mes conteneurs`.`num_carte` = `infos`.`num_carte` ORDER BY `nom_event`";

$reponse = $bdd->query($sql);

//Récupération et stockage des données
$data = array();

while ($donnees = $reponse->fetch()) {
    $data[] = array('id' => $donnees['id_cont'], 'nom_event' => $donnees['nom_event'], 'lat' => $donnees['lat'], 'lon' => $donnees['long'], 'info' => $donnees['alerte']);
}

$reponse->closeCursor();

//Envoi du script permettant l'affichage de la carte
echo "<script src='js/script_carte.js' onload='carte(" . json_encode($data) . ")'></script>";

?>