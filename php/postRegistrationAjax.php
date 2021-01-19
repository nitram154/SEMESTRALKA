<?php

header('Content-type: application/json');

require "../phpClass/Uzivatelia.php";
require "../phpClass/DBStorage.php";

$storage = new DBStorage();

$email = $_POST['email'];
$meno = $_POST['meno'];
$priezvisko = $_POST['priezvisko'];
$heslo = $_POST['heslo'];




if ($storage->kontrolaUzivatel($_POST['email'])==true){
    $response_array['existuje'] = 'error';
}else {
    $storage->SaveUzivatel(new Uzivatelia($_POST['email'], $_POST['meno'], $_POST['priezvisko'], $storage->saltedHash($_POST['email'], $_POST['heslo'])));
    $response_array['existuje'] = 'success';
}

echo json_encode($response_array);

