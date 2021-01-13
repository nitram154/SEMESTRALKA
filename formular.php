<?php include_once "MenuBar.php";

function formular($id = 0, $fname = "", $lname = "", $atrakcie = "", $datum = "", $cas = "", $tel = "")
{ ?>
    <?php $storage = new DBStorage();
    if (isset($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'])) {

        $storage->Update($_POST['fname'], $_POST['lname'], $_POST['atrakcie'], $_POST['Datum'], $_POST['cas'], $_POST['TelCislo'], $_POST['id']);
    } ?>

    <div class="kontajnerObsah">
        <div class="kontajnerRezerve">
            <form class="rezerve" method="post">
                <input type="hidden" id="id" name="id" value="<?php echo $id ?>"><br>
                <label for="fname">Meno</label><br>

                <input type="text" id="fname" name="fname" value="<?php echo $fname ?>" required><br>


                <label for="lname">Priezvisko</label><br>
                <input type="text" id="lname" name="lname" value="<?php echo $lname ?>" required><br><br>

                <label for="atrakcie">Vyberte atrakciu: </label><br>
                <select name="atrakcie" id="atrakcie">
                    <optgroup label="Vnútorné">
                        <?php if ($atrakcie == "Volejbal") { ?>
                            <option value="Volejbal" selected>Volejbal</option> <?php } else { ?>
                            <option value="Volejbal">Volejbal</option><?php } ?>
                        <?php if ($atrakcie == "Bedminton") { ?>
                            <option value="Bedminton" selected>Bedminton</option> <?php } else { ?>
                            <option value="Bedminton">Bedminton</option><?php } ?>
                        <?php if ($atrakcie == "TenisDnu") { ?>
                            <option value="TenisDnu" selected>Tenis</option> <?php } else { ?>
                            <option value="TenisDnu">Tenis</option><?php } ?>
                        <?php if ($atrakcie == "Squash") { ?>
                            <option value="Squash" selected>Squash</option> <?php } else { ?>
                            <option value="Squash">Squash</option><?php } ?>
                        <?php if ($atrakcie == "Lezenie") { ?>
                            <option value="Lezenie" selected>Lezecká stena</option> <?php } else { ?>
                            <option value="Lezenie">Lezecká stena</option><?php } ?>
                    </optgroup>
                    <optgroup label="Vonkajšie">
                        <?php if ($atrakcie == "TenisVon") { ?>
                            <option value="TenisVon" selected>Tenis</option> <?php } else { ?>
                            <option value="TenisVon">Tenis</option><?php } ?>
                        <?php if ($atrakcie == "Beach") { ?>
                            <option value="Beach" selected>Beach ihrisko</option> <?php } else { ?>
                            <option value="Beach">Beach ihrisko</option><?php } ?>
                    </optgroup>
                </select>
                <br><br>
                <label for="Datum">Vyberte dátum:</label><br>
                <input type="date" id="Datum" name="Datum" min="<?php echo date("Y-m-d") ?>"
                       value="<?php echo $datum ?>" required><br><br>

                <label for="cas">Vyberte čas:</label><br>
                <input type="time" id="cas" name="cas" min="08:00" max="21:00" value="<?php echo $cas ?>" required><br><br>

                <label for="TelCislo">Telefónne číslo:</label><br>
                <input type="tel" id="TelCislo" name="TelCislo" placeholder="09YYXXXXXX" pattern="09[0-9]{8}"
                       value="<?php echo $tel ?>" required><br><br>
                <input type="submit" value="Rezervovať" class="odoslanie">


            </form>
        </div>
    </div>
    <?php
}

?>
