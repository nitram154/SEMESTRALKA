<?php include_once "MenuBar.php" ?>

<?php
require "DBStorage.php";
require "Spravy.php";


$storage = new DBStorage();


if (isset($_POST['meno'], $_POST['email'], $_POST['text'])) {

    $storage->SaveMsg(new Spravy($_GET['id'], $_POST['meno'], $_POST['email'], $_POST['text']));

    echo '<script type="text/javascript">';
    echo 'window.location.href = "Kontakt.php";';
    echo 'alert("Sprava bola odoslaná!");';
    echo '</script>';
}


?>

<div class="obalovac">
    <div class="kontakty ">
        <h2 class="kontaktyNadpis">Športové centrum </h2> <br> <br>
        Adresa: Senická 626, Liptovský Mikuláš <br>
        Email: sport.centrum@email.sk <br>
        Mobil: +421907261622
    </div>

    <div class="kontaktyKontainer">
        <h3>Napíšte nám ...</h3>
        <form method="post">
            <label for="meno">Vaše meno</label>
            <input class="kontaktTextLabel" id="meno" type="text" placeholder="Meno.." value="" name="meno">
            <label for="email">Váš email</label>
            <input class="kontaktTextLabel" id="email" name="email" type="email" placeholder="Email.." value="">
            <label for="text" >Správa</label>
            <input class="kontaktTextLabel" id="text" name="text" type="text" placeholder="Tu môžte napísať odkaz .." value="">
            <button class="btnOdoslat" type="submit" value="Submit"> Odoslať</button>
        </form>
    </div>
</div>

<div class="hodiny_border">
    <table class="kontaktHodiny">
        <tr>
            <th colspan="2">Otváracie hodiny</th>
        </tr>
        <tr>
            <td>Pondelok</td>
            <td>Zatvorené</td>
        </tr>
        <tr>
            <td>Utorok</td>
            <td>8:00 - 22:00</td>
        </tr>
        <tr>
            <td>Streda</td>
            <td>8:00 - 22:00</td>
        </tr>
        <tr>
            <td>Štvrtok</td>
            <td>8:00 - 22:00</td>
        </tr>
        <tr>
            <td>Piatok</td>
            <td>8:00 - 22:00</td>
        </tr>
        <tr>
            <td>Sobota</td>
            <td>8:00 - 22:00</td>
        </tr>
        <tr>
            <td>Nedeľa</td>
            <td>8:00 - 22:00</td>
        </tr>
    </table>
</div>
</body>
</html>