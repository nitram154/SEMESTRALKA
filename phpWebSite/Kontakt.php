<?php include_once "MenuBar.php" ?>

<?php
require "../phpClass/DBStorage.php";
require "../phpClass/Spravy.php";


$storage = new DBStorage();


if (isset($_POST['meno'], $_POST['email'], $_POST['text'])) {

    $storage->SaveMsg(new Spravy($_GET['id'], $_POST['meno'], $_POST['email'], $_POST['text']));

    echo '<script type="text/javascript">';
    echo 'window.location.href = "Kontakt.php";';
    echo 'alert("Sprava bola odoslaná!");';
    echo '</script>';
}


?>

<div class="informacieObalovac">

    <div class="informacieNadpis">
        <span class="gold">SPOJME</span> SA <br>

        <div class="informaciePopis">
       <span class="gold">  Adresa:</span>  Senická 626, Liptovský Mikuláš<br><br>
        <span class="gold"> Email:</span>  sport.centrum@email.sk <br><br>
       <span class="gold">  Mobil:</span>  +421907261622 <br><br>
        </div>


    </div>


    <div>

        <img class="cvicenie"
             src="https://images.adsttc.com/media/images/5011/ef56/28ba/0d5f/4c00/054f/large_jpg/stringio.jpg?1414009105"
             alt="cvicenie">

    </div>


</div>


<div class="obalovac">
    <div class="kontakty ">
        <table>
            <tr>
                <th colspan="2" class="kontaktyNadpis"><span class="gold">Otváracie hodiny</span></th>
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

    <div class="kontaktyKontainer">
        <h3>Napíšte nám ...</h3>
        <form method="post">
            <label for="meno">Vaše meno</label>
            <input class="kontaktTextLabel" id="meno" type="text" placeholder="Meno.." value="" name="meno">
            <label for="email">Váš email</label>
            <input class="kontaktTextLabel" id="email" name="email" type="email" placeholder="Email.." value="">
            <label for="text">Správa</label>
            <input class="kontaktTextLabel" id="text" name="text" type="text" placeholder="Tu môžte napísať odkaz .."
                   value="">
            <button class="btnOdoslat" type="submit" value="Submit"> Odoslať</button>
        </form>

    </div>
</div>


</body>
</html>