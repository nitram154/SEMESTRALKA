<?php include_once "MenuBar.php";

require "../phpClass/DBStorage.php";
require "../phpClass/Atrakcie.php";
require "../php/formular.php";

if (isset($_SESSION['uzivatel'])) {

    $storage = new DBStorage();

    if (isset($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'])) {

        $storage->Save(new Atrakcie($_POST['id'], $_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'], $_SESSION['uzivatel']));
    }

?>


    <div class="informacieObalovac">

        <div class="informacieNadpisRezervacia">
            <span class="gold">VYTVORTE </span> SI SVOJU <br>

            <span class="gold"> REZERVÁCIU </span>
            <hr>
            <div class="uzivatelRezervacie">


                <div id="kontajnerNacitanie">
                    <br> <span class="vaseRezervacie">Vaše rezervácie...</span> <br><br>
                    <?php foreach ($storage->LoadAll($_SESSION['uzivatel']) as $Atrakcie) { ?>
                        <div class="kontajnerNacitanie" id="<?php echo $Atrakcie->getId() ?>">
                            <div class="nacitanie">
                                <div class="tlacidla">
                                    <?php echo $Atrakcie->getFname(), " ", $Atrakcie->getLname(), " ", $Atrakcie->getAtrakcie(), " ", $Atrakcie->getDatum(), " ", $Atrakcie->getCas(), " ", $Atrakcie->getTelCislo() ?>
                                </div>
                                <div class="prvavaTlacidla">
                                    <div class="tlacidla">
                                        <form method="post"
                                              action="../php/upravit.php?id=<?php echo $Atrakcie->getId() ?>">
                                            <button class="cssTlacidla cssUprav" value="Submit" type="submit">Upravit
                                            </button>
                                        </form>
                                    </div>
                                    <div class="tlacidla">
                                        <form method="post">
                                            <input type="hidden" name="id" value="<?php echo $Atrakcie->getId() ?>">
                                            <button class="cssTlacidla cssZmaz"
                                                    id="zmazat<?php echo $Atrakcie->getId() ?>"
                                                    onclick="odstranenieRezervacieAjax(zmazat<?php echo $Atrakcie->getId() ?>)"
                                                    data-zmazat="<?php echo $Atrakcie->getId() ?>" value="Submit"
                                                    type="button">Zmazat
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="formRezervacia">
            <?php formular(); ?>
        </div>
    </div>

<?php } else { ?>

    <div class="prihlasenieNeprihlasenyKontajner">
        <div class="prihlasenieNeprihlaseny">
            <p>
                Rezervácie môžte vykonávať až po <a href="prihlasenie.php" class="aZrus"> <span class="gold">  prihlásení </span>
                </a>!
            </p>
        </div>


    </div>


<?php }
?>
</body>
</html>
