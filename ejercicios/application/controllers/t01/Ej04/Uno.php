<?php
class Uno extends CI_Controller {
    public function index() {
        $this->unoGet();
    }
    public function UnoGet() {
        session_start();
        $data['numeros']=isset($_SESSION['numeros'])?$_SESSION['numeros']:null;
        frame($this,'t01/ej04/uno',$data);
    }
    public function UnoPost() {
        $n = isset($_POST['n'])?$_POST['n']:0;
        if ($n==0) {
            $uri='t01/ej04/dos';
        }
        else {
            session_start();
            if (!isset($_SESSION['numeros'])) {
                $_SESSION['numeros'] = [];
            }
            $_SESSION['numeros'][] = $n;
            $uri='t01/ej04/uno';
        }
        return redirect(base_url().$uri);
    }
}
?>