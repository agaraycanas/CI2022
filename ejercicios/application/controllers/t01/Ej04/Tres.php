<?php
class Tres extends CI_Controller {
    
    private function getCaracter($operacion) {
        $car='';
        switch ($operacion) {
            case 'suma':$car='+';break;
            case 'multi':$car='x';break;
        }
        return $car;
    }
    
    private function getSolucion($numeros,$operacion) {
        $sol = 0;
        if ($operacion=='multi') {
            $sol = 1;
        }
        foreach ($numeros as $numero) {
            if ($operacion=='suma') {
                $sol += $numero;
            }
            if ($operacion=='multi') {
                $sol *= $numero;
            }
        }
        
        return $sol;
    }
    
    public function index() {
        $this->tresGet();
    }
    public function tresGet() {
        session_start();
        $data['numeros'] = $_SESSION['numeros'];
        $data['op'] = $this->getCaracter($_SESSION['operacion']);
        $data['sol'] = $this->getSolucion($_SESSION['numeros'],$_SESSION['operacion']);
        frame($this,'t01/ej04/tres',$data);
    }
    
    public function tresPost() {
        session_start();
        session_destroy();
        redirect(base_url().'t01/ej04/uno');
    }
}
?>