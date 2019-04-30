<?php
  include_once 'usuario.php';
  include_once 'producto.php';

    class Carrito {

        protected $usuario;
        protected $listaProd = [];

        public function agregarProducto(Producto $producto){
          $this->listaProd[] = $producto;
        }

        public function sumarPrecio(){
          $total = 0;
          foreach ($this->listaProd as $producto) {
            $total = $total + $producto->getPrecio();
          }
          return $total;
        }




      }






 ?>
