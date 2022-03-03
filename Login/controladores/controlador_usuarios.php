<?php 

    include_once "modelos/usuario.php";
    include_once "conexion.php";

    BD::crearInstancia();

    class ControladorUsuarios{

        public function login(){
            if($_POST){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $verificacion = Usuario::verificarUsuario($email, $password);
                
                if(isset($verificacion['id'])){            
                    header("Location:./?controlador=paginas&accion=home");
                    $mensaje = "Ingreso validado";
                    session_start();
                } else {
                    $mensaje = "Datos incorrectos";
                }
            }
            include_once "vistas/usuarios/login.php";
        }

        public function salir(){
            session_destroy();
            header("Location:./?controlador=usuarios&accion=login");
            include_once "vistas/paginas/home.php";
        }

        public function registro(){
            
            if($_POST){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $name = $_POST['name'];
                $mensaje = '';

                $buscar = Usuario::buscarUsuario($email);

                if(!isset($buscar['id'])){
                    $mensaje = Usuario::crearUsuario($email, $password, $name);
                } else {
                    $mensaje = "Usuario ya existente";
                }
            }

            include_once "vistas/usuarios/registro.php";

        }






    }


?>