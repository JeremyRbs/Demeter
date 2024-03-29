
<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
if($_SESSION['i']>0){
						$_SESSION['i'];
					}else{
						$_SESSION['i'] = 0;
					}
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
	crossorigin="anonymous">
<link href="/ProjetDemeter/DemeterRepository/Public/CSS/Sytle.css"
	rel="stylesheet">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	

<title>Nos produits</title>
</head>
<body>
	<header>
		<nav id="bandeau-accueil">
			<a href="/ProjetDemeter/DemeterRepository/Public/html/accueil.php"><img
				id="img_demeter_defaut"
				src="/ProjetDemeter/DemeterRepository/Public/Images/demeter.PNG"></a>
			<li class="liDeNav"><a
				href="/ProjetDemeter/DemeterRepository/Public/html/nosProduits.php"><button
						id="nav-menu" type="submit" class="btn btn-primary">Nos
						produits</button></a> <a
				href="/ProjetDemeter/DemeterRepository/Public/html/pageCuisine.php"><button
						id="button-cuisine" type="submit" class="btn btn-primary">Cuisine</button></a>
				<a
				href="/ProjetDemeter/DemeterRepository/Public/html/pageGerant.php"><button
						id="button-gerant" type="submit" class="btn btn-primary">Gérant</button></a>
				<a
				href="/ProjetDemeter/DemeterRepository/Public/html/pageLivraison.php"><button
						id="button-livreur" type="submit" class="btn btn-primary">Livreur</button></a>
			</li> <a href="/ProjetDemeter/DemeterRepository/Public/html/panier.php"><button
					id="button-panier" type="submit" class="btn btn-primary">Panier<?php echo " : ".$_SESSION['i'] ?></button></a>
            

		</nav>
	</header>


	<div id="div-principal">
		<h1 id="h1-nos-produits">Votre panier</h1>
		<hr size="5" id="ligne-div-principal">
		<article class="accueilFruitsLegumes" id="artPanier1">
			<table class="tableau_produitSelectionnes">
				<tr class="tableau_produitSelectionnes" id="tr_produitSelectionnes">
					<td>Produit sélectionnés</td>
					<td>Prix</td>
				</tr>

				<?php
					$i = 1;
					$prix = 0;
					$prixTotal = 0;
					
					
					//echo $_SESSION['i'];
					//$IdTacos = $_SESSION['tacos'.$i];
					//$numId = $_SESSION['numId'];
					while ($i <= $_SESSION['i']){
						//echo $_SESSION['tacos'.$i.'_prix'];
						$prixTot = $_SESSION['tacos'.$i.'_prix']*$_SESSION['tacos'.$i.'_numberForCM'];
						echo "<tr class='tableau_produitSelectionnes' >
								<td class='td_imp' id='numberoftacos".$i."' value='".$_SESSION['tacos'.$i.'_numberForCM']."'> ".$_SESSION['tacos'.$i.'_numberForCM']." ".$_SESSION['tacos'.$i.'_idOfTacos']." ".$_SESSION['tacos'.$i.'_suplementForCM']." ".$_SESSION['tacos'.$i.'_sizeForCM']."</td>
								<td class='td_imp' id='".$i."'> ".$prixTot."€ </td>
							</tr>";
						
						$prixTotal = $prixTotal + $prixTot;
						//echo $_SESSION['tacos'.$i.'_prix'];
						
						$i++;

					}
				
				?>
				<tr class="tableau_produitSelectionnes" id="tr_produitSelectionnes" >
					<td>Total : </td>
					<?php echo "<td id='prixTolal' value='".$prixTotal."'>".$prixTotal."€</td>"; ?>

				</tr>
				
			</table>


		</article>
		<article class="" id="artPanier2">
		<form>
			<h2>Livraison : <input name="livraison" class="form-check-input" type="radio" value="" id="flexCheckDefault_4" ></h2>
			<br>
			<p>Adresse de livraison :</p>
			<input id="adresse_de_livraison" type="" name="" required>
			<br>
			<p>Code postal :</p>
			<input id="code_postal" type="" name="">
			<br>
			<p>Ville :</p>
			<input id="ville" type="" name="">
			<br>
			<p>Nom client :</p>
			<input id="nom_client" type="" name="">
			<br>
			<p>Numéro de téléphone :</p>
			<input id="tel_client" type="" name="">
			<br> <br>
			<p>Choix de l'emballage :</p>
			<br> 
			<input name="amballage" class="form-check-input" type="radio" value="" id="flexCheckDefault_3"> <label class="form-check-label" for="flexCheckDefault"> Emballage standard </label> 
			<br> 
			<input name="amballage" class="form-check-input" type="radio" value="3" id="flexCheckDefault_1"> <label class="form-check-label" for="flexCheckDefault"> Boîte(s) isothèrme(s) + 3.00€ </label>
		

		</article>
		<article class="" id="artPanier3">
			<h2 id='aEmporter'>"
				A emporter <input name="livraison" class="form-check-input" type="radio" value=""
					id="flexCheckDefault_2">
			</h2>
		</form>

		</article>
		<article class="" id="artPanier4">
			<?php echo "<p id='inventaire' value='".$_SESSION['i']."'></p>"; ?>
			<?php echo "<button id='nav-menu_1' type='submit' class='btn btn-primary' disabled='true'>Valider la commande de ".$prixTotal."€ </button> "?>
		</article>
		<div class="clear"></div>
