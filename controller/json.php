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
            
            $_SESSION['numI'] = $_POST["numI"];
            //$numId = $_POST["numId"];
            $idOfTacos = $_POST["idOfTacos"];
            $suplementForCM = $_POST["suplementForCM"];
            $numberForCM = $_POST["numberForCM"];
            $sizeForCM = $_POST["sizeForCM"];
            $_SESSION['i'] = $i;

            //$_SESSION['numId'] = $numId;
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
            //$sql = "SELECT * FROM PRODUIT WHERE NomProd='Tacos chèvre miel' AND Taille='S' AND NbIngOpt IS NULL"; // requete SQL envoyé au serveur
            $sql = "SELECT * FROM PRODUIT WHERE NomProd='".$idOfTacos."' AND Taille='".$sizeForCM."' AND NbIngOpt ".$supp." ;"; // requete SQL envoyé au serveur
            $req = $pdo->query($sql); // envoie de la requete 
            echo "<br>"."<br>".$sql."<br>"."<br>".$idOfTacos;
            $row = $req->fetch(PDO::FETCH_ASSOC);
            echo htmlentities($row['PrixUHT']);
            $_SESSION['tacos'.$i.'_prix'] = htmlentities($row['PrixUHT']).'€';
            $_SESSION['tacos'.$i.'_suplementForCM'] = $suplementForCM;
            $_SESSION['tacos3'.$i] = htmlentities($row['IdProd']);


            for ($ii=1; $ii<=10; $ii++){
                
                if($row["IngBase".$ii] == ""){
                    $row["IngBase".$ii] = "NULL";
                    //echo $row["IngBase".$ii];
                }
                else {
                    $row["IngBase".$ii] = "'".$row["IngBase".$ii]."'";
                    //echo $row["IngBase".$ii];
                }
            }
            //echo "<br>";
            for ($ii=1; $ii<=4; $ii++){
                
                if($row["IngOpt".$ii] == ""){
                    $row["IngOpt".$ii] = "NULL";
                    //echo $row["IngOpt".$ii];
                }
                else {
                    $row["IngOpt".$ii];
                    $row["IngOpt".$ii] = "'".$row["IngOpt".$ii]."'";
                    //echo $row["IngOpt".$ii];
                }
            }
    
        
        
            $test[$i] = array('Num_OF' =>'NULL', 'NomProd' =>$row['NomProd'], 'Taille' =>$row['Taille'], 'IngBase1' =>$row['IngBase1'], 'IngBase2' =>$row['IngBase2'], 'IngBase3' =>$row['IngBase3'], 'IngBase4' =>$row['IngBase4'], 'IngBase5' =>$row['IngBase5'], 'IngBase6' =>$row['IngBase6'], 'IngBase7' =>$row['IngBase7'], 'IngBase8' =>$row['IngBase8'], 'IngBase9' =>$row['IngBase9'],  'IngBase10' =>$row['IngBase10'], 'IngOpt1' =>$row['IngOpt1'], 'IngOpt2' =>$row['IngOpt2'], 'IngOpt3' =>$row['IngOpt3'], 'IngOpt4' =>$row['IngOpt4'], 'IdProd' =>$row['IdProd'], 'DateArchiv' =>'NULL');
            print_r($test[$i]);

            $_SESSION['test'.$i] = $test[$i];

        
        /*if (isset($_POST['validation'])){
            for($ii = 1; $ii<=$_POST['validation']; $ii++){
            $panier =  "INSERT INTO `DETAIL` (`Num_OF`, `NomProd`, `Taille`, `IngBase1`, `IngBase2`, `IngBase3`, `IngBase4`, `IngBase5`, `IngBase6`, `IngBase7`, `IngBase8`, `IngBase9`, `IngBase10`, `IngOpt1`, `IngOpt2`, `IngOpt3`, `IngOpt4`, `IdProd`, `DateArchiv`) VALUES (NULL, '".$test[$i]['NomProd']."', '".$test[$i]['Taille']."', ".$test[$i]['IngBase1'].", ".$test[$i]['IngBase2'].", ".$test[$i]['IngBase3'].", ".$test[$i]['IngBase4'].", ".$test[$i]['IngBase5'].", ".$test[$i]['IngBase6'].", ".$test[$i]['IngBase7'].", ".$test[$i]['IngBase8'].", ".$test[$i]['IngBase9'].", ".$test[$i]['IngBase10'].", ".$test[$i]['IngOpt1'].", ".$test[$i]['IngOpt2'].", ".$test[$i]['IngOpt3'].", ".$test[$i]['IngOpt4'].", '".$test[$i]['IdProd']."', NULL);";

            /*$panier =  "INSERT INTO `DETAIL` (`Num_OF`, `NomProd`, `Taille`, `IngBase1`, `IngBase2`, `IngBase3`, `IngBase4`, `IngBase5`, `IngBase6`, `IngBase7`, `IngBase8`, `IngBase9`, `IngBase10`, `IngOpt1`, `IngOpt2`, `IngOpt3`, `IngOpt4`, `IdProd`, `DateArchiv`) VALUES (NULL, '".$test[1]['NomProd']."', '".$test[1]['Taille']."', ".$test[1]['IngBase1'].", ".$test[1]['IngBase2'].", ".$test[1]['IngBase3'].", ".$test[1]['IngBase4'].", ".$test[1]['IngBase5'].", ".$test[1]['IngBase6'].", ".$test[1]['IngBase7'].", ".$test[1]['IngBase8'].", ".$test[1]['IngBase9'].", ".$test[1]['IngBase10'].", ".$test[1]['IngOpt1'].", ".$test[1]['IngOpt2'].", ".$test[1]['IngOpt3'].", ".$test[1]['IngOpt4'].", '".$test[1]['IdProd']."', NULL);";
            $pdo->query($panier);
            echo "<br>"."<br>".$panier;

           }
            
        }*/
        //header('Location: ../Public/html/panier.php');
        






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