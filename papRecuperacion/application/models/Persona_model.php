<?php

class Persona_model extends CI_Model
{

    public function create($loginname, $nombre, $apellido)
    {
        if (R::findOne('persona', 'loginname=?', [
            $loginname
        ]) != null) {
            throw new Exception('El loginname ' . $loginname . ' ya existe');
        }
        $persona = R::dispense('persona');
        $persona->loginname = $loginname;
        $persona->nombre = $nombre;
        $persona->apellido = $apellido;
        R::store($persona);
    }

    public function findAll()
    {
        return R::findAll('persona');
    }
}
?>