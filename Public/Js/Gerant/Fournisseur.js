// On charge la page
$(function () {

    $('.btn-ajout-four').click(function () {

        $.ajax({

            url: '../../Model/Fournisseur/ajouterFournisseur.php',
            success: function () {
                $("#table-fournisseur").load("http://localhost/DemeterRepository/Public/html/pageGerant.php#fournisseur #table-fournisseur >" );
            }

        });
        
        window.location.reload();

    });

    $('.btn-modif-four').click(function () {

        let idAvant = $(this).parent().parent().attr('id');
        let id = $("#idVrai_four").val();
        let adr = $("#adr_four").val();
        let code = $("#code_four").val();
        let ville = $("#ville_four").val();
        let tel = $("#tel_four").val();
        let def = $("#def_four").val();

        $.ajax({

            type: 'post', // toujours travailler en post quand on doit envoyer des données au serveur
            url: '../../Model/Fournisseur/modifierFournisseur.php',
            data: JSON.stringify({"IdAvant": idAvant, "NomFourn": id, "Adresse": adr, "CodePostal": code, "Ville": ville, "Tel": tel, "ParDefaut": def}),
            success: function (resultat) {
                resultat = JSON.parse(resultat);
                console.log(resultat);
                $("#idVrai_four").val(resultat.NomFourn);
                $("#adr_four").val(resultat.Adresse);
                $("#code_four").val(resultat.CodePostal);
                $("#ville_four").val(resultat.Ville);
                $("#tel_four").val(resultat.Tel);
                $("#def_four").val(resultat.ParDefaut);
            },
            error: function () {
                console.log("erreur");
            }
        });
        
        window.location.reload();

    });

    $('.btn-sup-four').click(function () {

        let id = $(this).parent().parent().attr('id');
        $.ajax({

            type: 'post', // toujours travailler en post quand on doit envoyer des données au serveur
            url: '../../Model/Fournisseur/supprimerFournisseur.php',
            data: JSON.stringify({"NomFourn": id}),
            success: function () {
                $("#table-fournisseur").load("http://localhost/DemeterRepository/Public/html/pageGerant.php#fournisseur #table-fournisseur >" );
            }

        });
        
        window.location.reload();

    })

});