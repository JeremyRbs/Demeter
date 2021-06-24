<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="../CSS/Style.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <title>Gérant</title>

    </head>

    <body>

        <!-- Navbar-->
        <header class="header">
            <nav class="navbar navbar-expand-lg fixed-top py-3">
                <div class="container"><a href="../../Public/html/accueil.php" class="navbar-brand text-uppercase font-weight-bold">DEMETER</a>
                    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a href="../../Public/html/accueil.php" class="nav-link text-uppercase font-weight-bold">Accueil<span class="sr-only"></span></a></li>
                            <li class="nav-item"><a href="../../Public/html/nosProduits.php" class="nav-link text-uppercase font-weight-bold">Nos produits</a></li>
                            <li class="nav-item"><a href="../../Public/html/pageCuisine.php" class="nav-link text-uppercase font-weight-bold">Cuisine</a></li>
                            <li class="nav-item"><a href="../../Public/html/pageGerant.php" class="nav-link text-uppercase font-weight-bold">Gérant</a></li>
                            <li class="nav-item"><a href="../../Public/html/pageLivraison.php" class="nav-link text-uppercase font-weight-bold">Livreur</a></li>
                        </ul>
                    </div>
                </div>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="../../Public/html/panier.php" class="nav-link text-uppercase font-weight-bold">Panier</a></li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>

        <script src="../Js/Navbar.js"></script>

        <main>
            <ul class="tabs">
                <li class="active"><a class="onglet" href="#home">Accueil</a></li>
                <li><a class="onglet" href="#stocks">Gestion des stocks</a></li>
                <li><a class="onglet" href="#recettes">Recettes</a></li>
                <li><a class="onglet" href="#ingredients">Ingrédients</a></li>
                <li><a class="onglet" href="#fournisseur">Fournisseur</a></li>
            </ul>
            <div class="tabs-content">
                <div class="tab-content active" id="home">Cette page est dédiée au gérant.</div>
                <div class="tab-content" id="stocks">

                    <?php require_once ('../../controller/connexion.php'); ?>

                    <br>

                    <div class="row">
                        <div class="col-md-8">
                            <table id="stock" class="table">
                                <colgroup span="6"></colgroup>
                                <tr class="table-header">
                                    <th>Ingrédient</th>
                                    <th>Quantité</th>
                                    <th>Unité</th>
                                    <th>Prix HT</th>
                                    <th>Frais</th>
                                </tr>

                                <?php
                                // On récupère tout le contenu de la table PRODUIT sans fournisseur
                                $sql = $pdo->query('SELECT IdIngred, NomIngred, StockReel, Unite, PrixUHT_Moyen, Frais, DateArchiv FROM INGREDIENT');
                                while ($row = $sql->fetch()) {

                                    echo "<tr id=" . $row["IdIngred"] . " class='table-row'><td>"
                                    . "<p>" . $row['NomIngred'] . "</p></td><td>"
                                    . "<p>" . $row['StockReel'] . "</p></td><td>"
                                    . "<p>" . $row['Unite'] . "</p></td><td>"
                                    . "<p>" . $row['PrixUHT_Moyen'] . "</p></td><td>"
                                    . "<p>" . $row['Frais'] . "</p></td></tr>";

                                    $quantite = $row['StockReel'];

                                    if ($quantite == 0) {
                                        $sql_2 = $pdo->query("UPDATE `ingredient` SET `StockReel` = '5' WHERE `ingredient`.`IdIngred` = " . $row["IdIngred"] . "");
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="recettes">

                    <?php require_once ('../../controller/connexion.php'); ?>

                    <br>

                    <div class="row">
                        <div class="col-md-8">
                            <table id="table-recettes" class="table">
                                <colgroup span="7"></colgroup>
                                <tr class="table-header">
                                    <th>Photo</th>
                                    <th>Nom</th>
                                    <th>Produits et quantités</th>
                                    <th>Supplément(s)</th>
                                    <th>Taille</th>
                                    <th>Prix HT</th>
                                    <th>Action(s)</th>
                                </tr>
                                <?php
                                // On récupère tout le contenu de la table PRODUIT
                                $sql = $pdo->query('SELECT * FROM PRODUIT');
                                
                                while ($row = $sql->fetch()) {
                                    echo "<tr id=" . $row["IdProd"] . " class='table-row'><td>"
                                    . "<input id='image_rec' class='input' value='" . $row['Image'] . "'></td><td>"
                                    . "<input id='nom_rec' class='input' value='" . $row['NomProd'] . "'></td><td>"
                                    . "<input id='ingBase_1_rec' class='input' value='" . $row['IngBase1'] . "'><br>"
                                    . "<input id='ingBase_2_rec' class='input' value='" . $row['IngBase2'] . "'><br>"
                                    . "<input id='ingBase_3_rec' class='input' value='" . $row['IngBase3'] . "'><br>"
                                    . "<input id='ingBase_4_rec' class='input' value='" . $row['IngBase4'] . "'><br>"
                                    . "<input id='ingBase_5_rec' class='input' value='" . $row['IngBase5'] . "'><br>"
                                    . "<input id='ingBase_6_rec' class='input' value='" . $row['IngBase6'] . "'><br>"
                                    . "<input id='ingBase_7_rec' class='input' value='" . $row['IngBase7'] . "'><br>"
                                    . "<input id='ingBase_8_rec' class='input' value='" . $row['IngBase8'] . "'><br>"
                                    . "<input id='ingBase_9_rec' class='input' value='" . $row['IngBase9'] . "'><br>"
                                    . "<input id='ingBase_10_rec' class='input' value='" . $row['IngBase10'] . "'><br>" . "</td><td>"
                                    . "<input id='ingOpt_1_rec' class='input' value='" . $row['IngOpt1'] . "'><br>"
                                    . "<input id='ingOpt_2_rec' class='input' value='" . $row['IngOpt2'] . "'><br>"
                                    . "<input id='ingOpt_3_rec' class='input' value='" . $row['IngOpt3'] . "'><br>"
                                    . "<input id='ingOpt_4_rec' class='input' value='" . $row['IngOpt4'] . "'><br>"
                                    . "<input id='ingOpt_5_rec' class='input' value='" . $row['IngOpt5'] . "'><br>"
                                    . "<input id='ingOpt_6_rec' class='input' value='" . $row['IngOpt6'] . "'><br>" . "</td><td>"
                                    . "<select id='taille_rec' name='thelist' value='" . $row['Taille'] . "'>
                                                        <option " . ($row['Taille'] == 'S' ? 'selected' : '') . ">S</option>
                                                        <option " . ($row['Taille'] == 'M' ? 'selected' : '') . ">M</option>
                                                        <option " . ($row['Taille'] == 'L' ? 'selected' : '') . ">L</option>
                                                        <option " . ($row['Taille'] == 'XL' ? 'selected' : '') . ">XL</option></td><td>"
                                    . "<input id='prix_rec' class='input' value='" . $row['PrixUHT'] . "'></td><td>"
                                    . '<input type="submit" class="button btn-modif-recette" value="Modifier">'
                                    . "<br><br>" . '<input type="submit" class="button btn-sup-recette" value="Supprimer">'
                                    . "</td></tr>";
                                }
                                ?>
                            </table>

                            <br><h3>Créer une nouvelle recette :</h3><br>
                            <p>Pour créer sa propre recette, appuyez sur ce bouton :</p><br>
                            <input type="submit" class="button btn-ajout-recette" value="Ajouter"><br>
                            <br><p>Une nouvelle ligne est apparue dans le tableau ! Vous pouvez la modifier grâce au bouton "Modifier" présent dans celle-ci.</p>
                        </div>
                    </div>
                </div>

                <script src="../Js/Gerant/Recette.js"></script>

                <div class="tab-content" id="ingredients">

                    <?php require_once ('../../controller/connexion.php'); ?>

                    <br>

                    <div class="row">
                        <div class="col-md-8">
                            <table id="table-ingredients" class="table">
                                <colgroup span="7"></colgroup>
                                <tr class="table-header">
                                    <th>Ingrédient</th>
                                    <th>Quantité</th>
                                    <th>Unité</th>
                                    <th>Prix HT</th>
                                    <th>Fournisseur</th>
                                    <th>Frais</th>
                                    <th>Action(s)</th>
                                </tr>
                                <?php
                                // On récupère tout le contenu de la table PRODUIT avec fournisseur
                                //$sql = $pdo->query('SELECT * FROM ingredient JOIN fourn_ingr ON ingredient.IdIngred = fourn_ingr.IdIngred');
                                while ($row = $sql->fetch()) {
                                    echo "<tr id=" . $row["IdIngred"] . " class='table-row'><td>"
                                    . "<input id='idVrai_ing' class='input' value='" . $row['NomIngred'] . "'></td><td>"
                                    . "<input id='stock_ing' class='input' value='" . $row['StockReel'] . "'></td><td>"
                                    . "<input id='unite_ing' class='input' value='" . $row['Unite'] . "'></td><td>"
                                    . "<input id='prix_ing' class='input' value='" . $row['PrixUHT_Moyen'] . "'></td><td>"
                                    . "<input id='four_ing' class='input' value='" . $row['NomFourn'] . "'></td><td>"
                                    . "<input id='frais_ing' class='input' value='" . $row['Frais'] . "'></td><td>"
                                    . '<input type="submit" name="mod_ingr" class="button btn-modif-ingredient" value="Modifier">'
                                    . "<br><br>" . '<input type="submit" name="sup_ingr" class="button btn-sup-ingredient" value="Supprimer">'
                                    . "</td></tr>";
                                }

                                // On récupère tout le contenu de la table PRODUIT sans fournisseur
                                $sql = $pdo->query('SELECT IdIngred, NomIngred, StockReel, Unite, PrixUHT_Moyen, Frais, DateArchiv FROM INGREDIENT');
                                while ($row = $sql->fetch()) {
                                    echo "<tr id=" . $row["IdIngred"]. " class='table-row'><td>"
                                    . "<input id='idVrai_ing' class='input' value='" . $row['NomIngred']. "'></td><td>"
                                    . "<input id='stock_ing' class='input' value='" . $row['StockReel']. "'></td><td>"
                                    . "<input id='unite_ing' class='input' value='" . $row['Unite']. "'></td><td>"
                                    . "<input id='prix_ing' class='input' value='" . $row['PrixUHT_Moyen']. "'></td><td>"
                                    . "<input id='nom_ing' class='input' value='" . $row['DateArchiv']. "'></td><td>"
                                    . "<input id='frais_ing' class='input' value='" . $row['Frais']. "'></td><td>"
                                    . '<input type="submit" class="button btn-modif-ingredient" value="Modifier">'
                                    . "<br><br>" . '<input type="submit" class="button btn-sup-ingredient" value="Supprimer">'
                                    . "</td></tr>";
                                }
                                ?>

                            </table>

                            <br><h3>Créer un nouvel ingrédient :</h3><br>
                            <p>Pour créer son propre ingrédient, appuyez sur ce bouton :</p><br>
                            <input type="submit" class="button btn-ajout-ingredient" value="Ajouter"><br>
                            <br><p>Une nouvelle ligne est apparue dans le tableau ! Vous pouvez la modifier grâce au bouton "Modifier" présent dans celle-ci.</p>
                        </div>
                    </div>
                </div>

                <script src="../Js/Gerant/Ingredient.js"></script>

                <div class="tab-content" id="fournisseur">

                    <?php require_once ('../../controller/connexion.php'); ?>

                    <br>

                    <div class="row">
                        <div class="col-md-8">
                            <table id="table-fournisseur" class="table">
                                <colgroup span="7"></colgroup>
                                <tr class="table-header">
                                    <th>Nom</th>
                                    <th>Adresse</th>
                                    <th>Code postal</th>
                                    <th>Ville</th>
                                    <th>Téléphone</th>
                                    <th>Par Def</th>
                                    <th>Action(s)</th>
                                </tr>
                                <?php
                                // On récupère tout le contenu de la table PRODUIT
                                $sql = $pdo->query('SELECT * FROM FOURNISSEUR');
                                while ($row = $sql->fetch()) {
                                    echo "<tr id='" . $row["NomFourn"]."' class='table-row'><td>"
                                    . "<input id='idVrai_four' class='input' value='" . $row['NomFourn'] . "'></td><td>"
                                    . "<input id='adr_four' class='input' value='" . $row['Adresse'] . "'></td><td>"
                                    . "<input id='code_four' class='input' value='" . $row['CodePostal'] . "'></td><td>"
                                    . "<input id='ville_four' class='input' value='" . $row['Ville'] . "'></td><td>"
                                    . "<input id='tel_four' class='input' value='" . $row['Tel'] . "'></td><td>"
                                    . "<input id='def_four' class='input' value='" . $row['ParDefaut'] . "'></td><td>"
                                    . '<input type="submit" class="button btn-modif-four" value="Modifier">'
                                    . "<br><br>" . '<input type="submit" class="button btn-sup-four" value="Supprimer">'
                                    . "</td></tr>";
                                }
                                ?>
                            </table>

                            <br><h3>Créer un nouveau fournisseur :</h3><br>
                            <p>Pour créer son propre fournisseur, appuyez sur ce bouton :</p><br>
                            <input type="submit" class="button btn-ajout-four" value="Ajouter"><br>
                            <br><p>Une nouvelle ligne est apparue dans le tableau ! Vous pouvez la modifier grâce au bouton "Modifier" présent dans celle-ci.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../Js/Gerant/Fournisseur.js"></script>
        <script src="../Js/Gerant/Onglet.js"></script>

    </main>

    <!-- Footer -->
    <div class="footer-basic">
        <footer>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="../../Public/html/accueil.php">Accueil</a></li>
                <li class="list-inline-item"><a href="../../Public/html/nosProduits.php">Nos produits</a></li>
                <li class="list-inline-item"><a href="../../Public/html/aPropos.php">À propos</a></li>
                <li class="list-inline-item"><a href="mentionsLegales">Mentions légales</a></li>
            </ul>
            <p class="copyright">Demeter Tacos © 2021</p>
        </footer>
    </div>
</body>
</html>