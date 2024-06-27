<?php 
        require_once('models/Registro.php');

        class RegistroController{

            private $registroModel;

            function __construct(){
                $this->registroModel=new RegistroModel();
            }

            function index(){
                include_once('views/index/header.php');
                include_once('views/registro/index.php');
                
            }
            
            function registro(){
                include_once('views/index/header.php');
                //include_once('views/registro/index.php');

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // obtener usuario y contraseña del formulario
                    $usuario = $_POST['nombre'];
                    $correo = $_POST['correo'];
                    $password = $_POST['passw'];
            
                    //verificar los datos
                    $esUsuario = $this->registroModel->insertarUsuario($usuario, $correo, $password);
                    
                    //header("Location: index.php?metodo=login");

                } else {
                    include 'views/registro/index.php';
                }

            }

            public function cerrarSesion(){
                // Cerrar la sesion y mandar al indexx
                session_start();
                session_destroy();
                header("Location: index.php?metodo=login");
                exit;
            }

        }
    ?>