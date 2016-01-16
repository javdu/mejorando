<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($aData)
        {
            $this->db->insert('tusuario', $aData);
            
            return $this->db->insert_id();
        }
        
        public function obtenerUno($aData)
        {
            $this->db->select('*');
            $this->db->from('tusuario');
            $this->db->where('idpersona', $aData['idpersona']);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
    }
// EOF parentesco_model.php