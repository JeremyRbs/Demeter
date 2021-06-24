<!DOCTYPE html>
<html lang="fr">
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
<link href="../CSS/Sytle.css"
	rel="stylesheet">
    <link href="../CSS/carousel.css"
          rel="stylesheet">

<title>Accueil</title>

</head>
<body>
	
	
	<header>
		<nav id="bandeau-accueil">
			<a href="../../Public/html/accueil.php"><img
				id="img_demeter_defaut"
				src="../../Public/Images/demeter.PNG"></a>
			<li class="liDeNav">
				 <a href="../../Public/html/nosProduits.php"><button id="nav-menu" type="submit" class="btn btn-primary">Nos produits</button></a>
			 <a href="../../Public/html/pageCuisine.php"><button id="button-cuisine" type="submit" class="btn btn-primary">Cuisine</button></a>
				<a href="../../Public/html/pageGerant.php"><button id="button-gerant" type="submit" class="btn btn-primary">Gérant</button></a>
				<a href="../../Public/html/pageLivraison.php"><button id="button-livreur" type="submit" class="btn btn-primary">Livreur</button></a>
			</li> <a href="../../Public/html/panier.php"><button
					id="button-panier" type="submit" class="btn btn-primary">Panier</button></a>

		</nav>
	</header>
	<?php require_once ('../../controller/connexion.php'); ?>
	<div id="div-principal">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Notre selection de tacos.</h1>
                            <p><img id='img_defaut' style="height: 77%; width: 17%;" class='autreImages'src='../Images/3-fromages.jpg'>
                                <img id='img_defaut' style="height: 77%; width: 17%;" class='autreImages'src='../Images/black-forest.jpg'>
                                <img id='img_defaut' style="height: 77%; width: 17%;" class='autreImages'src='../Images/chevre-miel.jpeg'>
                                <img id='img_defaut' style="height: 77%; width: 17%;" class='autreImages'src='../Images/savoyard.jpg'></p>
                            <br>
                            <p><a style="margin-top: 2%" class="btn btn-lg btn-primary" href="../../Public/html/nosProduits.php">Nos produits</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Vous avez déjà commandez ?</h1>
                            <p>Rtrouvez votre panier juste ici.</p>
                            <p><a class="btn btn-lg btn-primary" href="../../Public/html/panier.php">Mon panier</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Des produits frais toute l'année.</h1>
                            <p>Des partenaires toujours présent pour des produits de qualités.</p>
                            <p><a class="btn btn-lg btn-primary" href="https://www.qualidelice.fr">Partenaires</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

		</article>

	</div>
	<footer class="footer">
		<div class="centrageFooter">
		<a href="../../Public/html/accueil.html">Accueil</a>
		<a href="../../Public/html/nosProduits.html">Nos	Produits</a> 
		<a href="">Notre Projet</a> 
                <a href="">Mentions légales</a>
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


