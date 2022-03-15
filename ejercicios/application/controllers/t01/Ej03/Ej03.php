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
        
        $mensaje='';
        for ($i=0;$i<$n;$i++) {
            for ($j=0;$j<$p;$j++) {
                $mensaje .= $j.' ';
            }
        }
        infoMsg($mensaje,'t01/ej03');
    }
}
?>