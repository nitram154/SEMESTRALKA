<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rezervacia</title>
    <link href="MenuBar.css" rel="stylesheet">
    <link href="Rezervacia.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<?php
require "DBStorage.php";
require "Atrakcie.php";
require "formular.php";

$storage = new DBStorage();


if (isset($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'])) {

    $storage->Save(new Atrakcie($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'], $_GET['id']));
}

if (isset($_POST['id'])) {
    $storage->Remove($_POST['id']);
}

?>
<ul class="Menu">
    <li>
        <a href="Informacie.html">
            Informacie
        </a>
    </li>
    <li>
        <a href="Rezervacia.php">
            Rezervacie
        </a>
    </li>
    <li>
        <a href="Kontakt.html">
            Kontakt
        </a>
    </li>
    <li>
        <a>
            Atrakcie
        </a>
        <ul>
            <li>
                <a href="Vnutorne.html">
                    Vnútorné
                </a>
            </li>
            <li>
                <a href="Vonkajsie.html">
                    Vonkajšie
                </a>
            </li>
        </ul>
    </li>
</ul>

<div class="mobile-container">

    <!-- Top Navigation Menu -->
    <div class="topnav">
        <a class="active"></a>
        <div id="myLinks">
            <a href="Informacie.html">Informácie</a>
            <a href="Rezervacia.php">Rezervácie</a>
            <a href="Kontakt.html">kontakt</a>
            <a href="Vnutorne.html">Vnútorné atrakcie</a>
            <a href="Vonkajsie.html">Vonkajšie atrakcie</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- End smartphone / tablet look -->
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>


<?php formular(); ?>

<?php foreach ($storage->LoadAll() as $Atrakcie) { ?>
    <div class="kontajnerNacitanie">
        <div class="nacitanie">
            <div class="tlacidla">
                <?php echo $Atrakcie->getFname(), " ", $Atrakcie->getLname(), " ", $Atrakcie->getAtrakcie(), " ", $Atrakcie->getDatum(), " ", $Atrakcie->getCas(), " ", $Atrakcie->getTelCislo() ?>
            </div>
            <div class="prvavaTlacidla">
                <div class="tlacidla">
                    <form method="post" action="upravit.php?id=<?php echo $Atrakcie->getId() ?>">
                        <button  class="cssTlacidla cssUprav" value="Submit" type="submit">Upravit</button>
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

</body>
</html>