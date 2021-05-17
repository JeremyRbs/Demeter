<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link href="/ProjetDemeter/DemeterRepository/Public/CSS/Sytle.css" rel="stylesheet">

		<title>Gérant</title>
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
        
        <?php require_once ('../../controller/connexion.php'); ?>
            
		<div id="div-principal">
			<h1 id="h1-nos-produits">Gérant</h1>
			<a href="/ProjetDemeter/DemeterRepository/Public/html/pageGerant_stock.php"><button type="submit" class="btn btn-primary">Gestion du stock</button></a>
			<a href="/ProjetDemeter/DemeterRepository/Public/html/pageGerant_recettes.php"><button type="submit" class="btn btn-primary">Recettes</button></a>
                        <a href="/ProjetDemeter/DemeterRepository/Public/html/pageGerant_ingredients.php"><button type="submit" class="btn btn-primary">Ingrédients</button></a>
			<a href="/ProjetDemeter/DemeterRepository/Public/html/pageGerant_fournisseur.php"><button type="submit" class="btn btn-primary">Fournisseur</button></a>
                        <hr size="5" id="ligne-div-principal">
                        
                        <h2><u>Liste des ingrédients :</u></h2><br>
                        
                        <div class="row">
                            <div class="col-md-8">
                                    <table class="table table-striped">
                                            <colgroup span="7"></colgroup>
                                            <tr>
                                                    <th>Ingrédient</th>
                                                    <th>Quantité</th>
                                                    <th>Unité</th>
                                                    <th>Prix HT</th>
                                                    <th>Fournisseur</th>
                                                    <th>Ajustement</th>
                                                    <th>Action(s)</th>
                                            </tr>
                                            <?php
                                                // On récupère tout le contenu de la table PRODUIT
                                                $sql = $pdo->query('SELECT * FROM INGREDIENT');
                                                while($row = $sql->fetch()) {
                                                    echo "<tr><td>".$row['NomIngred']."</td><td>".$row['StockReel']."</td><td>".$row['Unite']."</td><td>".$row['PrixUHT_Moyen']."</td><td>".$row['DateArchiv']."</td><td>".$row['DateArchiv']."</td><td>".$row['DateArchiv']."</td></tr>";
                                                }
                                            ?>
                                    </table>
                                
                                <h3>Créer un nouvel ingrédient :</h3><br>
                                <p>Pour créer son propre ingrédient, appuyez sur ce bouton :</p><br>
                                <p>Une nouvelle ligne est apparue dans le tableau ! Vous pouvez la modifier grâce au bouton "Modifier" présent dans celle-ci.</p>
                            </div>
                        </div>
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
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
		-->
	</body>
</html>