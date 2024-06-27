<?php
session_start();

// verificar si la sesión no está iniciada
if (!isset($_SESSION['esUsuario']) || !$_SESSION['esUsuario']) {
    // verificar si el metodo no es de inicio de sesión ni de registro
    if ($_REQUEST['metodo'] != 'login' && $_REQUEST['metodo'] != 'registro') {
        // redirigir a la página de inicio de sesión
        header("Location: index.php?metodo=login");
    }
}

require_once('bd/Conexion.php');
//importar controllers
require_once('controllers/ProductoController.php');
require_once('controllers/LoginController.php'); 
require_once('controllers/RegistroController.php'); 

// Crear instancias de los controladores
$productoController = new ProductoController();
$loginController = new LoginController(); 
$registroController = new RegistroController();

if (!empty($_REQUEST['metodo'])) {
    $metodo = $_REQUEST['metodo'];
    
    // Verificar si el método existe en el controlador de Carrera
    if (method_exists($productoController, $metodo)) {
        $productoController->$metodo(); // Llamar al método del controlador de Carrera
    }
    elseif (method_exists($registroController, $metodo)) {
        $registroController->$metodo(); // Llamar al método del controlador de registro
    }
    elseif ($metodo === 'indexProductos') {
        $productoController->index();
    }
    elseif (method_exists($loginController, $metodo)) {
    //    $loginController->index(); // Llamar al método de login del controlador de login
            $loginController->$metodo(); // Llamar al método indexUniversidades del controlador de Universidad
    } 
    else {
        $productoController->index(); // Si no existe el método, cargar el índice del controlador de Carrera
    }
} else {
    $productoController->index(); // Si no se proporciona ningún método, cargar el índice del controlador de Carrera
}
?>
