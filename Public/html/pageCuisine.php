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


<title>Cuisine</title>
	<?php
// REQUETE lp
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

	<div id="div-principal">
		<h1 id="h1-nos-produits">Cuisine</h1>
		<hr size="5" id="ligne-div-principal">
		<article class="" id="tableuCuisine">
			<table class="table table-striped" id="benLaFrappe">
				<colgroup span="4"></colgroup>
				<tr>

				</tr>

				<!--             	<?php
    /*
     * try {
     * $requete = $pdo->query("SELECT HeureDispo, NomClient, GROUP_CONCAT( NomProd) as NomProd from Detail JOIN com_det ON detail.Num_OF = com_det.Num_OF JOIN commande ON commande.NumCom = com_det.NumCom WHERE commande.A_Livrer = 'N' GROUP BY NomClient");
     * } catch (PDOException $e) {
     * print $e->getMessage();
     * }
     * while ($commande = $requete->fetch()) { // FETCH POUR RECUPERER LES DONNEES
     *
     * echo $commande['NomProd'];
     * ?>
     * <tr>
     * <td><?php echo $commande['NomClient'];?></td>
     * <td><?php echo $commande['HeureDispo']; ?></td>
     * <td><?php echo $commande['NomProd']; ?></td>
     * <td></td>
     * </tr>
     * <?php
     * }
     */
    ?>-->
				<tr>
				</tr>
			</table>
	
	</div>

	<script type="text/javascript"> 
	   let id;
	   var a = 0;
	   
		setInterval(function () {
        	$.getJSON( "lectfiles3.php", function(mess) {
       			$("#benLaFrappe").empty(); 
       			$("#benLaFrappe").append("<th>Commande</th>	<th>Horaire</th> <th>Produits</th> <th>Livreur</th>");           	
				$.each(mess, function(key,val){
        			console.log(val['numCom']);
        			console.log(val['nomLivreur'][0][1]);
                  	$('#benLaFrappe').append("<tr id= "+ val['numCom']+"> <td>"+ val['client'] +"</td> <td>"+ val['heure'] +"</td> <td>"+ val['produit'] +"</td> <td><select id="+a+ "> <option value => --S�lectionner un Livreur --</options></td> </tr>");                  		
                  	var len = val['nomLivreur'].length;
                 	console.log(len);
                 	console.log(a);
                  	for(var i = 0;i<len;i++){	 
                  		$("#"+ a).append("<option id = "+ val['nomLivreur'][i][1]+ ">"+ val['nomLivreur'][i]+ "</options>");
                    	console.log(a);                   			
                  	} 
                    a++;
              	});
              	$('select').change(function(){	
              		var mon_id_select = $("select option:selected").attr("id");
                  	console.log('options' + mon_id_select); 
					console.log('test');
                    id = $(this).parent().parent().attr('id');
                    console.log('id' + id);
                    	$(this).parents("table tr").remove();                       
      					$.ajax({
                            url: "modifierCommande.php",
                            type: "GET",
                            data: { 'id' : id ,'idLivreur' : mon_id_select},                   
                            success: function(){alert("ok");}
                    	});
                    
              	});  
        	});                         	                	 
		}, 3000);
              
        </script>
	<footer class="footer">
		<div class="centrageFooter">
			<a href="/ProjetDemeter/DemeterRepository/Public/html/accueil.html">Accueil</a>
			<a
				href="/ProjetDemeter/DemeterRepository/Public/html/nosProduits.html">Nos
				Produits</a> <a href="">Notre Projet</a> <a href="">Mentions
				légales</a>
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