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

    $query_rec = "INSERT INTO `ingredient` (`IdIngred`, `NomIngred`, `Frais`, `Unite`, `StockMin`, `StockReel`, `PrixUHT_Moyen`, `Q_A_Com`, `DateArchiv`) VALUES (NULL, 'Exemple', 'N', '\"sans\"', '0', '0', '0', '0', NULL)";

    $result_rec = mysqli_query($con, $query_rec);

?>