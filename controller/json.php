<?php
require_once ('../../controller/connexion.php');

$query = "SELECT HeureDispo, NomClient,  GROUP_CONCAT( NomProd) as NomProd, commande.NumCom  from Detail JOIN com_det ON detail.Num_OF = com_det.Num_OF JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'N' GROUP BY NomClient";

$result = mysqli_query($con, $query);
$i = 0;
while ($row = mysqli_fetch_array($result)) {

    $heure = $row['HeureDispo'];
    $nom = $row['NomClient'];
    $prod = $row['NomProd'];
    $numCom = $row['NumCom'];
    $return_arr[$i] = array(
        "heure" => $heure,
        "client" => $nom,
        "produit" => $prod,
        "numCom"=>$numCom
    );
    $i ++;
}

// Encoding array in JSON format
echo json_encode($return_arr);

?>