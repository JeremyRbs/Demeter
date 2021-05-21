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
	<?php
		include_once("json.php");
		echo saveValeur();
	 ?>

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
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_imp">Produit
						1vhfbdjvkhbefbehbfoerbfoerblferhbfrehlbehbfv</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_pair">Produit 2</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_imp">Produit 3</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_pair">Produit 4</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_imp">Produit 5</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_pair">Produit 6</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_imp">Produit 7</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_pair">Produit 8</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_imp">Produit 9</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_pair">Produit 10</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_imp">Produit 11</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_pair">Produit 12</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_imp">Produit 13</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_pair">Produit 14</td>
				</tr>
				<tr class="tableau_produitSelectionnes">
					<td class="td_imp">Produit 15</td>
				</tr>
			</table>


		</article>
		<article class="" id="artPanier2">
			<h2>Livraison :</h2>
			<br> <br>
			<p>Adresse de livraison :</p>
			<br> <br>
			<p>Code postal :</p>
			<br> <br>
			<p>Ville :</p>
			<br> <br>
			<p>Nom client :</p>
			<br> <br>
			<p>Choix de l'emballage :</p>
			<br> <input class="form-check-input" type="checkbox" value=""
				id="flexCheckDefault"> <label class="form-check-label"
				for="flexCheckDefault"> Emballage standard </label> <br> <input
				class="form-check-input" type="checkbox" value=""
				id="flexCheckDefault"> <label class="form-check-label"
				for="flexCheckDefault"> Boîte(s) isothèrme(s) + 3.00€ </label>

		</article>
		<article class="" id="artPanier3">
			<h2 id="aEmporter">
				A emporter <input class="form-check-input" type="checkbox" value=""
					id="flexCheckDefault">
			</h2>

		</article>
		<article class="" id="artPanier4">
			<a href=""><button id="nav-menu" type="submit"
					class="btn btn-primary">Valider la commande</button></a>
		</article>
		<div class="clear"></div>
</div>

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


