<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Alumno_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($data)
        {
            $this->db->insert('talumno', $data);
            
            return $this->db->insert_id();
        }
        
        public function obtenerUno($aData)
        {
            $this->db->select('*');
            $this->db->from('talumno');
            $this->db->where('inperdni', $aData['inperdni']);
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            $this->db->join('tescuelagrado', 'tescuelagrado.idescuelagrado = talumno.idescuelagrado');
            
            $result = $this->db->get()->result_array();
            return array_shift($result);
        }
        
        public function obtenerUnoIdAlumno($aData)
        {
            $this->db->select('*');
            $this->db->from('talumno');
            $this->db->where('idalumno', $aData['idalumno']);
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            $this->db->join('tescuelagrado', 'tescuelagrado.idescuelagrado = talumno.idescuelagrado');
            
            $result = $this->db->get()->result_array();
            return array_shift($result);
        }
        
        public function obtenerFamiliarACargo($aData)
        {
            $this->db->select('*');
            $this->db->from('ttutalum');
            $this->db->join('talumno', 'talumno.idalumno = ttutalum.idalumno');
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            $this->db->join('tescuelagrado', 'tescuelagrado.idescuelagrado = talumno.idescuelagrado');
            $this->db->where('ttutalum.idtutor', $aData['idtutor']);
            $this->db->where('tpersona.inperdni', $aData['inperdni']);
            
            $result = $this->db->get()->result_array();
            return array_shift($result);
        }
    }
// EOF parentesco_model.php