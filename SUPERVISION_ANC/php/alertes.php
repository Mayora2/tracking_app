<?php

//Connection à la base de données
try {
  $bdd = new PDO('mysql:host=localhost;port=3308;dbname=anc;charset=utf8', 'root', '');
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

//Envoi de la requête SQL
$sql = "SELECT * FROM `mes conteneurs` JOIN `infos` ON `mes conteneurs`.`num_carte` = `infos`.`num_carte` WHERE `alerte`=true";

$reponse = $bdd->query($sql);

//Récupération et envoi des données sous forme de tableau
echo "<table class=\"table table-bordered table-striped\">";
while ($donnees = $reponse->fetch()) {
  echo "<tr>
            <td>" . $donnees['nom_event'] . "</td>
            <td>
              <div>" . $donnees['id_cont'] . "</div>
            </td>
            </tr>";
}

echo "</table>";

$reponse->closeCursor();

?>