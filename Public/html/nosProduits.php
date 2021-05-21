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



<!------------------------------------------------- Debut premier tacos ------------------------------------------------->
<!------------------------------------------------- Debut premier tacos ------------------------------------------------->
<!------------------------------------------------- Debut premier tacos ------------------------------------------------->

		<?php require_once ('../../controller/sizeAndNumberOfCM.php');?>


<!------------------------------------------------- Fin premier tacos ------------------------------------------------->
<!------------------------------------------------- Fin premier tacos ------------------------------------------------->
<!------------------------------------------------- Fin premier tacos ------------------------------------------------->

		<div class="clear">
		</section>
	</div>


<!------------------------------------------------- FIN quatrieme tacos ------------------------------------------------->
<!------------------------------------------------- FIN quatrieme tacos ------------------------------------------------->
<!------------------------------------------------- FIN quatrieme tacos ------------------------------------------------->

<!------------------------------------------------- Debut JS ------------------------------------------------->
<!------------------------------------------------- Debut JS ------------------------------------------------->
<!------------------------------------------------- Debut JS ------------------------------------------------->
                        <script type="text/javascript">
                        	$(document).ready(function(){
                        		const id=1;
                        		
                        		console.log(id);
                        		console.log(idOfId);
                        		$('[id$=but_').click(function () {
									const idOfId=$("#idOfId").val();/////////////////////////////////////////????
	                        		$("#but_"+id+"").click(function () {
		                            	var suplementForCM=$("#val1_"+id+"").is(":checked");
			                            var numberForCM=$('#val2_'+id+' option:selected').val();
			                            var sizeForCM=$('#val3_'+id+' option:selected').val();
			                            console.log(suplementForCM+" "+numberForCM+" "+sizeForCM+" "+idOfId+" "+id);
	                        		});
	                        	});
	                            
	                        	$("#customRange3_2").click(function () {
	                            	var suplementForS=$("#flexCheck_"+id+"").is(":checked");
		                            var numberForS=$('#customRange2_'+id+' option:selected').val();
		                            var sizeForS=$('#customRange1_'+id+' option:selected').val();
		                            console.log(suplementForS+" "+numberForS+" "+sizeForS);
	                        	});
	                        	$("#customRange3_3").click(function () {
	                            	var suplementForF=$("#flexCheck_"+id+"").is(":checked");
		                            var numberForF=$('#customRange2_'+id+' option:selected').val();
		                            var sizeForF=$('#customRange1_'+id+' option:selected').val();
		                            console.log(suplementForF+" "+numberForF+" "+sizeForF);
	                        	});
	                        	$("#customRange3_4").click(function () {
	                            	var suplementForBF=$("#flexCheck_"+id+"").is(":checked");
		                            var numberForBF=$('#customRange2_'+id+' option:selected').val();
		                            var sizeForBF=$('#customRange1_'+id+' option:selected').val();
		                            console.log(suplementForBF+" "+numberForBF+" "+sizeForBF);
	                        	});
	                        	
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


