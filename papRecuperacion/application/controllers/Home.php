<?php
class Home extends CI_Controller {
    public function index() {
        $data['uno'] = 'dos';
        frame($this,'home/index',$data);
    }
    
    public function init() {
        error_reporting(0);
        $this->load->model('Home_model');
        $this->Home_model->init();
        infoMsg('BBDD inicializada');
    }
}