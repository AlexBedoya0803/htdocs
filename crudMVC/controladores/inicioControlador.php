<?php

    class InicioControlador{

        private $modelo;

        public function __construct(){
            //$this->modelo = new Producto();
        }

        public function Inicio(){
            $db = DataBase::Conectar();
            require_once "vistas/inicio/principal.php";
        }

    }