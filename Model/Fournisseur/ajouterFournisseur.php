<?php
                    
    $host = "localhost";
    $user = "lambda";
    $pwd = "lambda";
    $bdd = "projetdemeter";

    $con = mysqli_connect($host, $user, $pwd, $bdd);

    // Check connection
    if (! $con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $return_arr = array();

    $query_four = "INSERT INTO `fournisseur` (`NomFourn`, `Adresse`, `CodePostal`, `Ville`, `Tel`, `ParDefaut`, `DateArchiv`) VALUES ('Exemple', 'Exemple', '0', 'Exemple', '0', 'N', NULL);";

    $result_four = mysqli_query($con, $query_four);

?>