<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Tutor_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($aData)
        {
            $this->db->insert('ttutor', $aData);
            
            return $this->db->insert_id();
        }
        
        public function eliminar($aData)
        {
            $this->db->delete('ttutor', $aData);
            
            return $this->db->affected_rows();
        }
    }
// EOF .php