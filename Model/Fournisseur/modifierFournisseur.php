<?php
$host = "localhost";
$user = "lambda";
$pwd = "lambda";
$bdd = "projetdemeter";

$body = json_decode(file_get_contents('php://input'));

if ($body != null) {
    $idAvant = $body->{'IdAvant'};
    $id = $body->{'NomFourn'};
    $adr = $body->{'Adresse'};
    $code = $body->{'CodePostal'};
    $ville = $body->{'Ville'};
    $tel = $body->{'Tel'};
    $def = $body->{'ParDefaut'};

    $con = mysqli_connect($host, $user, $pwd, $bdd);
    
    // Check connection
    if (! $con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $return_arr = array();

    $query = "UPDATE fournisseur SET NomFourn = '".$id."', Adresse = '".$adr."', CodePostal = '".$code."', Ville = '".$ville."', Tel = '".$tel."', ParDefaut = '".$def."' WHERE NomFourn = '".$idAvant."' ";

    $result = mysqli_query($con, $query);

}

?>