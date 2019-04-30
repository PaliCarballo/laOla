<?php


    class Usuario {

      protected $nombre;
      protected $mail;
      private $pass;

    public function construct($nombre,$mail,$pass){
      $this->nombre=$nombre;
      $this->mail=$mail;
      $this->pass=$pass;

    }

    public function setNombre($nombre){
      $this->nombre=$nombre;
    }

    public function setMail($mail){
      $this->mail=$mail;
    }

    public function setPass($pass){
      $this->pass=$pass;
    }

    public function getNombre($nombre){
      return $this->nombre;
    }

    public function getMail($mail){
      return $this->mail;
    }

    public function getPass($pass){
      return $this->pass;
    }
  }




 ?>
