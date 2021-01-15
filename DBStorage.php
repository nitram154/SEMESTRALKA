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
        $statement = $this->pdo->prepare("INSERT INTO atrakcie (fname, lname, atrakcie, Datum, cas, TelCislo, emailUserFK) value (?,?,?,?,?,?,?)");
        $statement->execute([$param->getFname(), $param->getLname(), $param->getAtrakcie(), $param->getDatum(), $param->getCas(), $param->getTelCislo(), $param->getEmailUserFK()]);

        //header('Location: http://localhost:63342/SEMESTRALKA/Rezervacia.php');
    }

    public function SaveMsg(Spravy $param)
    {
        $statement = $this->pdo->prepare("INSERT INTO spravy (meno, email, text) value (?,?,?)");
        $statement->execute([$param->getMeno(), $param->getEmail(), $param->getText()]);

        //header('Location: http://localhost:63342/SEMESTRALKA/Rezervacia.php');
    }

    public function LoadAll($param)
    {
        $result = [];


        $r = $this->pdo->query("SELECT * FROM atrakcie WHERE emailUserFK = '$param'");

        foreach ($r as $item) {
            $result[] = new Atrakcie($item['id'],$item['fname'], $item['lname'], $item['atrakcie'], $item['Datum'], $item['cas'], $item['TelCislo'],$item['emailUserFK']);

        }

        return $result;


    }

    public function Remove($param)
    {

        $prem = $this->pdo->prepare("DELETE FROM atrakcie WHERE id=$param");

        $prem->execute();

    }

    public function Update($id,$name, $lname, $atrakcie, $datum, $cas, $tel)
    {

        $this->pdo->query("UPDATE atrakcie SET fname='$name', lname='$lname', atrakcie='$atrakcie', Datum='$datum', cas='$cas', TelCislo='$tel' WHERE id=$id");

        header('Location: http://localhost:63342/SEMESTRALKA/Rezervacia.php');

    }

    public function LoadOne($id)
    {
        $result = [];
        $r = $this->pdo->query("SELECT * FROM atrakcie WHERE id=$id");
        foreach ($r as $item) {
            $result[] = new Atrakcie($item['id'],$item['fname'], $item['lname'], $item['atrakcie'], $item['Datum'], $item['cas'], $item['TelCislo'], $item['emailUserFK']);
        }
        return $result;
    }

    public function SaveUzivatel(Uzivatelia $param,$email)
    {
        $uzivatel = $this->pdo->query("SELECT email FROM uzivatalia WHERE email=$email");
        //$uzivatel->execute(array(':email' => $email));

        //$uzivatelPom = $uzivatel ->fetchAll();

        if (empty($uzivatel)){
            $statement = $this->pdo->prepare("INSERT INTO uzivatelia (email, meno,priezvisko,heslo) value (?,?,?,?)");
            $statement->execute([$param->getEmail(), $param->getMeno(), $param->getPriezvisko(),$param->getHeslo()]);

        }else {
            return false;
        }

    }

    public function saltedHash($email,$heslo){
        $upravenieHash = $email."gumene cukriky su super".$heslo;
        $hash = sha1($upravenieHash);
        return $hash;
    }

    public function Prihlasenie($email,$heslo){

        $uzivatel = $this->pdo->prepare ("SELECT count(heslo) as checkUser FROM uzivatelia WHERE heslo= :hash");
        $uzivatel ->execute(array(':hash'=>$this->saltedHash($email,$heslo)));

        $uzivatelFetch = $uzivatel->fetch(PDO::FETCH_ASSOC);
        if ($uzivatelFetch['checkUser'] == 1){
            return true;
        }
        return false;
    }


}