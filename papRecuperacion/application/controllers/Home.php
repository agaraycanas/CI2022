<?php
class Home extends CI_Controller {
    public function index() {
        $data['uno'] = 'dos';
        frame($this,'home/index',$data);
    }
}