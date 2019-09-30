<?php namespace models;

class Persona {

    private $nombre;
    private $user;
    private $pass;

    public function __construct($usr, $pass) {

        $this->user = $usr;
        $this->pass = $pass;

    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($value) {
        $this->nombre = $value;
    }
    public function getUser() {
        return $this->user;
    }
    public function setUser($value) {
        $this->user = $value;
    }
    public function getPass() {
        return $this->pass;
    }
    public function setPass($value) {
        $this->pass = $value;
    }

}