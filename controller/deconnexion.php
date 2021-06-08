<?php 

	session_start();

	require_once 'connexion.php';
	$ii = $_SESSION['i'];
	echo $_SESSION['emballage'];
	$i3;
	
	print_r($test[$i]);
	echo $test[$i];
	echo "bonjour".$_SESSION['i'];
	$nom_client = $_POST["nom_client"];
	$tel_client = $_POST["tel_client"];
	$adresse_de_livraison = $_POST["adresse_de_livraison"];
	$code_postal = $_POST["code_postal"];
	$ville = $_POST["ville"];
	echo $_POST["emballage"];
		if($_POST["emballage"] == 'true'){
            $boite = "carton";
        }else{
            $boite = "thermo";
        }
        if($_POST["livraison"] == 'true'){
            $livraison = "N";
        }else{
            $livraison = "O";
        }
           //$nom_client = $_POST["nom_client"];
           $client =  "INSERT INTO `COMMANDE` (`NumCom`, `NomClient`, `TelClient`, `AdrClient`, `CP_Client`, `VilClient`, `Date`, `HeureDispo`, `TypeEmbal`, `A_Livrer`, `EtatLivraison`, `CoutLiv`, `IdLivreur`, `DateArchiv`) VALUES (NULL, '".$nom_client."', '".$tel_client."', '".$adresse_de_livraison."', '".$code_postal."', '".$ville."', CURRENT_DATE(), CURRENT_TIME(), '".$boite."', '".$livraison."', 'N', NULL, NULL, NULL);";
           /*$client =  "INSERT INTO `COMMANDE` (`NumCom`, `NomClient`, `TelClient`, `AdrClient`, `CP_Client`, `VilClient`, `Date`, `HeureDispo`, `TypeEmbal`, `A_Livrer`, `EtatLivraison`, `CoutLiv`, `IdLivreur`, `DateArchiv`) VALUES (NULL, '".$nom_client."', '0637645326', '6 rue du bois', '71100', 'Chalon sur Saône', CURRENT_DATE(), CURRENT_TIME(), '".$boite."', 'N', 'N', NULL, NULL, NULL);";*/
           $pdo->query($client);
           echo "<br>"."<br>".$client;
	
            for($i = 1; $i<=$ii; $i++){
            $test[$i] = $_SESSION['test'.$i];

	            for($i2 = 1; $i2<= $_SESSION['tacos'.$i.'_numberForCM']; $i2++){
	            //tester ça !!!! si 5 tacos alors en mettre 5 dans la base !!!
	            echo "<br>"."<br>".$_SESSION['tacos'.$i.'_numberForCM'];



	            $panier =  "INSERT INTO `DETAIL` (`Num_OF`, `NomProd`, `Taille`, `IngBase1`, `IngBase2`, `IngBase3`, `IngBase4`, `IngBase5`, `IngBase6`, `IngBase7`, `IngBase8`, `IngBase9`, `IngBase10`, `IngOpt1`, `IngOpt2`, `IngOpt3`, `IngOpt4`, `IdProd`, `DateArchiv`) VALUES (NULL, '".$test[$i]['NomProd']."', '".$test[$i]['Taille']."', ".$test[$i]['IngBase1'].", ".$test[$i]['IngBase2'].", ".$test[$i]['IngBase3'].", ".$test[$i]['IngBase4'].", ".$test[$i]['IngBase5'].", ".$test[$i]['IngBase6'].", ".$test[$i]['IngBase7'].", ".$test[$i]['IngBase8'].", ".$test[$i]['IngBase9'].", ".$test[$i]['IngBase10'].", ".$test[$i]['IngOpt1'].", ".$test[$i]['IngOpt2'].", ".$test[$i]['IngOpt3'].", ".$test[$i]['IngOpt4'].", '".$test[$i]['IdProd']."', NULL);";

	            $i3++;
	            echo "<br>"."<br>".$i3;
	            $pdo->query($panier);
	            echo "<br>"."<br>".$panier;
	            $numcom = "SELECT NumCom FROM COMMANDE ORDER BY NumCom DESC LIMIT 0, 1;";
	            $req1 = $pdo->query($numcom);
	            $row1 = $req1->fetch(PDO::FETCH_ASSOC);
	            $num_of = "SELECT Num_OF FROM DETAIL ORDER BY Num_OF DESC LIMIT 0, ".$i3.";";
	            $req2 = $pdo->query($num_of);
	            $row2 = $req2->fetch(PDO::FETCH_ASSOC);
	            $comdet = "INSERT INTO `COM_DET` (`Num_OF`, `Quant`, `NumCom`) VALUES ('".$row2['Num_OF']."', '1', '".$row1['NumCom']."');";
	            $pdo->query($comdet);
	            echo "<br>"."<br>".$comdet;
	           }
           }

           session_destroy();
	

	
?>