// On charge la page
$(function () {

    $('.btn-ajout-recette').click(function () {

        $.ajax({

            url: '../../Model/Recette/ajouterRecette.php',
            success: function () {
                $("#table-recettes").load("http://localhost/DemeterRepository/Public/html/pageGerant.php#recettes #table-recettes >" );
            }

        });
        
        window.location.reload();

    });

    $('.btn-modif-recette').click(function () {
        let idAvant = $(this).parent().parent().attr('id');
        let image = $("#image_rec").val();
        let nom = $("#nom_rec").val();
        let ingBase_1 = $("#ingBase_1_rec").val();
        let ingBase_2 = $("#ingBase_2_rec").val();
        let ingBase_3 = $("#ingBase_3_rec").val();
        let ingBase_4 = $("#ingBase_4_rec").val();
        let ingBase_5 = $("#ingBase_5_rec").val();
        let ingBase_6 = $("#ingBase_6_rec").val();
        let ingBase_7 = $("#ingBase_7_rec").val();
        let ingBase_8 = $("#ingBase_8_rec").val();
        let ingBase_9 = $("#ingBase_9_rec").val();
        let ingBase_10 = $("#ingBase_10_rec").val();
        let ingOpt_1 = $("#ingOpt_1_rec").val();
        let ingOpt_2 = $("#ingOpt_2_rec").val();
        let ingOpt_3 = $("#ingOpt_3_rec").val();
        let ingOpt_4 = $("#ingOpt_4_rec").val();
        let ingOpt_5 = $("#ingOpt_5_rec").val();
        let ingOpt_6 = $("#ingOpt_6_rec").val();
        let taille = $("#taille_rec").val();
        let prix = $("#prix_rec").val();

        $.ajax({

            type: 'post', // toujours travailler en post quand on doit envoyer des données au serveur
            url: '../../Model/Recette/modifierRecette.php',
            data: JSON.stringify({"IdProd": idAvant, "Image": image, "NomProd": nom,
                "IngBase1": ingBase_1, "IngBase2": ingBase_2, "IngBase3": ingBase_3,
                "IngBase4": ingBase_4, "IngBase5": ingBase_5, "IngBase6": ingBase_6,
                "IngBase7": ingBase_7, "IngBase8": ingBase_8, "IngBase9": ingBase_9,
                "IngBase10": ingBase_10, "IngOpt1": ingOpt_1, "IngOpt2": ingOpt_2,
                "IngOpt3": ingOpt_3, "IngOpt4": ingOpt_4, "IngOpt5": ingOpt_5,
                "IngOpt6": ingOpt_6, "Taille": taille, "PrixUHT": prix}),
            success: function (resultat) {
                resultat = JSON.parse(resultat);
                console.log(resultat);
                $("#image_rec").val(resultat.Image);
                $("#nom_rec").val(resultat.NomProd);
                $("#ingBase_1_rec").val(resultat.IngBase1);
                $("#ingBase_2_rec").val(resultat.IngBase2);
                $("#ingBase_3_rec").val(resultat.IngBase3);
                $("#ingBase_4_rec").val(resultat.IngBase4);
                $("#ingBase_5_rec").val(resultat.IngBase5);
                $("#ingBase_6_rec").val(resultat.IngBase6);
                $("#ingBase_7_rec").val(resultat.IngBase7);
                $("#ingBase_8_rec").val(resultat.IngBase8);
                $("#ingBase_9_rec").val(resultat.IngBase9);
                $("#ingBase_10_rec").val(resultat.IngBase10);
                $("#ingOpt_1_rec").val(resultat.IngOpt1);
                $("#ingOpt_2_rec").val(resultat.IngOpt2);
                $("#ingOpt_3_rec").val(resultat.IngOpt3);
                $("#ingOpt_4_rec").val(resultat.IngOpt4);
                $("#ingOpt_5_rec").val(resultat.IngOpt5);
                $("#ingOpt_6_rec").val(resultat.IngOpt6);
                $("#taille_rec").val(resultat.Taille);
                $("#prix_rec").val(resultat.PrixUHT);
            },
            error: function () {
                console.log("erreur");
            }
        });
        
        window.location.reload();

    });

    $('.btn-sup-recette').click(function () {
        let id = $(this).parent().parent().attr('id');
        $.ajax({

            type: 'post', // toujours travailler en post quand on doit envoyer des données au serveur
            url: '../../Model/Recette/supprimerRecette.php',
            data: JSON.stringify({"IdProd": id}),
            success: function () {
                $("#table-recettes").load("http://localhost/DemeterRepository/Public/html/pageGerant.php#recettes #table-recettes >" );
            }

        });
        
        window.location.reload();

    })

});