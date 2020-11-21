<?php

class DBStorage
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=rezervationdb", "root", "dtb456");
    }

    public function Save(Atrakcie $param)
    {
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

    public function Remove($param)
    {

        $prem = $this->pdo->prepare("DELETE FROM atrakcie WHERE id=$param");

        $prem->execute();

    }

    public function Update($name, $lname, $atrakcie, $datum, $cas, $tel, $id)
    {

        $this->pdo->query("UPDATE atrakcie SET fname='$name', lname='$lname', atrakcie='$atrakcie', Datum='$datum', cas='$cas', TelCislo='$tel' WHERE id=$id");

        header('Location: http://localhost:63342/SEMESTRALKA/Rezervacia.php');

    }

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