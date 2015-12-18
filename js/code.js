$(document).ready(function() {

    $('#login').keyup(function() {
        var input = $('#login').val();
        $.post('scripts/testUser.php', {login: input}, function(rep) {
            if (rep === '1') {
                alert('login existant!');
            }
        });
    });

    $('#carte').height(($(window).height() - 150));

    $(window).resize(function() {
        $('#carte').height(($(window).height() - 150));
    });

    $('#profil').height(($(window).height() - 170)).width(($(window).width() * 0.6));
    $('#chartContainer').height(($('#profil').height() - 20));
    $('#classement').height(($(window).height() - 170)).width(($(window).width() * 0.39));

    $(window).resize(function() {
        $('#profil').height(($(window).height() - 170)).width(($(window).width() * 0.6));
        $('#chartContainer').height(($('#profil').height() - 20));
        $('#classement').height(($(window).height() - 170)).width(($(window).width() * 0.39));
    });

    $(".tab1").hide();
    $(".tab2").hide();

    $('.formulaire_verif').hide();


    $("button.btn-check").click(function() {
        $checkpt = ($(this).attr('class')).substring(11, 16);
        $Id = ($(this).attr('id')).substring(4, 7);
        $statut = $(this).attr("statut");
        if ($statut === "1" || $statut === "3") {
            $('#cpClassement').hide();
            $('#commandesGlobales').hide();
            $('button.btn-check').hide();
            $('.formulaire_verif').show(50);
            $('button#oui').click(function() {
                $.ajax({
                    url: 'index.php',
                    type: 'GET',
                    data: "todo=requete_uncheck&idCheckpoint=" + $checkpt + "&id=" + $Id,
                    dataType: 'html',
                    success: function(code_html, statut) {
                        $bool = true;
                        if ($statut === "1") {
                            $("button#btn_" + $Id).css('background-color', 'white').attr('statut', '0');
                        } else {
                            $("button#btn_" + $Id).css('background-color', '#d5d5d5').attr('statut', '2');
                        }
                    },
                    error: function(resultat, statut, erreur) {
                        alert("le bouton " + $Id + " ne marche pas // resultat : " + resultat.status + resultat.responseText +
                                " / statut : " + statut + " / erreur : " + erreur);
                    }
                });
                $('#cpClassement').show(50);
                $('#commandesGlobales').show(50);
                $('.formulaire_verif').hide();
                $('button.btn-check').show(50);
            });
            $('button#non').click(function() {
                $('#cpClassement').show(50);
                $('#commandesGlobales').show(50);
                $('.formulaire_verif').hide();
                $('button.btn-check').show(50);
            });
        } else {

            $.ajax({
                url: 'index.php',
                type: 'GET',
                data: "todo=requete_check&idCheckpoint=" + $checkpt + "&id=" + $Id,
                dataType: 'html',
                success: function(code_html, statut) {
                    if ($statut === "0") {
                        $("button#btn_" + $Id).css('background-color', '#f5e79e').attr("statut", "1");
                    } else {
                        $("button#btn_" + $Id).css('background-color', '#f5e79e').attr("statut", "3");
                    }
                },
                error: function(resultat, statut, erreur) {
                    alert("le bouton " + $Id + " ne marche pas<br>resultat : " + resultat +
                            "<br>statut : " + statut + "<br>erreur : " + erreur);
                }
            });
        }
    });


    $("button.btn-annule-remarque").click(function() {
        $(this).hide();
        $id = $(this).attr('id');
        $.ajax({
            url: 'index.php',
            type: 'GET',
            data: "todo=requete_deleteRemarque&id=" + $id,
            dataType: 'html',
            success: function(code_html, statut) {
                $('div#' + $id).hide();
            },
            error: function(resultat, statut, erreur) {
                alert('la remarque n\'a pas pu être enlevée');
            }
        });
    });

    $("button.btn-annule-warning").click(function() {
        var confirmation = confirm("Voulez vous détruire le warning?");
        if (confirmation == true) {
            $(this).hide();
            $id = $(this).attr('id');
            $.ajax({
                url: 'index.php',
                type: 'GET',
                data: "todo=requete_deleteWarning&id=" + $id,
                dataType: 'html',
                success: function(code_html, statut) {
                    $('div#' + $id).hide();
                },
                error: function(resultat, statut, erreur) {
                    alert('la remarque n\'a pas pu être enlevée');
                }
            });
        }
    });
    
    $("#warningCheckboxButton").click(function(){
        if ($("#messageInput").attr("placeholder")=="warning"){
            $("#messageInput").attr("placeholder","remarque");
        } else {
            $("#messageInput").attr("placeholder","warning");
        }
    });

});