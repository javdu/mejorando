<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class TutAlum_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTutAlum($aData)
        {
            $this->db->select('ttutalum.idtutalum, tpersona.inperdni, tpersona.vcpernombre, tescuela.vcescnombre');
            $this->db->from('ttutalum');
            $this->db->where('idtutor =', $aData['idtutor']);
            $this->db->join('talumno', 'ttutalum.idalumno = talumno.idalumno');
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            
            return $this->db->get()->result_array();
        }
        
        public function guardar($aData)
        {
            $this->db->insert('ttutalum', $aData);
            
            return $this->db->insert_id();
        }
        
        public function eliminar($aData)
        {
            $this->db->delete('ttutalum', $aData);
            
            return $this->db->affected_rows();
        }
    }
// EOF parentesco_model.php