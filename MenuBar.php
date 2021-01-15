<?php

require "functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="Css.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<ul class="Menu">
    <li>
        <a href="Informacie.php">
            Informacie
        </a>
    </li>
    <li>
        <a href="Rezervacia.php">
            Rezervacie
        </a>
    </li>
    <li>
        <a href="Kontakt.php">
            Kontakt
        </a>
    </li>
    <li>
        <a>
            Atrakcie
        </a>
        <ul>
            <li>
                <a href="Vnutorne.php">
                    Vnútorné
                </a>
            </li>
            <li>
                <a href="Vonkajsie.php">
                    Vonkajšie
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="odhlasenie.php">
            <i class = "fa fa-power-off"></i>
        </a>
    </li>
</ul>
<div class="mobile-container">

    <!-- Top Navigation Menu -->
    <div class="topnav">
        <a class="active"></a>
        <div id="myLinks">
            <a href="Informacie.php">Informácie</a>
            <a href="Rezervacia.php">Rezervácie</a>
            <a href="Kontakt.php">Kontakt</a>
            <a href="Vnutorne.php">Vnútorné atrakcie</a>
            <a href="Vonkajsie.php">Vonkajšie atrakcie</a>
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(function() {
        $(".submit-btn").click(function() {
            $(this).val('Odhlasit');
        });
    });
</script>

