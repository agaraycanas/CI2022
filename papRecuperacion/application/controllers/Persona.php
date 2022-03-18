<?php
class Persona extends CI_Controller {
    public function c() {
        frame($this, 'persona/c');
    }
    
    public function cPost() {
        $loginname= isset($_POST['loginname']) ? $_POST['loginname'] : null;
        $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : 'John';
        $apellido= isset($_POST['apellido']) ? $_POST['apellido'] : 'Doe';
        
        try {
            if ($loginname==null) {
                throw new Exception('El loginname no puede ser null');
            }
            $this->load->model('Persona_model');
            $this->Persona_model->create($loginname,$nombre,$apellido);
            redirect(base_url().'persona/r');
        }
        catch (Exception $e) {
            errorMsg($e->getMessage(),'persona/c');
        }
    }
    
    public function r() {
        frame($this, 'persona/r');
    }
}
?>