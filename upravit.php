<?php include_once "MenuBar.php" ?>


<?php

require "DBStorage.php";
require "Atrakcie.php";
require "formular.php";

$storage = new DBStorage();


$zaznam = $_GET["id"];



foreach ($storage->LoadOne($zaznam) as $Atrakcie) {

    formular($zaznam, $Atrakcie->getFname(), $Atrakcie->getLname(), $Atrakcie->getAtrakcie(), $Atrakcie->getDatum(), $Atrakcie->getCas(), $Atrakcie->getTelCislo());


}
?>