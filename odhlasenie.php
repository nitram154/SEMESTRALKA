<?php
session_start();
session_destroy();
header('Location: http://localhost:63342/SEMESTRALKA/prihlasenie.php');

?>