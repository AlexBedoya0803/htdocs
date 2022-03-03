<?php 

    class Usuario{

        public $id;
        public $email;
        public $password;

        public function __construct($id, $email, $password){
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
        }

        public static function verificarUsuario($email, $password){

            $conexionBD = BD::crearInstancia();

            $sql = $conexionBD -> prepare("SELECT * FROM usuarios WHERE email=? AND password=?");

            $sql -> execute(array($email, $password));

            $usuario = $sql -> fetch();

            return $usuario;
        }

        public static function buscarUsuario($email){

            $conexionBD = BD::crearInstancia();

            $query = "SELECT * FROM usuarios WHERE email=?";

            $sql = $conexionBD -> prepare($query);

            $sql -> execute(array($email));

            $usuario = $sql -> fetch();

            return $usuario;
        }

        public static function crearUsuario($email, $password,$name){

            $conexionBD = BD::crearInstancia();

            $query = "INSERT INTO usuarios(email, password, nombre) VALUES(?,?,?)";

            $sql = $conexionBD -> prepare($query);

            $sql -> execute(array($email, $password, $name));

            return "Created user";
        }




    }

?>