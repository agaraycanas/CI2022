<?php

class Aficion_model extends CI_Model
{

    public function create($nombre)
    {
        if ($nombre==null || $nombre=='') {
            throw new Exception("El nombre de la afición no puede ser nulo");
        }
        if (R::findOne('aficion', 'nombre=?', [
            $nombre
        ]) != null) {
            throw new Exception("La afición $nombre ya existe");
        }
        $aficion = R::dispense('aficion');
        $aficion->nombre = $nombre;
        R::store($aficion);
    }

    public function findAll()
    {
        return R::findAll('aficion');
    }
    
    public function existeId($id) {
        $bean = R::load('aficion',$id);
        return ($bean->id != 0);
    }

    public function getAficionById($idAficion) {
        return $this->existeId($idAficion) ? R::load('aficion',$idAficion) : null;
    }

    public function update($idAficion,$nombre) {
        
        if ($nombre==null || $nombre=='') {
            throw new Exception("El nombre de la afición no puede ser nulo");
        }
        
        $aficion = R::load('aficion',$idAficion);
        
        
        if  ($aficion->nombre != $nombre && R::findOne('aficion','nombre=?',[$nombre]) != null ) {
            throw new Exception("La afición $nombre ya existe");
        }
        
        if  ($aficion->nombre != $nombre ) {
            $aficion->nombre = $nombre;
        }
        R::store($aficion);
    }

    public function delete($idAficion) {
        $aficion = R::load('aficion',$idAficion);
        if ($aficion->id == 0) {
            throw new Exception("La afición de id $idAficion no existe");
        }
        R::trash($aficion);
    }
}
?>