 <?php

$host = "localhost"; /* Host name */
$user = "lambda"; /* User */
$password = "lambda"; /* Password */
$dbname = "projetdemeter"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (! $con) {
    die("Connection failed: " . mysqli_connect_error());
}
$return_arr = array();

$query = "SELECT HeureDispo, NomClient, GROUP_CONCAT( NomProd) as NomProd, commande.NumCom, commande.AdrClient, commande.IdLivreur, livreur.Nom from Detail JOIN com_det ON detail.Num_OF = com_det.Num_OF JOIN commande ON commande.NumCom = com_det.NumCom JOIN livreur ON commande.IdLivreur = livreur.IdLivreur WHERE commande.A_Livrer = 'O' AND commande.EtatLivraison = 'E' GROUP BY NomClient";

/* $query = "SELECT HeureDispo, NomClient, NomProd FROM COMMANDE JOIN COM_DET ON COM_DET.NumCom = COMMANDE.NumCom JOIN DETAIL ON COM_DET.Num_OF = DETAIL.Num_OF WHERE COMMANDE.A_Livrer = 'O'AND COMMANDE.EtatLivraison = 'N'"; */
$result = mysqli_query($con, $query);

$i = 0;

while ($row = mysqli_fetch_array($result)) {
    $NomLivreur;
    
    $heure = $row['HeureDispo'];
    $nom = $row['NomClient'];
    $prod = $row['NomProd'];
    $numCom = $row['NumCom'];
    $adresse = $row['AdrClient'];
    $NomLivreur = $row['Nom'];           
    
    $return_arr[$i] = array(
        "heure" => $heure,
        "client" => $nom,
        "produit" => $prod,
        "numCom" => $numCom,
        "adresse" => $adresse,
        "livreur" => $NomLivreur
    );
    $i ++;
}

// Encoding array in JSON format
echo json_encode($return_arr);

?>