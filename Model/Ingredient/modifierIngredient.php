<?php
$host = "localhost";
$user = "lambda";
$pwd = "lambda";
$bdd = "projetdemeter";

$body = json_decode(file_get_contents('php://input'));

if ($body != null) {
    $idAvant = $body->{'IdIngred'};
    $id = $body->{'NomIngred'};
    $stock = $body->{'StockReel'};
    $unite = $body->{'Unite'};
    $prix = $body->{'PrixUHT_Moyen'};
    $nom = $body->{'DateArchiv'};
    $frais = $body->{'Frais'};

    $con = mysqli_connect($host, $user, $pwd, $bdd);
    
    // Check connection
    if (! $con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $return_arr = array();

    $query = "UPDATE ingredient SET NomIngred = '".$id."', StockReel = '".$stock."', Unite = '".$unite."', PrixUHT_Moyen = '".$prix."', Frais = '".$frais."' WHERE IdIngred = '".$idAvant."' ";

    $result = mysqli_query($con, $query);

}

?>