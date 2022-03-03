<?php 

    class persona{

        public $nombre;
        private $edad; //Solo para uso dentro de la clase
        protected $altura; //Solo desde la misma clase y las heredadas

        function __construct($nombre, $edad, $altura){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->altura = $altura;
        }

        public function asignarNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

        public function imprimirNombre(){
            echo "Hola, soy ".$this->nombre.".";
        }

        public function mostrarEdad(){
            $this->edad = 20;
            return $this->edad;
        }
    }

    $objetoAlumno = new persona('Jhon', 23, 1.90);
    $objetoAlumno->asignarNombre('Alexander');
    $objetoAlumno->imprimirNombre();
    echo " ".$objetoAlumno->mostrarEdad();
    //echo $objetoAlumno->nombre;

?>