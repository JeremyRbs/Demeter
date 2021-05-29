<?php
$host = "localhost";
$user = "lambda";
$pwd = "lambda";
$bdd = "projetdemeter";

$body = json_decode(file_get_contents('php://input'));

if (isset($body->{'IdProd'})) {
    $id = $body->{'IdProd'};

    $con = mysqli_connect($host, $user, $pwd, $bdd);
    
    // Check connection
    if (! $con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $return_arr = array();

    $query = "DELETE FROM produit WHERE produit.IdProd = '".$id."' ";

    $result = mysqli_query($con, $query);

}

?>