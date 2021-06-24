<?php
$host = "localhost";
$user = "lambda";
$pwd = "lambda";
$bdd = "projetdemeter";

$body = json_decode(file_get_contents('php://input'));

if ($body != null) {
    $idAvant = $body->{'IdProd'};
    $image = $body->{'Image'};
    $nom = $body->{'NomProd'};
    $ingBase_1 = $body->{'IngBase1'};
    $ingBase_2 = $body->{'IngBase2'};
    $ingBase_3 = $body->{'IngBase3'};
    $ingBase_4 = $body->{'IngBase4'};
    $ingBase_5 = $body->{'IngBase5'};
    $ingBase_6 = $body->{'IngBase6'};
    $ingBase_7 = $body->{'IngBase7'};
    $ingBase_8 = $body->{'IngBase8'};
    $ingBase_9 = $body->{'IngBase9'};
    $ingBase_10 = $body->{'IngBase10'};
    $ingOpt_1 = $body->{'IngOpt1'};
    $ingOpt_2 = $body->{'IngOpt2'};
    $ingOpt_3 = $body->{'IngOpt3'};
    $ingOpt_4 = $body->{'IngOpt4'};
    $ingOpt_5 = $body->{'IngOpt5'};
    $ingOpt_6 = $body->{'IngOpt6'};
    $taille = $body->{'Taille'};
    $prix = $body->{'PrixUHT'};
    
    console.log($idAvant);

    $con = mysqli_connect($host, $user, $pwd, $bdd);
    
    // Check connection
    if (! $con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $return_arr = array();

    $query = "UPDATE produit SET Image = '".$image."', NomProd = '".$nom."',"
            . " IngBase1 = '".$ingBase_1."', IngBase2 = '".$ingBase_2."', IngBase3 = '".$ingBase_3."',"
            . " IngBase4 = '".$ingBase_4."', IngBase5 = '".$ingBase_5."', IngBase6 = '".$ingBase_6."',"
            . " IngBase7 = '".$ingBase_7."', IngBase8 = '".$ingBase_8."', IngBase9 = '".$ingBase_9."',"
            . " IngBase10 = '".$ingBase_10."', IngOpt1 = '".$ingOpt_1."', IngOpt2 = '".$ingOpt_2."',"
            . " IngOpt3 = '".$ingOpt_3."', IngOpt4 = '".$ingOpt_4."', IngOpt5 = '".$ingOpt_5."',"
            . " IngOpt6 = '".$ingOpt_6."', Taille = '".$taille."', PrixUHT = '".$prix."' WHERE IdProd = '".$idAvant."' ";

    $result = mysqli_query($con, $query);
    
    $query_2 = "SELECT * from produit where IdIngred = '" . $idAvant . "'";

    $resultat = mysqli_query($con, $query_2);
    while ($ligne = $resultat->fetch_assoc()) {
        $image = $ligne['Image'];
        $nom = $ligne['NomProd'];
        $ingBase_1 = $ligne['IngBase1'];
        $ingBase_2 = $ligne['IngBase2'];
        $ingBase_3 = $ligne['IngBase3'];
        $ingBase_4 = $ligne['IngBase4'];
        $ingBase_5 = $ligne['IngBase5'];
        $ingBase_6 = $ligne['IngBase6'];
        $ingBase_7 = $ligne['IngBase7'];
        $ingBase_8 = $ligne['IngBase8'];
        $ingBase_9 = $ligne['IngBase9'];
        $ingBase_10 = $ligne['IngBase10'];
        $ingOpt_1 = $ligne['IngOpt1'];
        $ingOpt_2 = $ligne['IngOpt2'];
        $ingOpt_3 = $ligne['IngOpt3'];
        $ingOpt_4 = $ligne['IngOpt4'];
        $ingOpt_5 = $ligne['IngOpt5'];
        $ingOpt_6 = $ligne['IngOpt6'];
        $taille = $ligne['Taille'];
        $prix = $ligne['PrixUHT'];
    }
    $con->close();

    $array = ['Image' => $image, 'NomProd' => $nom, 'IngBase1' => $ingBase_1, 'IngBase2' => $ingBase_2, 'IngBase3' => $ingBase_3, 'IngBase4' => $ingBase_4,
        'IngBase5' => $ingBase_5, 'IngBase6' => $ingBase_6, 'IngBase7' => $ingBase_7, 'IngBase8' => $ingBase_8, 'IngBase9' => $ingBase_9, 'IngBase10' => $ingBase_10,
        'IngOpt1' => $ingOpt_1, 'IngOpt2' => $ingOpt_2, 'IngOpt3' => $ingOpt_3, 'IngOpt4' => $ingOpt_4, 'IngOpt5' => $ingOpt_5, 'IngOpt6' => $ingOpt_6,
        'Taille' => $taille, 'PrixUHT' => $prix];

    echo json_encode($array);

}

?>