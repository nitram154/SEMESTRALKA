<?php

class Atrakcie{
    private $fname;
    private $lname;
    private $atrakcie;
    private $Datum;
    private $id;

    /**
     * Atrakcie constructor.
     * @param $fname
     * @param $lname
     * @param $atrakcie
     * @param $Datum
     * @param $cas
     * @param $TelCislo
     */
    public function __construct($fname, $lname, $atrakcie, $Datum, $cas, $TelCislo,$id)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->atrakcie = $atrakcie;
        $this->Datum = $Datum;
        $this->cas = $cas;
        $this->TelCislo = $TelCislo;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return mixed
     */
    public function getAtrakcie()
    {
        return $this->atrakcie;
    }

    /**
     * @param mixed $atrakcie
     */
    public function setAtrakcie($atrakcie)
    {
        $this->atrakcie = $atrakcie;
    }

    /**
     * @return mixed
     */
    public function getDatum()
    {
        return $this->Datum;
    }

    /**
     * @param mixed $Datum
     */
    public function setDatum($Datum)
    {
        $this->Datum = $Datum;
    }

    /**
     * @return mixed
     */
    public function getCas()
    {
        return $this->cas;
    }

    /**
     * @param mixed $cas
     */
    public function setCas($cas)
    {
        $this->cas = $cas;
    }

    /**
     * @return mixed
     */
    public function getTelCislo()
    {
        return $this->TelCislo;
    }

    /**
     * @param mixed $TelCislo
     */
    public function setTelCislo($TelCislo)
    {
        $this->TelCislo = $TelCislo;
    }
    private $cas;
    private $TelCislo;
}
