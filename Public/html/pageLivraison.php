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

<script src="https://code.jquery.com/jquery-latest.js"></script>

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

	<div id="div-principal">
		<h1>Accès livreur</h1>
		<hr size="5" id="ligne-div-principal">
		<br>
		<h2>Commande à livrer</h2>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-striped" id="table2">
					<colgroup span="4"></colgroup>

				</table>
			</div>
		</div>
		<br> <span>Les trajets sont définis pour chaque livraison et sont
			affiché sur cette map.<br>N'oubliez pas, livrer rapidement est notre
			priorité !<br>Bonne livraison !
		</span> <br> <br>
		<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" sandbox="allow-forms allow-scripts allow-same-origin" src="https://maps.googleapis.com/maps/api/directions/json?origin=Disneyland&destination=Universal+Studios+Hollywood&key=AIzaSyDTfNqff7oJSkhyCQAXZxuHY-uaRjjlMCE" allowfullscreen></iframe>
		
<!-- 		<iframe -->
<!-- 			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTfNqff7oJSkhyCQAXZxuHY-uaRjjlMCE&callback=initMap">" -->
<!-- 			width="600" height="450" style="border: 0;" allowfullscreen="" -->
<!-- 			loading="lazy"></iframe> -->
		<h2>Commande livré</h2>
		<div class="row">
			<div class="col-md-8">
				<table class="table table-striped" id="table3">
					<colgroup span="4"></colgroup>

				</table>
			</div>
		</div>

	</div>
	<script type="text/javascript"> 
	   let id;
	   
	   
     //         $(document).ready(function(){     
                                               
	   	setInterval(function () {
        	$.getJSON( "lectfiles4.php", function(mess) {
            		$("#table2").empty();
              		$('#table2').append("<tr><th>Nom</th><th>Contenue</th><th>Heure de Livraison</th><th>Adresse de Livraison</th><th>Livreur</th><th>Confirmation</th></tr>");
              		$.each(mess, function(key,val){              			
                  		$('#table2').append("<tr id= "+ val['numCom']+"><td>"+ val['client'] +"</td><td>"+ val['produit'] +"</td> <td>"+ val['heure'] +"</td> <td>"+ val['adresse'] +"</td> <td>"+ val['livreur'] +"</td> <td> <input type='checkbox' id='subscribeNews'> </td> </tr>");                  		
                    });
              		$('#table2').delegate('input:checkbox', 'change', function(){	 
                        id = $(this).parent().parent().attr('id');                  		
                      	if(this.checked) {
                          $(this).parents("table tr").remove();
      						$.ajax({
                                url: "modifierCommande2.php",
                                type: "GET",
                                data: { 'id' : id },                   
                                success: function()
                                            {
                                                alert("ok");                                    
                                            }
                            });
                        }
              		});  
           });
  		}, 3000);
              	                	 
              
              
   	</script>
	<script type="text/javascript"> 
		setInterval(function () {
                                               
                  $.getJSON( "lectfiles5.php", function(mess) {
           			$("#table3").empty();
          			$('#table3').append("<tr><th>Nom</th><th>Heure de Livraison</th><th>Contenue</th></tr>");

              		$.each(mess, function(key,val){
                  		$('#table3').append("<tr><td>"+ val['client'] +"</td><td>"+ val['heure'] +"</td><td>"+ val['produit'] +"</td> </tr>");
                  		
                      	});
                  });                           	                	 
		}, 3000);
        
              
   	</script>
   	
   	
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

