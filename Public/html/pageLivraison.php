<!DOCTYPE html>
<html lang="fr">
<head>

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
<title>Livraison</title>

	<?php
// REQUETE
require_once ('../../controller/connexion.php');

?>
</head>

<body>
	<header>

		<nav id="bandeau-accueil">
			<a href="/ProjetDemeter/DemeterRepository/Public/html/accueil.php"><img
				id="img_demeter_defaut"
				src="/ProjetDemeter/DemeterRepository/Public/Images/demeter.PNG"></a>
			<li class="liDeNav"><a
				href="/ProjetDemeter/DemeterRepository/Public/html/nosProduits.php"><button
						id="nav-menu" type="submit" class="btn btn-primary">Nos produits</button></a>
				<a
				href="/ProjetDemeter/DemeterRepository/Public/html/pageCuisine.php"><button
						id="button-cuisine" type="submit" class="btn btn-primary">Cuisine</button></a>
				<a
				href="/ProjetDemeter/DemeterRepository/Public/html/pageGerant.php"><button
						id="button-gerant" type="submit" class="btn btn-primary">Gérant</button></a>
				<a
				href="/ProjetDemeter/DemeterRepository/Public/html/pageLivraison.php"><button
						id="button-livreur" type="submit" class="btn btn-primary">Livreur</button></a>
			</li> <a
				href="/ProjetDemeter/DemeterRepository/Public/html/panier.php"><button
					id="button-panier" type="submit" class="btn btn-primary">Panier</button></a>

		</nav>
	</header>

	<!-- 	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">Demeter Tacos</a>
			<button class="navbar-toggler" type="button"
				data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item"><a class="nav-link active"
					aria-current="page" href="/">Connexion</a></li>
			</ul>
		</div>
	</nav> -->
	<div id="div-principal">
		<h1>Accès livreur</h1>
		<hr size="5" id="ligne-div-principal">
		<br>
		<h2>Commande à livrer</h2>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-striped">
					<colgroup span="4"></colgroup>
					<tr>
						<th>Commande</th>
						<th>Contenue</th>
						<th>Adresse</th>
						<th>Heure de Livraison</th>
					</tr>
					<tr>
						<?php
    try {
<<<<<<< Updated upstream
        $requete = $pdo->query("SELECT * from Detail INNER JOIN com_det ON detail.Num_OF = com_det.Num_OF INNER JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'O' AND EtatLivraison = 'N'");
=======
//         $requete = $pdo->query("SELECT NumCom from commande where A_Livrer = O");
//         $requet2 = $pdo->query("SELECT NumOf from com_det where NumCom =" + $requete + "");
//         $requet3 = $pdo->query("SELECT * from Detail where Num_OF = " + $requet2 + "");

        $requet = $pdo->query("SELECT * from Detail INNER JOIN com_det ON detail.Num_OF = detail.Num_OF INNER JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'O'");

>>>>>>> Stashed changes
    } catch (PDOException $e) {
        print $e->getMessage();
    }
    while ($commande = $requete->fetch()) { // FETCH POUR RECUPERER LES DONNEES

        ?>
						<td><?php echo $commande['NomClient']; ?></td>
						<td><?php echo $commande['NomProd']; ?></td>
						<td><?php  echo $commande['AdrClient']; ?> </td>
						<td><?php  echo $commande['HeureDispo']; ?></td>
						<?php
    }
    ?>
					</tr>
				</table>
			</div>
		</div>
		<br> <span>Les trajets sont définis pour chaque livraison et sont
			affiché sur cette map.<br>N'oubliez pas, livrer rapidement est notre
			priorité !<br>Bonne livraison !
		</span> <br> <br>
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.422945223361!2d4.84486971560188!3d46.776269779138346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f2fcc679801fdd%3A0x4a42dadcb29915dc!2sCnam%20%3A%20Conservatoire%20National%20des%20Arts%20et%20M%C3%A9tiers!5e0!3m2!1sfr!2sfr!4v1619595439783!5m2!1sfr!2sfr"
			width="600" height="450" style="border: 0;" allowfullscreen=""
			loading="lazy"></iframe>
		<h2>Commande livré</h2>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-striped">
					<colgroup span="4"></colgroup>
					<tr>
						<th>ID Commande</th>
						<th>Contenue</th>
						<th>Heure de Livraison</th>
						<th>Language</th>
					</tr>
					<?php
    try {
        $requete = $pdo->query("SELECT * from Detail INNER JOIN com_det ON detail.Num_OF = com_det.Num_OF INNER JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'O' AND EtatLivraison = 'O'");
    } catch (PDOException $e) {
        print $e->getMessage();
    }
    while ($commande = $requete->fetch()) { // FETCH POUR RECUPERER LES DONNEES

        ?>
					<tr>
						<td><?php echo $commande['NomClient']; ?></td>
						<td><?php echo $commande['NomProd']; ?></td>
						<td><?php  echo $commande['AdrClient']; ?> </td>
						<td><?php  echo $commande['HeureDispo']; ?></td>
					</tr>
						<?php
    }
    ?>

				</table>
			</div>
		</div>

	</div>

	<footer class="footer">
		<div class="centrageFooter">
			<a href="/ProjetDemeter/DemeterRepository/Public/html/accueil.html">Accueil</a>
			<a
				href="/ProjetDemeter/DemeterRepository/Public/html/nosProduits.html">Nos
				Produits</a> <a href="">Notre Projet</a> <a href="">Mention légal</a>
		</div>
	</footer>
	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
		integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
		integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
		crossorigin="anonymous"></script>
</body>
</html>

