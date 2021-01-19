<?php include_once "MenuBar.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php

require "../phpClass/DBStorage.php";
require "../phpClass/Uzivatelia.php";


$storage = new DBStorage();

?>

<div class="prihlasenieKontajner">
    <div class="prihlasenieForm">

        <form method="post">
            <div class="prihlasenieBackround">
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
                    <button type="button" id="submit" value="Submit" class="btn">Registrovať</button>
                    <button onclick="window.location='prihlasenie.php'" class="btn">Zrušiť</button>
                    <button onclick="window.location='prihlasenie.php'" class="btn">Prihlásenie</button>
                </div>
            </div>
        </form>
    </div>
    <div class="prihlasenieKontajnerObr">
        <img class="prihlasenieObr" src="../obrazky/prihlasenie.png" alt="sport">
    </div>
</div>


<script>

</script>


</body>
</html>
