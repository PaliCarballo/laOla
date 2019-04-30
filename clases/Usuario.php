<?php


    class Usuario {

      protected $nombre;
      protected $email;
      private $pass;

    public function __construct($nombre,$email,$pass){
      $this->nombre=$nombre;
      $this->email=$email;
      $this->pass=$pass;

    }

    public function getNombre(){
      return $this->nombre;
    }
    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setEmail($email){
      $this->email = $email;
    }
    public function getPass(){
      return $this->pass;
    }
    public function setPass($pass){
      $this->pass = $pass;
    }

  }




 ?>
