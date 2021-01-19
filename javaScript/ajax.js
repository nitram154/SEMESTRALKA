function odstranenieRezervacieAjax(idRezervacie) {
    var rezervacia = idRezervacie.getAttribute("data-zmazat");
    $.ajax({
        type: "POST",
        url: "../php/zmazanieAjax.php",
        data: {id: rezervacia},

        success: function (data) {
            $("#" + rezervacia + "").empty();
            alert("Odstránili ste rezerváciu");



        },
        error: function (data) {
            alert("chyba")
        }
    });
}



$(document).ready(function () {
    $("#submit").click(function () {

        var email = $("#email").val();
        var meno = $("#meno").val();
        var priezvisko = $("#priezvisko").val();
        var heslo = $("#heslo").val();


        var udajePost = 'email=' + email + '&meno=' + meno + '&priezvisko=' + priezvisko+ '&heslo=' + heslo;

        $.ajax({
            type: "POST",
            url: "../php/postRegistrationAjax.php",
            data: udajePost,

            success: function (result) {
                if (result.existuje === 'success'){
                    alert('Registrácia prebehla úspešne, môžte sa prihlásiť!');
                    $("#email").val("");
                    $("#meno").val("");
                    $("#priezvisko").val("");
                    $("#heslo").val("");
                }else if (result.existuje === 'error'){
                    alert('Užívateľ so zadaným emailom už existuje!');
                    $("#heslo").val("");
                }
            },

            error: function (result) {

            }
        });
        return false;
    });

});