    <?php 
        require_once('models/Login.php');

        class LoginController{

            private $loginModel;

            function __construct(){
                $this->loginModel=new LoginModel();
            }

            function index(){
                include_once('views/index/header.php');
                include_once('views/login/index.php');
                
            }
            
            function login(){
                include_once('views/index/header.php');
                include_once('views/login/index.php');
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // obtener usuario y contraseña del formulario
                    $usuario = $_POST['nombre'];
                    $password = $_POST['passw'];
        
                    //verificar los datos
                    $esUsuario = $this->loginModel->validarUsuario($usuario, $password);
        
                    if ($esUsuario) { //Si los datos son correctos
                        //iniciar sesion
                        session_start();
        
                        // Variables session
                        $_SESSION['esUsuario'] = true;
                        $_SESSION['username'] = $usuario;
        
                        // pagina del usuario
                        echo "<script> alert('Datos correctos');
                        window.location.href = 'index.php?metodo=indexUniversidades';
                    </script>";                    } else {
                        echo "<script> alert('Datos incorrectos');
                                window.location.href = 'index.php?metodo=login';
                            </script>";
                    }
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