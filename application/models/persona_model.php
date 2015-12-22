<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Persona_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($data)
        {
            $this->db->insert('tpersona', $data);
            
            return $this->db->insert_id();
        }
        
        public function obtenerUno($aData)
        {
            $this->db->select('*');
            $this->db->from('tpersona');
            $this->db->join('trol', 'trol.idrol = tpersona.idrol');
            $this->db->where($aData);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
    }
// EOF parentesco_model.php