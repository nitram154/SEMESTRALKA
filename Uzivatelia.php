<?php


class Uzivatelia
{
    private $email;
    private $meno;
    private $priezvisko;
    private $heslo;

    /**
     * Uzivatelia constructor.
     * @param $email
     * @param $meno
     * @param $priezvisko
     * @param $heslo
     */
    public function __construct($email, $meno, $priezvisko, $heslo)
    {
        $this->email = $email;
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;
        $this->heslo = $heslo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @param mixed $meno
     */
    public function setMeno($meno): void
    {
        $this->meno = $meno;
    }

    /**
     * @return mixed
     */
    public function getPriezvisko()
    {
        return $this->priezvisko;
    }

    /**
     * @param mixed $priezvisko
     */
    public function setPriezvisko($priezvisko): void
    {
        $this->priezvisko = $priezvisko;
    }

    /**
     * @return mixed
     */
    public function getHeslo()
    {
        return $this->heslo;
    }

    /**
     * @param mixed $heslo
     */
    public function setHeslo($heslo): void
    {
        $this->heslo = $heslo;
    }

}