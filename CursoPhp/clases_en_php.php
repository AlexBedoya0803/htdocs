<?php 

    class persona{

        public $nombre;
        private $edad; //Solo para uso dentro de la clase
        protected $altura; //Solo desde la misma clase y las heredadas

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

    //$objetoAlumno = new persona();
    $objetoAlumno->asignarNombre('Alexander');
    $objetoAlumno->imprimirNombre();
    echo $objetoAlumno->mostrarEdad();
    //echo $objetoAlumno->nombre;

?>