<?php

require_once 'controllers/error.php';

class App {
    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // cuando se ingresa sin definir controlador
        if(empty($url[0])) {
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        } 

        $archivoController = 'controllers/' . $url[0] . '.php';

        if(file_exists($archivoController)) {
            require_once $archivoController;
    
            // inicializa el controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            // si hay un método que se requiere cargar
            if(isset($url[1])) {
                $controller->{$url[1]}();
            } else {
                $controller->render();
            }
        } else {
            $controller = new Errores();
        }
    }
}

?>