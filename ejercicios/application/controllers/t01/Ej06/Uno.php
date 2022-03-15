<?php
class Uno extends CI_Controller {
    public function index() {
        $this->unoG();
    }
    public function unoG() { //formulario nombre, edad
        frame($this,'t01/ej06/uno');
    }
    public function unoP() {
        $nombre = isset($_POST['nombre']) ?$_POST['nombre']:'desconocido';
        $edad = isset($_POST['edad']) ?$_POST['edad']:18;
        
        if ($nombre=='fin') {
            redirect(base_url().'t01/ej06/dos');
        }
        else {
            session_start();
            if (!isset($_SESSION['datos'])) {
                //$_SESSION['datos'] = [];
            }
            //$_SESSION['datos'][] = ['nombre'=>$nombre, 'edad'=>$edad];
            $_SESSION['datos'][$nombre] = $edad;
            
            redirect(base_url().'t01/ej06/uno');
        }
    }
}
?>