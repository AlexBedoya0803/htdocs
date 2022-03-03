<?php 

    class DataBase{

        const SERVER = "localhost";
        const USER = "root";
        const PASS = "";
        const DB = "crudmvc";

        public static function Conectar(){
            try {

                $con = new PDO("mysql:host=".self::SERVER.";dbname=".self::DB.";charset-utf8",self::USER, self::PASS);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $con;

            } catch (PDOException $e) {

                return "Failed connection. Error: ".$e->getMessage();
                
            }
        }
    }

?>