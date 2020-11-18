<!DOCTYPE html>

<?php
    require "DBStorage.php";
    require "Atrakcie.php";

    $storage = new DBStorage();



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Potvrdenie</title>
    <link href="Potvrdenie.css" rel="stylesheet">
</head>
<body>

        <div class="kontajnerPotvrdenie">
            <div class="potvrdenieObjednavky">
                <h1 class="objednavkaNadpis">Potvrdenie rezervácie</h1>
            <p>
                <?php $storage->LoadAll() ?>
            </p>

               <a href="Informacie.html" class="potvrdit">Potvrdiť</a>
                <a class="potvrdit">Upraviť</a>
                <a class="potvrdit">Zrušiť</a>
            </div>
        </div>




</body>

</html>