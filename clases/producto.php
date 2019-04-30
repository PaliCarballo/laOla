<?php

  class Producto {

    protected $precio;
    protected $foto;
    protected $desc;


    public function construct($precio,$foto,$desc) {

      $this->precio=$precio;
      $this->foto=$foto;
      $this->desc=$desc;
    }

    public function setPrecio($precio){
      $this->precio=$precio;
    }

    public function setFoto($foto){
      $this->foto=$foto;
    }

    public function setDesc($des){
      $this->desc=$desc;
    }

    public function getPrecio($precio){
      return $this->precio;
    }

    public function getFoto($foto){
      $this->foto;
    }

    public function getDesc($des){
      return $this->desc;
    }

  }

 ?>
