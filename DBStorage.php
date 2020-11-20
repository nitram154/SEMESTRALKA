<?php

class DBStorage {

    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=rezervationdb","root","dtb456");
    }

    public function Save(Atrakcie $param){
        $statement = $this->pdo->prepare("INSERT INTO atrakcie (fname, lname, atrakcie, Datum, cas, TelCislo) value (?,?,?,?,?,?)");
        $statement->execute([$param->getFname(), $param->getLname(), $param->getAtrakcie(), $param->getDatum(), $param->getCas(), $param->getTelCislo()]);

        header('Location: http://localhost:63342/SEMESTRALKA/Rezervacia.php');
    }

    public function LoadAll()
    {
        $result = [];


        $r = $this->pdo->query("SELECT * FROM atrakcie");

        foreach ($r as $item) {
            $result[] = new Atrakcie($item['fname'], $item['lname'], $item['atrakcie'], $item['Datum'], $item['cas'], $item['TelCislo'], $item['id']);

        }

        return $result;


    }

    public function Remove($param){

        $prem = $this->pdo->prepare("DELETE FROM atrakcie WHERE id=$param");

        $prem->execute();

    }

    public function Update($name,$lname, $id){
        echo $id;
        echo $name;
        $prem = $this->pdo->query("UPDATE atrakcie SET fname='$name', lname='$lname' WHERE id=$id");

        header('Location: http://localhost:63342/SEMESTRALKA/Rezervacia.php');

    }
//    public function LoadOne($param)
//    {
//        $suma = $this->pdo->prepare("SELECT fname as meno,lname as priezvisko, atrakcie as atrakcia, Datum as datum, cas as caas, TelCislo as telcislo FROM atrakcie WHERE id=$param");
//
//        $suma->execute();
//        //$row = $suma->fetch(PDO::FETCH_ASSOC);
//        //echo  "Meno: ",$row['meno'],"<br>", "Priezvisko: ",$row['priezvisko'],"<br>", "Atrakcia: ",$row['atrakcia'],"<br>","Datum: ", $row['datum'],"<br>","Čas: ", $row['caas'],"<br>","Telefónne číslo: " , $row['telcislo'];
//
//
//    }

    public function LoadOne($id)
    {
        $result = [];


        $r = $this->pdo->query("SELECT * FROM atrakcie WHERE id=$id");

        foreach ($r as $item) {
            $result[] = new Atrakcie($item['fname'], $item['lname'], $item['atrakcie'], $item['Datum'], $item['cas'], $item['TelCislo'], $item['id']);

        }

        return $result;


    }






}