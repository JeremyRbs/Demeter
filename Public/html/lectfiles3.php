<?php
require_once '../../controller/connexion.php';

// REQUETE



$sql = "SELECT HeureDispo, NomClient, GROUP_CONCAT( NomProd) as NomProd from Detail JOIN com_det ON detail.Num_OF = com_det.Num_OF   JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'N'"; // requete SQL envoy� au serveur
$req = $pdo->query($sql); // envoie de la requete
$arrayName = array(); // initialisation d'un tableau en global pour r�cuperer les donn�es
$i= 0;
while($row = $req->fetch()) {
    $arrayName = array($row['HeureDispo'],$row['NomClient'] ); // remplisage du tableau avec les temp�rature et l'heure
    $i++; // avancement dans le tableau
}
$obj = new stdClass();
foreach($arrayName as $item => $value){
    $obj->{$item} = $value; // remplisage de la variable obj pour chaque donn�es du tableau
    
}

echo json_encode($obj, JSON_FORCE_OBJECT); // transformation au format json


?>