</div>

<script type="text/javascript">
        	var i =1;
        	$(document).ready(function (){
                var validation=$('#inventaire').attr('value');
                //console.log(validation);
                var totalnumberoftacos = 0;
                for(i=1;i<=validation;i++){
                    var numberoftacos = parseInt(numberoftacos);
                    var totalnumberoftacos = parseInt(totalnumberoftacos);
                    var numberoftacos=$('#numberoftacos'+i).attr('value');
                    //console.log(numberoftacos);

                    totalnumberoftacos = numberoftacos + totalnumberoftacos;
                    console.log(totalnumberoftacos);
                }

        		$('#flexCheckDefault_3').click(function () {
        				var prixTotal=$("#prixTolal").attr('value');
        				var prix = parseFloat(prixTotal);
        				console.log(prix);
        				$("#nav-menu_1").html("Valider la commande de "+prix+"€");

        			
			});

        		$('#flexCheckDefault_1').click(function () {
        			var suplementForIso=$("#flexCheckDefault_1").attr('value');
        				var prixTotal=$("#prixTolal").attr('value');
	        			
	        			var prix = 3 + parseFloat(prixTotal);
	        			console.log(prix);
	        			$("#nav-menu_1").html("Valider la commande de "+prix+"€");
        			});
        		$('#nav-menu_1').click(function () {
        			var validation=$('#inventaire').attr('value');  
        			console.log(validation);	
        			var adresse_de_livraison=$('#adresse_de_livraison').val(); 
        			console.log(adresse_de_livraison);	
        			var code_postal=$('#code_postal').val(); 
        			console.log(code_postal);	
        			var ville=$('#ville').val(); 
        			console.log(ville);	
        			var nom_client=$('#nom_client').val(); 
        			console.log(nom_client);
        			var tel_client=$('#tel_client').val(); 
        			console.log(tel_client);	
        			var emballage=$("#flexCheckDefault_3").is(":checked");	
        			console.log(emballage);
        			var livraison=$("#flexCheckDefault_2").is(":checked");	
        			console.log(livraison);
        			if($('#adresse_de_livraison').val()=="" || $('#code_postal').val()=="" || $('#ville').val()=="" || $('#nom_client').val()=="" || $('#tel_client').val()=="")
        				{
							alert("Vous devez remplir les champs en rouges");
							$('#adresse_de_livraison').css('borderColor', 'red');
							$('#code_postal').css('borderColor', 'red');
							$('#ville').css('borderColor', 'red');
							$('#nom_client').css('borderColor', 'red');
							$('#tel_client').css('borderColor', 'red');
						}else{
        			$.ajax(
						{
							url:'../../controller/deconnexion.php',
							type:'post',
							data:{ 
								'adresse_de_livraison' : adresse_de_livraison,
								'code_postal' : code_postal,
								'ville' : ville,
								'nom_client' : nom_client,
								'tel_client' : tel_client,
								'emballage' : emballage,
								'livraison' : livraison
							 },
							success:function(data){

								location.reload(true);
							
							}
							}
							
							);	
        			
						
							var now = new Date(Date.now());
	        				var formatted = now.getHours() + "H" + (now.getMinutes()+20);
		        			if(emballage == true){
					            alert("Cher/Chère "+nom_client+" vos tacos son en préparation. Ils vous seront livrée dans une boite en carton à l'adresse suivante : "+adresse_de_livraison+" vers "+formatted);
					        }else{
					            alert("Cher/Chère "+nom_client+" vos tacos sont en préparation. Ils vous seront livrée dans une boite isothèrme à l'adresse suivante : "+adresse_de_livraison+" vers "+formatted);
					        }
						}
        			
        			
        		

        		//Cher/Chère Paul Antonof vous avez commandé une grande pizza avec du fromage, des tomates, et du jambon. Elle vous sera livrée dans une boite isotherme à l'adresse suivante : 141 avenue boucicaut vers 20h 20min 
			});
        		$('#flexCheckDefault_2').click(function () {
        			
        			if($("#flexCheckDefault_2").is(':checked')){
        				$( "#adresse_de_livraison" ).prop( "disabled", true );
        				$("#adresse_de_livraison").val('');
        				$( "#ville" ).prop( "disabled", true );
        				$("#ville").val('');
        				$( "#flexCheckDefault_3" ).prop( "disabled", true );
        				$( "#flexCheckDefault_1" ).prop( "disabled", true );
        				$( "#nav-menu_1" ).prop( "disabled", false );
        			}else{
        				$( "#adresse_de_livraison" ).prop( "disabled", false );
        				$( "#ville" ).prop( "disabled", false );
        				$( "#flexCheckDefault_3" ).prop( "disabled", false );
        				$( "#flexCheckDefault_1" ).prop( "disabled", false );
        				$( "#nav-menu_1" ).prop( "disabled", false );
        			}
        			
			});
        		$('#flexCheckDefault_4').click(function () {
        			
        			if($("#flexCheckDefault_4").is(':checked')){
        				$( "#nav-menu_1" ).prop( "disabled", false );
        				$( "#adresse_de_livraison" ).prop( "disabled", false );
        				$( "#ville" ).prop( "disabled", false );
        				$( "#flexCheckDefault_3" ).prop( "disabled", false );
        				$( "#flexCheckDefault_1" ).prop( "disabled", false );
        			}else{
        				$( "#nav-menu_1" ).prop( "disabled", false );
        				$( "#adresse_de_livraison" ).prop( "disabled", true );
        				$("#adresse_de_livraison").val('');
        				$( "#ville" ).prop( "disabled", true );
        				$("#ville").val('');
        				$( "#flexCheckDefault_3" ).prop( "disabled", true );
        				$( "#flexCheckDefault_1" ).prop( "disabled", true );
        			}
        			
			});
	});
</script>

		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper --> 

		<footer class="footer">
			<div class="centrageFooter">
				<a href="/ProjetDemeter/DemeterRepository/Public/html/accueil.html">Accueil</a>
				<a
					href="/ProjetDemeter/DemeterRepository/Public/html/nosProduits.html">Nos
					Produits</a> <a href="">Notre Projet</a> <a href="">Mention légal</a>
			</div>
		</footer>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
			crossorigin="anonymous"></script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
		-->
</body>
</html>


