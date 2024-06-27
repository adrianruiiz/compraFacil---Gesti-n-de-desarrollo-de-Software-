<?php 
        require_once('models/Producto.php');

        class ProductoController{

            private $productoModel;

            function __construct(){
                $this->productoModel=new ProductoModel();
            }

            function index(){
                include_once('views/index/header.php');
                include_once('views/productos/index.php');
                
            }
            
        }
    ?>