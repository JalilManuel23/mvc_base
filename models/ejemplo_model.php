<?php
class Ejemplo_model {
    public $db;
    public $personas;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->personas=array();
    }
    public function get_personas(){
        $consulta=$this->db->query("select * from personas;");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }

    public function set_personas($datos) {
        $consulta=$this->db->query("INSERT INTO personas VALUES (" + $datos +");");
    }
}
?>
