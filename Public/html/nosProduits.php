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
		<h1 id="h1-nos-produits">Nos produits</h1>
		<hr size="5" id="ligne-div-principal">
		<section>
		<article class="accueilFruitsLegumes" id="artTacos1">
			<img id="img_chevre-miel_defaut" class="autreImages"
				src="/ProjetDemeter/DemeterRepository/Public/Images/chevre-miel.jpeg">
			<div class="div-menus">
				<h3 class="titre-tacos">Chèvre miel</h3>
				<p class="pdFL">Galette, escalope, salade, tomate, oignon,
					frites, sauce fromagère, chèvre et miel.</p>
				<br> <br> <input class="form-check-input" type="checkbox"
					value="" id="flexCheckDefault"> <label
					class="form-check-label" for="flexCheckDefault"> Supplèment
					miel + 0,50€ </label>
				<div>
					<select class="form-select" aria-label="Default select example"
						id="customRange2">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select> <select class="form-select" aria-label="Default select example"
						id="customRange1">
						<option selected value="1">S</option>
						<option value="2">M</option>
						<option value="3">L</option>
						<option value="4">XL</option>
					</select>
					<button id="customRange3" type="submit" class="btn btn-primary">Ajouter</button>
				</div>
			</div>
			<div class="clear">
		</article>
		<article class="accueilFruitsLegumes" id="artTacos2">
			<img id="img_savoyard_defaut" class="autreImages"
				src="/ProjetDemeter/DemeterRepository/Public/Images/savoyard.jpg">
			<div class="div-menus">
				<h3 class="titre-tacos">Savoyard</h3>
				<p class="pdFL">Galette, viande hachée, salade, tomate, oignon,
					crème, lardons, frites, sauce fromagère et raclette.</p>
				<br> <input class="form-check-input" type="checkbox" value=""
					id="flexCheckDefault"> <label class="form-check-label"
					for="flexCheckDefault"> Supplèment lardons + 0,50€ </label>

				<div class="div-choix-ajout">
					<select class="form-select" aria-label="Default select example"
						id="customRange2">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select> <select class="form-select" aria-label="Default select example"
						id="customRange1">
						<option selected value="1">S</option>
						<option value="2">M</option>
						<option value="3">L</option>
						<option value="4">XL</option>
					</select>
					<button id="customRange3" type="submit" class="btn btn-primary">Ajouter</button>
				</div>
			</div>
			<div class="clear">
		</article>
		<article class="accueilFruitsLegumes" id="artTacos3">
			<img id="img_3-fromages_defaut" class="autreImages"
				src="/ProjetDemeter/DemeterRepository/Public/Images/3-fromages.jpg">
			<div class="div-menus">
				<h3 class="titre-tacos">3 fromages</h3>
				<p class="pdFL">Galette, viande hachée, salade, tomate, oignon,
					crème, lardons, frites, sauce fromagère, blue, cheddar et emmantal.
				</p>
				<br> <input class="form-check-input" type="checkbox" value=""
					id="flexCheckDefault"> <label class="form-check-label"
					for="flexCheckDefault"> Supplèment cheddar + 0,50€ </label>
				<div id="div-menu">
					<select class="form-select" aria-label="Default select example"
						id="customRange2">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select> <select class="form-select" aria-label="Default select example"
						id="customRange1">
						<option selected value="1">S</option>
						<option value="2">M</option>
						<option value="3">L</option>
						<option value="4">XL</option>
					</select>
					<button id="customRange3" type="submit" class="btn btn-primary">Ajouter</button>
				</div>
			</div>
			<div class="clear">
		</article>
		<article class="accueilFruitsLegumes" id="artTacos4">
			<img id="img_black-forest_defaut" class="autreImages"
				src="/ProjetDemeter/DemeterRepository/Public/Images/black-forest.jpg">
			<div class="div-menus">
				<h3 class="titre-tacos">Black forest</h3>
				<p class="pdFL">Galette, merguez, salade, tomate, oignon,
					poivrons, frites, sauce fromagère et sauce barbecue.</p>
				<br> <input class="form-check-input" type="checkbox" value=""
					id="flexCheckDefault"> <label class="form-check-label"
					for="flexCheckDefault"> Supplèment champignon + 0,50€ </label>
				<div>
					<select class="form-select" aria-label="Default select example"
						id="customRange2">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select> <select class="form-select" aria-label="Default select example"
						id="customRange1">
						<option selected value="1">S</option>
						<option value="2">M</option>
						<option value="3">L</option>
						<option value="4">XL</option>
					</select>
					<button id="customRange3" type="submit" class="btn btn-primary">Ajouter</button>
				</div>
			</div>
			
		</article>
		<div class="clear">
		</section>
	</div>
	
	<footer class="footer">
		<div class="centrageFooter">
		<a href="/ProjetDemeter/DemeterRepository/Public/html/accueil.html">Accueil</a>
		<a href="/ProjetDemeter/DemeterRepository/Public/html/nosProduits.html">Nos	Produits</a> 
		<a href="">Notre Projet</a> <a href="">Mentions légales</a>
		</div>
	</footer>
	

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
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

