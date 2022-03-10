<?php
class Ej03 extends CI_Controller {
    public function index() {
        $this->datosG();
    }
    
    public function datosG() {
       frame($this, 't01/ej03/datosG.php');
    }
    
    public function datosP() {
        $n = $_POST['n'];
        $p = $_POST['p'];
        
        $mensaje="1 5 4 7";
        infoMsg($mensaje);
    }
    
    
}
?>