<?php
    
    class RegistroModel{
        private $DB;

        function __construct(){
            $this->DB=Database::connect();
        }

        function insertarUsuario($nombre, $correo, $passw){ //insertar los datos en la tabla usuarios
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO usuarios (nombre,correo,passw,rol) VALUES (?,?,?,?)";

            $query = $this->DB->prepare($sql);
            $query->execute(array($nombre,$correo,$passw,'usuario'));
            header("Location:index.php?metodo=login");
            Database::disconnect();       

        }
    
    }
?>

