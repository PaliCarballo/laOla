<?php

  class Dire {
    protected $calle;
    protected $altura;
    protected $codPost;
    protected $ciudad;
    protected $prov;


    public function constructDire($calle,$altura,$codPost,$ciudad,$prov){

      $this->calle=$calle;
      $this->altura=$altura;
      $this->codPost=$codPost;
      $this->ciudad=$ciudad;
      $this->prov=$prov;

    }

    public function setCalle($calle){
      $this->calle=$calle;
    }

    public function getCalle($calle){
      return $this->$calle;
    }

    public function setAltura($altura){
      $this->altura=$altura;
    }

    public function getAltura($altura){
      return $altura->$altura;
    }

    public function setCodPost($codPost){
      $this->codPost=$codPost;
    }

    public function getCalle($codPost){
      return $this->$codPost;
    }

    public function setCiudad($ciudad){
      $this->ciudad=$ciudad;
    }

    public function getCiudad($ciudad){
      return $this->$ciudad;
    }

    public function setProv($prov){
      $this->prov=$prov;
    }

    public function getProv($prov){
      return $this->$prov;
    }








  }


 ?>
