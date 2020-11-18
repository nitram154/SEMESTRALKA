<?php

class DBStorage {

    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=rezervationdb","root","dtb456");
    }

    public function Save(Atrakcie $param){
        $statement = $this->pdo->prepare("INSERT INTO atrakcie (fname, lname, atrakcie, Datum, cas, TelCislo) value (?,?,?,?,?,?)");
        $statement->execute([$param->getFname(), $param->getLname(), $param->getAtrakcie(), $param->getDatum(), $param->getCas(), $param->getTelCislo()]);
    header('Location: http://localhost:63342/SEMESTRALKA/Potvrdenie.php');

    }

    public function LoadAll()
    {

        $suma = $this->pdo->prepare("SELECT fname as meno,lname as priezvisko, atrakcie as atrakcia, Datum as datum, cas as caas, TelCislo as telcislo FROM atrakcie WHERE id=(SELECT max(id) from atrakcie)");

        $suma->execute();
        $row = $suma->fetch(PDO::FETCH_ASSOC);
        echo  "Meno: ",$row['meno'],"<br>", "Priezvisko: ",$row['priezvisko'],"<br>", "Atrakcia: ",$row['atrakcia'],"<br>","Datum: ", $row['datum'],"<br>","Čas: ", $row['caas'],"<br>","Telefónne číslo: " , $row['telcislo'];


    }
}