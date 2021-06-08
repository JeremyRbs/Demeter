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

    $query_rec = "INSERT INTO `produit` (`IdProd`, `NomProd`, `Taille`, `NbIngBase`, `NbIngOpt`, `PrixUHT`, `Image`, `IngBase1`, `IngBase2`, `IngBase3`, `IngBase4`, `IngBase5`, `IngBase6`, `IngBase7`, `IngBase8`, `IngBase9`, `IngBase10`, `IngOpt1`, `IngOpt2`, `IngOpt3`, `IngOpt4`, `IngOpt5`, `IngOpt6`, `NbOptMax`, `DateArchiv`) VALUES (null, 'Exemple', 'S', '0', '0', '0', NULL, 'Exemple', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Exemple', NULL, NULL, NULL, NULL, NULL, '0', NULL);";

    $result_rec = mysqli_query($con, $query_rec);

?>