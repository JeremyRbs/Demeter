

<?php
	$sql = "SELECT * FROM PRODUIT WHERE NbIngOpt=1 AND Taille='M'";
	$req = $pdo->query($sql);
	$artTacos1 = 1;
	$numId = 0; //////// ??????????????????????
	while($row = $req->fetch()) {
		$numId++;
		if($artTacos1==3){
			$artTacos1=1;
		}
		echo "<div id='panier_".$numId."'> a</div>
				<article class='accueilFruitsLegumes' id='artTacos".$artTacos1."'> 
				<img id='img_defaut' class='autreImages'src='../Images/".$row['Image']."'>
				<div class='div-menus'> 
					<h3 class='titre-tacos'>".$row['NomProd']."</h3> 
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
			echo"<div id='panier' value='".$numId."'> ".$numId."</div>";




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