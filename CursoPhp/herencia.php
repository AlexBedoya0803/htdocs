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

    class trabajador extends persona{

        public $puesto;

        public function presentarTrabajador(){
            echo "Hola, soy el trabajador ".$this->nombre." y soy ".$this->puesto.".";
        }
    }

    //$objetoAlumno = new persona();
    $objetoAlumno->asignarNombre('Alexander');
    $objetoAlumno->imprimirNombre();
    echo $objetoAlumno->mostrarEdad();
    //echo $objetoAlumno->nombre; //No se puede acceder porque es private

    echo "<br/>";

    //$objetoTrabajador = new trabajador();
    $objetoTrabajador->puesto = 'estudiante';
    $objetoTrabajador->asignarNombre('Emilio');
    $objetoTrabajador->presentarTrabajador();


?>