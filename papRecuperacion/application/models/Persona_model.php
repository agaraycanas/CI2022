<?php

class Persona_model extends CI_Model
{

    public function create($loginname, $nombre, $apellido, $idPaisNace)
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
        $paisExiste = true;
        if ($idPaisNace != null && $paisExiste) {
            $pais = R::load('pais',$idPaisNace);
            $persona->nace = $pais;
        }
        R::store($persona);
    }

    public function findAll()
    {
        return R::findAll('persona');
    }
    
    public function existeId($id) {
        $bean = R::load('persona',$id);
        return ($bean->id != 0);
    }

    public function getPersonabyId($idPersona) {
        return $this->existeId($idPersona) ? R::load('persona',$idPersona) : null;
    }

    public function update($idPersona,$loginname,$nombre,$apellido,$idPaisNace) {
        $persona = R::load('persona',$idPersona);
        if  ($persona->loginname!=$loginname && R::findOne('persona','loginname=?',[$loginname]) != null ) {
            throw new Exception("El loginanme $loginname ya existe");
        }
        
        if  ($persona->loginname!=$loginname ) {
            $persona -> loginname = $loginname;
        }
        
        $persona -> nombre = $nombre;
        $persona -> apellido = $apellido;
        /*
        if (
            ($persona->nace != null && ( ($idPais==null || $idPais<0) || $persona->fetchAs('pais')->nace->id != $idPais)) ||
            ($persona->nace == null && ($idPais!=null && $idPais>=0) )
            ) 
            {
            if ($idPais == null || $idPais < 0 ) {
                $persona->nace = null;
            }
            else {
                $persona->nombre='CAMBIADO'; //TODO DEBUG
                $pais = R::load('pais',$idPais);
                $persona->nace = $pais;
                R::store($pais);
            }
        }
        */
        $paisNace = ($idPaisNace==null || $idPaisNace < 0 ) ? null : R::load('pais',$idPaisNace);
        $persona -> nace = $paisNace;
        R::store($persona);
    }

    public function delete($idPersona) {
        $persona = R::load('persona',$idPersona);
        if ($persona->id == 0) {
            throw new Exception("La persona de id $idPersona no existe");
        }
        R::trash($persona);
    }
}
?>