<?php
    
    class LoginModel{
        private $DB;

        function __construct(){
            $this->DB=Database::connect();
        }

        public function validarUsuario($usuario, $password) {

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //consulta para validar al usuario    
            $sql = "SELECT * FROM usuarios WHERE nombre = ? AND passw = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($usuario,$password));
                    
            // Verificar si se encontró un usuario con los datos proporcionados
            if ($q->rowCount() > 0) {
                return true; // es usuario
            } else {
                return false; // no es usuario
            }
        }
    
    }
?>

