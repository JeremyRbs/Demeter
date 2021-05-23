<?php
/*require_once ('../../controller/connexion.php');

$query = "SELECT HeureDispo, NomClient,  GROUP_CONCAT( NomProd) as NomProd, commande.NumCom  from Detail JOIN com_det ON detail.Num_OF = com_det.Num_OF JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'N' GROUP BY NomClient";

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
}*/     
        session_start();
        require_once 'connexion.php';
        $i = $_POST["id"];
        $numId = $_POST["numId"];
        echo $numId;
        echo "bonjour";
        $idOfTacos = $_POST["idOfTacos"];
        $suplementForCM = $_POST["suplementForCM"];
        $numberForCM = $_POST["numberForCM"];
        $sizeForCM = $_POST["sizeForCM"];
        $_SESSION['i'] = $i;
        $_SESSION['numId'] = $numId;
        $_SESSION['tacos'.$i.'_idOfTacos'] = $idOfTacos;
        
        $_SESSION['tacos'.$i.'_numberForCM'] = $numberForCM;
        $_SESSION['tacos'.$i.'_sizeForCM'] = ", Taille ".$sizeForCM;


        if($suplementForCM == 'true'){
            $suplementForCM = " avec suplement ";
            $supp = "=1";
        }else{
            $suplementForCM = " sans suplement ";
            $supp = "IS NULL";
        }
        //$sql = "SELECT PrixUHT FROM PRODUIT WHERE NomProd='Tacos chèvre miel' AND Taille='S' AND NbIngOpt IS NULL"; // requete SQL envoyé au serveur
        $sql = "SELECT PrixUHT FROM PRODUIT WHERE NomProd='".$idOfTacos."' AND Taille='".$sizeForCM."' AND NbIngOpt ".$supp." ;"; // requete SQL envoyé au serveur
        $req = $pdo->query($sql); // envoie de la requete 
        $row = $req->fetch(PDO::FETCH_ASSOC);
        echo htmlentities($row['PrixUHT']);
        $_SESSION['tacos'.$i.'_prix'] = htmlentities($row['PrixUHT']).'€';
        $_SESSION['tacos'.$i.'_suplementForCM'] = $suplementForCM;







        /*$arrayName = array(); // initialisation d'un tableau en global pour récuperer les données
        $i= 0;
        while($row = $req->fetch()) {
            $arrayName[$i] = array($row['data_value'],$row['data_timestamp'] ); // remplisage du tableau avec les température et l'heure
            $i++; // avancement dans le tableau 
        }  
        $obj = new stdClass();
        foreach($arrayName as $item => $value){
            $obj->{$item} = $value; // remplisage de la variable obj pour chaque données du tableau

        }

        echo json_encode($obj, JSON_FORCE_OBJECT); // transformation au format json*/


?>