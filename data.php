<?php
class Knihy {
    private $id;
    private $nazev;
    private $autor;
    private $zanr;
    private $popis;

    function __construct($argId, $argNazev, $argAutor, $argZanr, $argPopis)
    {
        $this->id = $argId;
        $this->nazev = $argNazev;
        $this->autor = $argAutor;
        $this->zanr = $argZanr;
        $this->popis = $argPopis;
    }

    function getNazev() {
        return $this->nazev;
    }
    function getAutor() {
        return $this->autor;
    }
    function getZanr() {
        return $this->zanr;
    }

}//endKnihy

$poleStranek = array (
    "domu" => [
        "id" => "domu",
        "titulek" => "Domů"
    ],
    "databaze" => [
        "id" => "databaze",
        "titulek" => "Vyhledávání"
    ],
      "admin" => [
        "id" => "admin",
        "titulek" => "Admin"
    ]
);// endMenu

$poleAdmin = array (
    "vlozit" => [
        "id" => "vlozit",
        "titulek" => "Vložit"
    ],
    "upravit" => [
        "id" => "upravit",
        "titulek" => "Upravit",
    ],
    "smazat" => [
        "id" => "smazat",
        "titulek" => "Smazat"
    ]
); //endAdminMenu
