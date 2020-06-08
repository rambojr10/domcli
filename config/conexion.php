<?php 

class Conexion {
        public function conectar() {
            try {
                $bd = new PDO("mysql:host=127.0.0.1;dbname=", "root", "");
                $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $bd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $bd->query("SET NAMES 'utf8'");
                return $bd;
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
    
?>