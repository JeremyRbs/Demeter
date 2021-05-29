<?php
$host = "localhost";
$user = "lambda";
$pwd = "lambda";
$bdd = "projetdemeter";

$body = json_decode(file_get_contents('php://input'));

if (isset($body->{'NomFourn'})) {
    $id = $body->{'NomFourn'};

    $con = mysqli_connect($host, $user, $pwd, $bdd);
    
    // Check connection
    if (! $con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $return_arr = array();

    $query = "DELETE FROM fournisseur WHERE fournisseur.NomFourn = '".$id."' ";

    $result = mysqli_query($con, $query);

}

?>