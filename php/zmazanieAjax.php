<?php

session_start();

require "../phpClass/DBStorage.php";
require "../phpClass/Atrakcie.php";

$storage = new DBStorage();

$storage->Remove($_POST['id']);

