<?php
session_start();

//header('Content-type: application/json');

require "../phpClass/Atrakcie.php";
require "../phpClass/DBStorage.php";

$storage = new DBStorage();

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$atrakcie = $_POST['atrakcie'];
$Datum = $_POST['Datum'];
$cas = $_POST['cas'];
$TelCislo = $_POST['TelCislo'];
$emailUserFK = $_SESSION['uzivatel'];

$storage->Save(new Atrakcie($id,$fname,$lname,$atrakcie,$Datum,$cas,$TelCislo,$emailUserFK));


//$response_array['nacitaj'] = $storage->LoadAll($emailUserFK);

//
//foreach ($storage->LoadAll($_SESSION['uzivatel']) as $Atrakcie){
//    echo $Atrakcie;
//}
//
//
//
////foreach ($response_array as $data){
////    echo $data;
////}

//echo json_encode($response_array['nacitaj']);

//var_dump(json_decode($_POST['nacitaj']));


