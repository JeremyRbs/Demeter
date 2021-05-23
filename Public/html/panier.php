
<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

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
					id="button-panier" type="submit" class="btn btn-primary">Panier</button></a>

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
					$numId = $_SESSION['numId'];
					while ($i <= $_SESSION['i']){
						$prixTot = $_SESSION['tacos'.$i.'_prix']*$_SESSION['tacos'.$i.'_numberForCM']."€";
						echo "<tr class='tableau_produitSelectionnes'>
								<td class='td_imp'> ".$_SESSION['tacos'.$i.'_numberForCM']." ".$_SESSION['tacos'.$i.'_idOfTacos']." ".$_SESSION['tacos'.$i.'_suplementForCM']." ".$_SESSION['tacos'.$i.'_sizeForCM']."</td>
								<td class='td_imp' id='".$i."'> ".$prixTot."</td>
							</tr>";
						
						$prixTotal = $prixTotal + $prixTot;
						//echo $_SESSION['tacos'.$i.'_prix'];
						
						$i++;

					}
				
				?>
				<tr class="tableau_produitSelectionnes" id="tr_produitSelectionnes">
					<td>Total : </td>
					<?php echo "<td id='prixTolal' value='".$prixTotal."'>".$prixTotal."€</td>"; ?>

				</tr>
				
			</table>


		</article>
		<article class="" id="artPanier2">
			<h2>Livraison :</h2>
			<br> <br>
			<p>Adresse de livraison :</p>
			<input type="" name="">
			<br> <br>
			<p>Code postal :</p>
			<input type="" name="">
			<br> <br>
			<p>Ville :</p>
			<input type="" name="">
			<br> <br>
			<p>Nom client :</p>
			<input type="" name="">
			<br> <br>
			<p>Choix de l'emballage :</p>
			<br> <input class="form-check-input" type="checkbox" value=""
				id="flexCheckDefault"> <label class="form-check-label"
				for="flexCheckDefault"> Emballage standard </label> <br> 
				<input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault_1"> <label class="form-check-label" for="flexCheckDefault"> Boîte(s) isothèrme(s) + 3.00€ </label>

		</article>
		<article class="" id="artPanier3">
			<h2 id="aEmporter">
				A emporter <input class="form-check-input" type="checkbox" value=""
					id="flexCheckDefault">
			</h2>

		</article>
		<article class="" id="artPanier4">
			<?php echo "<a id='close_session' href='../../controller/deconnexion.php'><button id='nav-menu_1' type='submit'
					class='btn btn-primary'>Valider la commande de ".$prixTotal."€ </button></a> "?>
		</article>
		<div class="clear"></div>
</div>

<script type="text/javascript">
        	var i =1;
        	$(document).ready(function (){
        		$('#flexCheckDefault_1').click(function () {
        			
        			if($("#flexCheckDefault_1").is(':checked')){
        				var suplementForIso=$("#flexCheckDefault_1").attr('value');
        				var prixTotal=$("#prixTolal").attr('value');
	        			
	        			var prix = parseFloat(suplementForIso) + parseFloat(prixTotal);
	        			console.log(prix);
	        			$("#nav-menu_1").html("Valider la commande de "+prix+"€");
        			}else{
        				var prixTotal=$("#prixTolal").attr('value');
        				$("#nav-menu_1").html("Valider la commande de "+prixTotal+"€");
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


