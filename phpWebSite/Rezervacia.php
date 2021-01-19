<?php include_once "MenuBar.php" ?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<?php
require "../phpClass/DBStorage.php";
require "../phpClass/Atrakcie.php";
require "../php/formular.php";

if (isset($_SESSION['uzivatel'])) {

    $storage = new DBStorage();


    if (isset($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'])) {

        $storage->Save(new Atrakcie($_POST['id'],$_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'], $_SESSION['uzivatel']));
    }

//    if (isset($_POST['id'])) {
//        $storage->Remove($_POST['id']);
//    }

    formular(); ?>

    <div id="kontajnerNacitanie">
    <?php foreach ($storage->LoadAll($_SESSION['uzivatel']) as $Atrakcie) { ?>
        <div class="kontajnerNacitanie" id="<?php echo $Atrakcie->getId() ?>" >
            <div class="nacitanie">
                <div class="tlacidla">
                    <?php echo $Atrakcie->getFname(), " ", $Atrakcie->getLname(), " ", $Atrakcie->getAtrakcie(), " ", $Atrakcie->getDatum(), " ", $Atrakcie->getCas(), " ", $Atrakcie->getTelCislo() ?>
                </div>
                <div class="prvavaTlacidla">
                    <div class="tlacidla">
                        <form method="post" action="../php/upravit.php?id=<?php echo $Atrakcie->getId() ?>">
                            <button class="cssTlacidla cssUprav" value="Submit" type="submit">Upravit</button>
                        </form>
                    </div>
                    <div class="tlacidla">
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $Atrakcie->getId() ?>">
                            <button class="cssTlacidla cssZmaz" id="zmazat<?php echo $Atrakcie->getId() ?>" onclick="odstranenieRezervacieAjax(zmazat<?php echo $Atrakcie->getId() ?>)" data-zmazat="<?php echo $Atrakcie->getId() ?>" value="Submit" type="button">Zmazat</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>


<!---->
<!--    <script>-->
<!---->
<!--        $(document).ready(function () {-->
<!--            $("#submit").click(function () {-->
<!---->
<!--                var fname = $("#fname").val();-->
<!--                var lname = $("#lname").val();-->
<!--                var atrakcie = $("#atrakcie").val();-->
<!--                var Datum = $("#Datum").val();-->
<!--                var cas = $("#cas").val();-->
<!--                var TelCislo = $("#TelCislo").val();-->
<!---->
<!--                var dataString = 'fname=' + fname + '&lname=' + lname + '&atrakcie=' + atrakcie+ '&Datum=' + Datum+ '&cas=' + cas+ '&TelCislo=' + TelCislo;-->
<!---->
<!--                $.ajax({-->
<!--                    type: "POST",-->
<!--                    url: "postRezervationAjax.php",-->
<!--                    data: dataString,-->
<!--                    cache: true,-->
<!---->
<!--                    success: function (result) {-->
<!--                        alert("nieco")-->
<!--                        $("#kontajnerNacitanie").empty().append(result.nacitaj);-->
<!--                    },-->
<!---->
<!--                    error: function (data) {-->
<!---->
<!--                    }-->
<!--                });-->
<!--                return false;-->
<!--            });-->
<!---->
<!--        });-->
<!--    </script>-->




<?php } else { ?>

    <div class="prihlasenieNeprihlasenyKontajner">
        <div class="prihlasenieNeprihlaseny">
            <p>
            Rezervácie môžte vykonávať až po <a href="prihlasenie.php">prihlásení</a>!!!
            </p>
        </div>


    </div>


<?php }
?>
</body>
</html>
