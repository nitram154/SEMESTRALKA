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

    $storage = new DBStorage();

    if (isset($_POST['fname'] ,$_POST['lname'],$_POST['atrakcie'],$_POST['Datum'],$_POST['cas'],$_POST['TelCislo'])){
        $storage->Save(new Atrakcie($_POST['fname'] ,$_POST['lname'],$_POST['atrakcie'],$_POST['Datum'],$_POST['cas'],$_POST['TelCislo']));
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
            <a href="kontakt.html">kontakt</a>
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
<div class="kontajnerObsah">
    <div class="kontajnerRezerve">

        <form class="rezerve" method="post" >

            <label for="fname">Meno</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Priezvisko</label><br>
            <input type="text" id="lname" name="lname"><br><br>

            <label for="atrakcie">Vyberte atrakciu: </label><br>
            <select name="atrakcie" id="atrakcie">
                <optgroup label="Vnútorné">
                    <option value="Volejbal">Volejbal</option>
                    <option value="Bedminton">Bedminton</option>
                    <option value="TenisDnu">Tenis</option>
                    <option value="Squash">Squash</option>
                    <option value="Lezenie">Lezecká stena</option>
                </optgroup>
                <optgroup label="Vonkajšie">
                    <option value="TenisVon">Tenis</option>
                    <option value="Beach">Beach ihrisko</option>
                </optgroup>
            </select>
            <br><br>
            <label for="Datum">Vyberte dátum:</label><br>
            <input type="date" id="Datum" name="Datum"><br><br>
            <label for="cas">Vyberte čas:</label><br>
            <input type="time" id="cas" name="cas"><br><br>

            <label for="TelCislo">Telefónne číslo:</label><br>
            <input type="tel" id="TelCislo" name="TelCislo" placeholder="09YYXXXXXX" pattern="09[0-9]{8}"><br><br>
            <input type="submit" value="Rezervovať" class="odoslanie">

        </form>

    </div>
</div>




</body>
</html>