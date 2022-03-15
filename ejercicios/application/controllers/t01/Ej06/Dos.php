<?php
class Dos extends CI_Controller {
    public function index() {
        $this->dosG();
    }
    
    public function dosG() {
        session_start();
        if (!isset($_SESSION['datos'])) {
            $_SESSION['datos'] = [];
        }
        $data['datos'] = $_SESSION['datos'];
        //ksort($data['datos']); //Ordenamiento por nombre
        //asort($data['datos']); //Ordenamiento por edad
        frame($this,'t01/ej06/dos',$data);
    }
    
    public function dosP() {
        session_start();
        unset($_SESSION['datos']);
        redirect(base_url().'t01/ej06');
    }
}
?>