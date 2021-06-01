 <?php
// require_once '../../controller/connexion.php';

// // REQUETE

// $sql = "SELECT HeureDispo, NomClient, GROUP_CONCAT( NomProd) as NomProd from Detail JOIN com_det ON detail.Num_OF = com_det.Num_OF JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'N' GROUP BY NomClient"; // requete SQL envoyé au serveur
// $req = $pdo->query($sql); // envoie de la requete
// $arrayName = array(); // initialisation d'un tableau en global pour récuperer les données
// $i = 0;
// while ($row = $req->fetch()) {
// // echo $row['HeureDispo'];
// // echo $row ['NomClient'];
// // echo $row['NomProd'];
// $arrayName = array(
// $row['HeureDispo'],
// $row['NomClient'],
// $row['NomProd']
// );
// // remplisage du tableau avec les température et l'heure
// $i ++;
// }
// echo json_encode($arrayName);
// $obj = new stdClass();
// foreach ($arrayName as $item => $value) {
// $obj->{$item} = $value; // remplisage de la variable obj pour chaque données du tableau
// }
// echo json_encode($obj, JSON_FORCE_OBJECT); // transformation au format json
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

$query = "SELECT HeureDispo, NomClient,  GROUP_CONCAT( NomProd) as NomProd, commande.NumCom  from Detail JOIN com_det ON detail.Num_OF = com_det.Num_OF JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'O' AND commande.EtatLivraison = 'N' GROUP BY NomClient";

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