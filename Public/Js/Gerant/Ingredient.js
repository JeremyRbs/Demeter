// On charge la page
$(function () {

    $('.btn-ajout-ingredient').click(function () {

        $.ajax({

            url: '../../Model/Ingredient/ajouterIngredient.php',
            success: function () {
                $("#table-ingredients").load("http://localhost/DemeterRepository/Public/html/pageGerant.php#ingredients #table-ingredients >" );
            }

        });
        
        window.location.reload();

    });

    $('.btn-modif-ingredient').click(function () {

        let idAvant = $(this).parent().parent().attr('id');
        let id = $("#idVrai_ing").val();
        let stock = $("#stock_ing").val();
        let unite = $("#unite_ing").val();
        let prix = $("#prix_ing").val();
        let nom = $("#nom_ing").val();
        let frais = $("#frais_ing").val();
        console.log(prix);

        $.ajax({

            type: 'post', // toujours travailler en post quand on doit envoyer des données au serveur
            url: '../../Model/Ingredient/modifierIngredient.php',
            data: JSON.stringify({"IdIngred": idAvant, "NomIngred": id, "StockReel": stock, "Unite": unite, "PrixUHT_Moyen": prix, "DateArchiv": nom, "Frais": frais}),

            success: function (resultat) {
                resultat = JSON.parse(resultat);
                console.log(resultat);
                $("#idVrai_ing").val(resultat.NomIngred);
                $("#stock_ing").val(resultat.StockReel);
                $("#unite_ing").val(resultat.Unite);
                $("#prix_ing").val(resultat.PrixUHT_Moyen);
                $("#frais_ing").val(resultat.Frais);
            },
            error: function () {
                console.log("erreur");
            }
        });
        
        window.location.reload();

    });

    $('.btn-sup-ingredient').click(function () {
        let id = $(this).parent().parent().attr('id');
        console.log(id);
        $.ajax({

            type: 'post', // toujours travailler en post quand on doit envoyer des données au serveur
            url: '../../Model/Ingredient/supprimerIngredient.php',
            data: JSON.stringify({"IdIngred": id}),
            success: function () {
                $("#table-ingredients").load("http://localhost/DemeterRepository/Public/html/pageGerant.php#ingredients #table-ingredients >" );
            }

        });
        
        window.location.reload();

    })

});