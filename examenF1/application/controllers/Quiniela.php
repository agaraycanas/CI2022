<?php
class Quiniela extends CI_Controller {
    
    public function jornadas() {
        error_reporting(0);
        $data['nJornadas'] = [1,4,5];
        frame($this,'quiniela/jornadas',$data);
    }
    
    public function partidos() {
        error_reporting(0);
        $nJornada = isset($_GET['nJornada']) ? $_GET['nJornada'] : null;
        
        $this->load->model('Partido_model');
        $data['partidos'] = $this->Partido_model->getByNJornada($nJornada);
        $data['nJornada'] = $nJornada;
        frame($this,'quiniela/partidos',$data);
    }
}