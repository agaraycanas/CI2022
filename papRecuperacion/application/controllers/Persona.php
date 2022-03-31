<?php

class Persona extends CI_Controller
{

    public function index() {
        $this->r();    
    }
    
    public function c()
    {
        frame($this, 'persona/c');
    }

    public function cPost()
    {
        $loginname = isset($_POST['loginname']) ? $_POST['loginname'] : null;
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'John';
        $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : 'Doe';

        try {
            if ($loginname == null) {
                throw new Exception('El loginname no puede ser null');
            }
            $this->load->model('Persona_model');
            $this->Persona_model->create($loginname, $nombre, $apellido);
            redirect(base_url() . 'persona/r');
        } catch (Exception $e) {
            errorMsg($e->getMessage(), 'persona/c');
        }
    }

    public function r()
    {
        error_reporting(0);
        $this->load->model('Persona_model');
        $data['personas'] = $this->Persona_model->findAll();
        frame($this, 'persona/r', $data);
    }

    public function u() {
        error_reporting(0);
        $idPersona = isset($_GET['idPersona'])?$_GET['idPersona']:null;
        $this->load->model('Persona_model');
        try {
            if ($idPersona==null) {
                throw new Exception('El id de la persona a editar no puede ser nulo');
            }
            if (!$this->Persona_model->existeId($idPersona)) {
                throw new Exception('El id de la persona a editar no existe');
            }
            $data['persona'] = $this->Persona_model->getPersonabyId($idPersona);
            frame($this,'persona/u',$data);
        }
        catch (Exception $e) {
            errorMsg($e->getMessage(),'persona/r');
        }
    }

    public function uPost() {
        $idPersona = isset($_POST['idPersona'])?$_POST['idPersona']:null;
        $loginname = isset($_POST['loginname'])?$_POST['loginname']:null;
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $apellido = isset($_POST['apellido'])?$_POST['apellido']:null;
     
        $this->load->model('Persona_model');
        try {
            $this->Persona_model->update($idPersona,$loginname,$nombre,$apellido);
            redirect(base_url().'persona/r');
        }
        catch (Exception $e){
            errorMsg($e->getMessage(),'/persona/r');
        }
        
    }

    public function dPost() {
        error_reporting(0);
        $idPersona = isset($_GET['idPersona'])?$_GET['idPersona']:null;
        if ($idPersona==null ) {
            errorMsg('El id de la persona a borrar no puede ser nulo','persona/r');
        }
        $this->load->model('Persona_model');
        try {
            $this->Persona_model->delete($idPersona);
            redirect(base_url().'persona/r');
        }
        catch (Exception $e) {
            errorMsg($e->getMessage(),'persona/r');
        }
    }
}
?>