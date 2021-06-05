

<?php
	$sql = "SELECT * FROM PRODUIT WHERE NbIngOpt=1 AND Taille='M'"; // requete dans ma base pour avoir un "model" qui va me servir a prendre toute les infos que j'ai besoin pour la création d'un tacos
	$req = $pdo->query($sql); //envoie de la requete a la base
	$artTacos1 = 1; // cette variable me permet de gerer le css, cest a dire que tout les deux articles, la classe change pour mettre le tacos a droite ou a gauche 
	$numId = 0; // initialisation de numId qui va me permettre de 
	while($row = $req->fetch()) { // la boucle while pour recup les info de mon select 
		$numId++; // incrementation de mon numId pour la création du tacos suivant 
		if($artTacos1==3){ // une fois a 3 ma classe
			$artTacos1=1;
		}
		echo "<article class='accueilFruitsLegumes' id='artTacos".$artTacos1."'> 
				<img id='img_defaut' class='autreImages'src='../Images/".$row['Image']."'>
				<div class='div-menus'> 
					<h3 class='titre-tacos' id='val4_".$numId."' value='".$row['NomProd']."'>".$row['NomProd']."</h3> 
					<p class='pdFL'>".$row['IngBase1'].", ".$row['IngBase2'].", ".$row['IngBase3'].", ".$row['IngBase4'].", ".$row['IngBase5'].", ".$row['IngBase6'].", ".$row['IngBase7'].", ".$row['IngBase8'].", ".$row['IngBase9'].", ".$row['IngBase10']."</p>
					<br> <br> <input class='form-check-input' type='checkbox' value='' id='val1_".$numId."'> <label class='form-check-label' for='flexCheckDefault'> Supplèment ".$row['IngOpt1']." + 0,50€ </label>
					<div>
					<select class='form-select' aria-label='Default select example'
						id='val2_".$numId."'>
						<option selected value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
					</select>
					<select class='form-select' aria-label='Default select example'
						id='val3_".$numId."'>
						<option value='S'>S</option>
						<option selected value='M'>M</option>
						<option value='L'>L</option>
						<option value='XL'>XL</option>
					</select>
					<button id='but_".$numId."' value='".$numId."' type='submit' class='btn btn-primary'>Ajouter</button>
				</div>
			</div>

			<div class='clear'>
		</article>
		";
		$artTacos1++;
		
	}




	/*echo "<select class='form-select' aria-label='Default select example' id='customRange1_1'>";
	while($row = $req->fetch()) {
		if($row['Taille']=='M'){
			echo "<option selected value='".$row['Taille']."'>".$row['Taille']."</option> ";
		}elseif($row['Taille']!='M'){
	    	echo "<option value='".$row['Taille']."'>".$row['Taille']."</option> ";
		}
	} 
	echo "</select>";*/
?>