<?php
class Partido_model extends CI_Model {
    
    public function findByFecha($fecha) {
        return R::find('partido','fecha=?',[$fecha]);
    }
    
    public function getByNJornada($nJornada) {
        return R::findAll('partido');
    }
    
    public function findAll() {
        return R::findAll('partido');
    }
    
    public function save($idLocal,$idVisitante,$nJornada,$fecha,$gl,$gv) {
        
        if (R::load('equipo',$idLocal)->id == 0 || R::load('equipo',$idVisitante)->id == 0 ) {
            throw new Exception('Id de equipo desconocido');
        }
        
        $partido = R::dispense('partido');
        $partido->nJornada = $nJornada;
        $partido->fecha = $fecha;
        $partido->gl = $gl;
        $partido->gv = $gv;
        $partido->local = R::load('equipo',$idLocal);
        $partido->visitante = R::load('equipo',$idVisitante);
        R::store($partido);
    }
}