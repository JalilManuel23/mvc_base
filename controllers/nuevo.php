<?php

class Nuevo extends Controller {

	function __construct() {
		parent::__construct();
	}	
    
    function render() {
        $this->view->render('nuevo/index');
    }

	function registrar() {
		$matricula = $_POST['matricula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];

        $mensaje = "";
 
        if($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
            $mensaje = "Nuevo alumno creado";
        } else {
            $mensaje = "Error";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}