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
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> <!-- importation d'une bibliothèque bootstrap --><!--  -->
<link href="../CSS/Sytle.css" rel="stylesheet"> <!-- importation de ma feuille de style  CSS  Public/CSS/Style.css-->
<script src="https://code.jquery.com/jquery-latest.js"></script><!-- Importation de jquery -->
<title>Nos produits</title> <!-- titre de la page -->
</head>
<body>




	<header>
		<nav id="bandeau-accueil">
			<a href="../html/accueil.php"><img id="img_demeter_defaut" src="../Images/demeter.PNG"></a>
			<li class="liDeNav"><a href="../html/nosProduits.php"><button id="nav-menu" type="submit" class="btn btn-primary">Nos produits</button></a> <a href="../html/pageCuisine.php"><button id="button-cuisine" type="submit" class="btn btn-primary">Cuisine</button></a>
				<a href="../html/pageGerant.php"><button id="button-gerant" type="submit" class="btn btn-primary">Gérant</button></a>
				<a href="../html/pageLivraison.php"><button id="button-livreur" type="submit" class="btn btn-primary">Livreur</button></a>
			</li> <a href="../html/panier.php"><button id="button-panier" type="submit" class="btn btn-primary">Panier</button></a>

		</nav>
	</header>





	<?php require_once ('../../controller/connexion.php');?> <!-- importation de ma page php pour se connecter au serveur sql Controller/connexion.php -->




		<div id="div-principal">
		<h1 id="h1-nos-produits">Nos produits</h1> <!-- Titre de ma div principal -->
		<?php if($_SESSION['i']>0){
						$_SESSION['i'];
					}else{
						$_SESSION['i'] = 0;
					}
					echo "<p id='inventaire' value='".$_SESSION['i']."'></p>"; ?> <!-- Cette balise <p> "invisible" me permet de récupérer la variable du nombre de  tacos commandé sur cette page qui est stocker dans ma session plus bas. Par exemple si je prend 2 tacos sur ma page nos produit, que je change de page et que je reviens pour prendre plus de tacos, alors, cette varible me sera retourné avec la valeur 2 ce qui me permet de la garder en mémoire pour mon panier -->
		<hr size="5" id="ligne-div-principal"> <!-- Petit ligne de séparation pour le style -->
		<section>

<!------------------------------------------------- Importation de mon php ------------------------------------------------->

			<?php require_once ('../../controller/sizeAndNumberOfCM.php');?> <!-- Voici le plus important, l'importation de mes tacos depuis ma page php controller/sizeAndNumberOfCM, celle ci va me permettre d'afficher toutes les sorte de tacos présent dans ma base, voir ce fichier pour plus d'explication -->

<!------------------------------------------------- Importation de mon php ------------------------------------------------->


			<div class="clear">
		</section>
	</div>



<!------------------------------------------------- Debut JS ------------------------------------------------->
<!------------------------------------------------- Debut JS ------------------------------------------------->
<!------------------------------------------------- Debut JS ------------------------------------------------->
                        <script type="text/javascript">
                        	var i = $('#inventaire').attr('value'); // Sauvegarde de ma variable précedement appeler en php (ne contient rien lors des premier choix de tacos)
                        	i++; //augmentation de cette variable, puisqu'il n'y a rien a la base elle n'incrémente rien. Mais si la personne revient sur cette page pour reprendre des tacos alors la varible precedement enregistrer sera augmenter de 1
                        	$(document).ready(function (){ // attend que la page soit charger 
                        		$('[id^=but_').click(function () { // Quand on clique sur les boutons avec l'id qui commmence par but (soit les boutons ajouter)
                        			
									var id=$(this).val(); // Recup d'id de ces boutons 
	                            	var suplementForCM=$("#val1_"+id+"").is(":checked");  // Recup la valeur en true ou false du bouton suplement 
		                            var numberForCM=$('#val2_'+id+' option:selected').val(); // Recup la valeur du nombre de tacos a enregistrer 
		                            var sizeForCM=$('#val3_'+id+' option:selected').val(); // Recup la valeur de la taille du tacos 
		                            var idOfTacos=$('#val4_'+id).attr('value'); // Recup le nom du tacos
		                            //var numId=$('#panier').attr('value');
		                            var numI=$('#inventaire').attr('value'); //Mise a jour de la varible 
		                            console.log(suplementForCM+" "+numberForCM+" "+sizeForCM+" "+id); // code pour debug
		                            console.log(numI); // code pour debug
		                            
		                            console.log(idOfTacos); // code pour debug
		                            console.log(i); // code pour debug
		                            $.ajax( //envoie d'un requete ajax 
									{ // debut requete ajax
										url:'../../controller/json.php', // envoie vers ce fichier
										type:'post', // envoie avec la methode post
										data:{  // debut du tableau de données 
											'id' : i, 
											//'numId' : numId,
											'numI' : numI,
											'idOfTacos' : idOfTacos,
											'suplementForCM' : suplementForCM,
											'numberForCM' : numberForCM,
											'sizeForCM' : sizeForCM
										 }, // fin tableau de données 
										success:function(data){ // fonction a faire en cas de succes 
											alert(idOfTacos); 
										} 
									}
									
									);
									i++; // on incrémante pour ne pas effacer les premieres valeurs
		                           

		                            

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


