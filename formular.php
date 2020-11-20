<?php

function formular($id = 0, $fname = "", $lname = "", $atrakcie = "", $datum = "", $cas = "", $tel = "")
{ ?>
    <?php $storage = new DBStorage();
    if (isset($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'])) {

        $storage->Update($_POST['fname'], $_POST['lname'], $_POST['id']);
    } ?>
    <head>
        <meta charset="UTF-8">
        <title>Rezervacia</title>
        <link href="MenuBar.css" rel="stylesheet">
        <link href="Rezervacia.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <div class="kontajnerObsah">
        <div class="kontajnerRezerve">
            <form class="rezerve" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>"><br>
                <label for="fname">Meno</label><br>

                <input type="text" id="fname" name="fname" value="<?php echo $fname ?>"><br>


                <label for="lname">Priezvisko</label><br>
                <input type="text" id="lname" name="lname" value="<?php echo $lname ?>"><br><br>

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
                        <?php if ($atrakcie == "TenisVon") {
                            ?>
                            <option value="TenisVon" selected>Tenis</option> <?php
                        } else {
                            ?>
                            <option value="TenisVon">Tenis</option><?php
                        }


                        ?>
                        <option value="Beach">Beach ihrisko</option>
                    </optgroup>
                </select>
                <br><br>
                <label for="Datum">Vyberte dátum:</label><br>
                <input type="date" id="Datum" name="Datum" value="<?php echo $datum ?>"><br><br>
                <label for="cas">Vyberte čas:</label><br>
                <input type="time" id="cas" name="cas" value="<?php echo $cas ?>"><br><br>

                <label for="TelCislo">Telefónne číslo:</label><br>
                <input type="tel" id="TelCislo" name="TelCislo" placeholder="09YYXXXXXX" pattern="09[0-9]{8}"
                       value="<?php echo $tel ?>"><br><br>
                <input type="submit" value="Rezervovať" class="odoslanie">


            </form>
        </div>
    </div>
    <?php
}

?>
