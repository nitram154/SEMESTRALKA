<?php include_once "MenuBar.php";

session_start();

require "DBStorage.php";
require "Uzivatelia.php";

$storage = new DBStorage();

if (isset($_POST['email'], $_POST['heslo'])) {
    if ($storage->Prihlasenie($_POST['email'], $_POST['heslo'] ) == true){
        $_SESSION['uzivatel'] = $_POST['email'];

        header('Location: http://localhost:63342/SEMESTRALKA/Informacie.php');
    }
}


?>

<div class="prihlasenieKontajner">
    <div class="prihlasenieForm">

        <form method="post">
            <div class="prihlasenieBackround" id="">
                <label for="email"><b>Email</b></label><br>
                <div class="input-container">

                    <i class="fa fa-user icon"></i>
                    <input id="email" class="input-field" type="email" placeholder="Zadajte email..." name="email"
                           value=""
                           required><br>
                </div>

                <label for="heslo"><b>Heslo</b></label><br>
                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input id="heslo" class="input-field" type="password" placeholder="Zadajte heslo..." name="heslo"
                           value=""
                           required><br>
                </div>
        </form>
                <div class="input-container">
                    <button type="submit" value="Submit" class="btn">Prihlásiť</button>
                    <button onclick="window.location='registracia.php'" class="btn">Registrácia</button>
                </div>
            </div>

    </div>
    <div class="prihlasenieKontajnerObr">
        <img class="prihlasenieObr" src="./obrazky/prihlasenie.png" alt="sport">
    </div>


</body>
</html>