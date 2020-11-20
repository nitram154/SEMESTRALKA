<?php

require "DBStorage.php";
require "Atrakcie.php";
require "formular.php";

$storage = new DBStorage();

echo $_GET["id"];
$zaznam = $_GET["id"];
echo $zaznam;

//if (isset($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'])) {
//
//    $storage->Update($_POST['fname'], $_POST['lname'], $_POST['id']);
//}

//$Atrakcie = $storage->LoadOne($zaznam);
foreach ($storage->LoadOne($zaznam) as $Atrakcie) {
    echo $Atrakcie->getFname(), " ", $Atrakcie->getLname(), " ", $Atrakcie->getAtrakcie(), " ", $Atrakcie->getDatum(), " ", $Atrakcie->getCas(), " ", $Atrakcie->getTelCislo();

    formular($zaznam, $Atrakcie->getFname(), $Atrakcie->getLname(), $Atrakcie->getAtrakcie(), $Atrakcie->getDatum(), $Atrakcie->getCas(), $Atrakcie->getTelCislo());


}
?>