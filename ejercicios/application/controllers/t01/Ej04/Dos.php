<?php
class Dos extends CI_Controller {
    public function index() {
        $this->dosGet();
    }
    public function dosGet() {
        frame($this,'t01/ej04/dos');
    }
    
    public function dosPost() {
        $operacion = isset($_POST['operacion'])?$_POST['operacion']:'suma';
        session_start();
        $_SESSION['operacion'] = $operacion;
        redirect(base_url().'t01/ej04/tres');
    }
}
?>