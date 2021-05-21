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
			<a href="../html/accueil.php"><img
				id="img_demeter_defaut"
				src="../Images/demeter.PNG"></a>
			<li class="liDeNav"><a
				href="../html/nosProduits.php"><button
						id="nav-menu" type="submit" class="btn btn-primary">Nos
						produits</button></a> <a
				href="../html/pageCuisine.php"><button
						id="button-cuisine" type="submit" class="btn btn-primary">Cuisine</button></a>
				<a
				href="../html/pageGerant.php"><button
						id="button-gerant" type="submit" class="btn btn-primary">Gérant</button></a>
				<a
				href="../html/pageLivraison.php"><button
						id="button-livreur" type="submit" class="btn btn-primary">Livreur</button></a>
			</li> <a href="../html/panier.php"><button
					id="button-panier" type="submit" class="btn btn-primary">Panier</button></a>

		</nav>
	</header>

	<?php require_once ('../../controller/connexion.php');echo"ok"; ?>




	<div id="div-principal">
		<h1 id="h1-nos-produits">Nos produits</h1>
		<hr size="5" id="ligne-div-principal">
		<section>



		<?php require_once ('../../controller/sizeAndNumberOfCM.php');?>


		<div class="clear">
		</section>
		<button id="button-panier" type="submit" class="btn btn-primary">Voir panier</button>
	</div>



<!------------------------------------------------- Debut JS ------------------------------------------------->
<!------------------------------------------------- Debut JS ------------------------------------------------->
<!------------------------------------------------- Debut JS ------------------------------------------------->
                        <script type="text/javascript">
                        	$(document).ready(function (){
                        		function saveValeur(id, a, b, c){

                        			var tacos = {
                        				"tacos" : {
                        					"id": id,
									        "supp": a,
									        "qte": b,
									        "taille": c
									    },
                        			};
                        			console.log(tacos);
                        			let json = JSON.stringify(tacos);
                        			console.log(json);
                        			var test = jQuery.fromJSON(json);
                        			
                        		}
                        		$('[id^=but_').click(function () {
									var id=$(this).val();/////////////////////////////////////////????
	                            	var suplementForCM=$("#val1_"+id+"").is(":checked");
		                            var numberForCM=$('#val2_'+id+' option:selected').val();
		                            var sizeForCM=$('#val3_'+id+' option:selected').val();
		                            console.log(suplementForCM+" "+numberForCM+" "+sizeForCM+" "+id);
		                            $('#panier_'+id+'').html(suplementForCM+" "+numberForCM+" "+sizeForCM);
		                            saveValeur(id, suplementForCM, numberForCM, sizeForCM);

		                            

	                        	});

	                        	saveValeur();
	                        	
								//Objet JavaScript
								/*var num = $('#panier').val();
								console.log(num);*/

								//Conversion en chaine JSON
								/*let json = JSON.stringify(utilisateur);

								document.getElementById("resultat").innerHTML = 
								    "Type de la variable : " + typeof(json) + "<br>Contenu de la variable : " + json;*/
                        	});
                        </script>
                     
<!------------------------------------------------- FIN JS ------------------------------------------------->
<!------------------------------------------------- FIN JS ------------------------------------------------->
<!------------------------------------------------- FIN JS ------------------------------------------------->  


	<footer class="footer">
		<div class="centrageFooter">
		<a href="../html/accueil.php">Accueil</a>
		<a href="../html/nosProduits.php">Nos	Produits</a> 
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


