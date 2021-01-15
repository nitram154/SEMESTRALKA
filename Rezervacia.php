<?php include_once "MenuBar.php" ?>

<?php
require "DBStorage.php";
require "Atrakcie.php";
require "formular.php";
//session_start();
if (isset($_SESSION['uzivatel'])) {

    $storage = new DBStorage();


    if (isset($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'])) {

        $storage->Save(new Atrakcie($_POST['id'],$_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'], $_SESSION['uzivatel']));
    }

    if (isset($_POST['id'])) {
        $storage->Remove($_POST['id']);
    }

    formular(); ?>

    <?php foreach ($storage->LoadAll($_SESSION['uzivatel']) as $Atrakcie) { ?>
        <div class="kontajnerNacitanie">
            <div class="nacitanie">
                <div class="tlacidla">
                    <?php echo $Atrakcie->getFname(), " ", $Atrakcie->getLname(), " ", $Atrakcie->getAtrakcie(), " ", $Atrakcie->getDatum(), " ", $Atrakcie->getCas(), " ", $Atrakcie->getTelCislo() ?>
                </div>
                <div class="prvavaTlacidla">
                    <div class="tlacidla">
                        <form method="post" action="upravit.php?id=<?php echo $Atrakcie->getId() ?>">
                            <button class="cssTlacidla cssUprav" value="Submit" type="submit">Upravit</button>
                        </form>
                    </div>
                    <div class="tlacidla">
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $Atrakcie->getId() ?>">
                            <button class="cssTlacidla cssZmaz" value="Submit" type="submit">Zmazat</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


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
