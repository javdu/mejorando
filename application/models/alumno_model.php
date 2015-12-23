<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Alumno_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($data)
        {
            $this->db->trans_start();
            $this->db->insert('talumno', $data);
            $this->db->trans_complete();
            
            return $this->db->insert_id();
        }
        
        public function obtenerUno($aData)
        {
            $this->db->select('*');
            $this->db->from('talumno');
            $this->db->where($aData);
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
            $this->db->where($aData);
            $this->db->join('talumno', 'talumno.idalumno = ttutalum.idalumno');
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            $this->db->join('tescuelagrado', 'tescuelagrado.idescuelagrado = talumno.idescuelagrado');
            
            $result = $this->db->get()->result_array();
            return array_shift($result);
        }
    }
// EOF parentesco_model.php