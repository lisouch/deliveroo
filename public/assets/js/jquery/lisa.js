$(document).ready(function () {

    // Surrelevation à la souris

    // $("mealDescription").click(function () {


    // }
    // on click :
    // p
    // {
    //     box-shadow: 6px 6px 6px black inset;
    // }

    // Clique sur où le récupérer

    $("#clickOnAdress").hide();

    $("#where").click(function () {
        $("#price").hide();
        $("#quantity").hide();
        $("#button").hide();
        $("#clickOnAdress").toggle();
    });

    $("#returnButton").click(function () {
        $("#price").toggle();
        $("#quantity").toggle();
        $("#button").toggle();
        $("#clickOnAdress").hide();
    });

    // Confirmation supression
    $(function () {
        $('a[data-confirm]').click(function (ev) {
            var href = $(this).attr('href');

            if (!$('#dataConfirmModal').length) {
                $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Merci de confirmer</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-danger" id="dataConfirmOK">Oui</a></div></div></div></div>');
            }
            $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
            $('#dataConfirmOK').attr('href', href);
            $('#dataConfirmModal').modal({ show: true });

            return false;
        });
    });





});