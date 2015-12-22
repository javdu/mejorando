<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class DocEsc_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerEscPorDoc($aParams)
        {
            $this->db->select('iddocesc, vcescnombre');
            $this->db->from('tdocesc');
            $this->db->join('tescuela', 'tdocesc.idescuela = tescuela.idescuela');
            $this->db->where($aParams);
            $this->db->order_by('iddocesc');
            
            return $this->db->get()->result_array();
        }
        
        public function guardar($aData)
        {
            $this->db->insert('tdocesc', $aData);
            
            return $this->db->insert_id();
        }
        
        public function eliminar($aData)
        {
            $this->db->delete('tdocesc', $aData);
            
            return $this->db->affected_rows();
        }
    }
// EOF parentesco_model.php