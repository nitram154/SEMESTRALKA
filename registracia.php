<?php include_once "MenuBar.php";

require "DBStorage.php";
require "Uzivatelia.php";


$storage = new DBStorage();


if (isset($_POST['email'], $_POST['meno'], $_POST['priezvisko'], $_POST['heslo'])) {

    $storage->SaveUzivatel(new Uzivatelia($_POST['email'], $_POST['meno'], $_POST['priezvisko'], $storage->saltedHash($_POST['email'], $_POST['heslo'])), $_POST['email']);
//    if ($storage->SaveUzivatel(new Uzivatelia($_POST['email'], $_POST['meno'], $_POST['priezvisko'], $storage->saltedHash($_POST['email'], $_POST['heslo'])), $_POST['email']) == true) {
//        echo '<script type="text/javascript">';
//        echo 'window.location.href = "Prihlasenie.php";';
//        echo 'alert("Užívateľ so zadaným emailom už existuje!");';
//        echo '</script>';
//    }

}

?>

<div class="prihlasenieKontajner">
    <div class="prihlasenieForm">

        <form method="post">
            <div class="prihlasenieBackround" id="">
                <label for="email"><b>Email</b></label><br>
                <div class="input-container">


                    <input id="email" class="input-field" type="email" placeholder="Zadajte email..." name="email"
                           value=""
                           required><br>
                </div>

                <label for="meno"><b>Meno</b></label><br>
                <div class="input-container">

                    <input id="meno" class="input-field" type="text" placeholder="Zadajte meno..." name="meno"
                           value=""
                           required><br>
                </div>
                <label for="priezvisko"><b>Priezvisko</b></label><br>
                <div class="input-container">

                    <input id="priezvisko" class="input-field" type="text" placeholder="Zadajte priezvisko..."
                           name="priezvisko"
                           value=""
                           required><br>
                </div>
                <label for="heslo"><b>Heslo</b></label><br>
                <div class="input-container">

                    <input id="heslo" class="input-field" type="password" placeholder="Zadajte heslo..." name="heslo"
                           value=""
                           required><br>
                </div>

                <div class="input-container">
                    <button type="submit" value="Submit" class="btn">Registrovať</button>
                    <button onclick="window.location='prihlasenie.php'" class="btn">Zrušiť</button>
                </div>
            </div>
        </form>
    </div>
    <div class="prihlasenieKontajnerObr">
        <img class="prihlasenieObr" src="./obrazky/prihlasenie.png" alt="sport">
    </div>
</div>

</body>
</html>
