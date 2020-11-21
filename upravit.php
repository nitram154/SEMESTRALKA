<body>
<ul class="Menu">
    <li >
        <a href="Informacie.html" >
            Informacie
        </a>
    </li>
    <li>
        <a href="Rezervacia.php" >
            Rezervacie
        </a>
    </li>
    <li>
        <a href="Kontakt.html" >
            Kontakt
        </a>
    </li>
    <li>
        <a>
            Atrakcie
        </a>
        <ul>
            <li>
                <a href="Vnutorne.html" >
                    Vnútorné
                </a>
            </li>
            <li>
                <a href="Vonkajsie.html" >
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
            <a href="Kontakt.html">Kontakt</a>
            <a href="Vnutorne.html">Vnútorné atrakcie</a>
            <a href="Vonkajsie.html">Vonkajšie atrakcie</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- End smartphone / tablet look -->
</div>


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