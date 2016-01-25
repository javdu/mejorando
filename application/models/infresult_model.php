<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class InfResult_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $this->db->select('*');
            $this->db->from('tresultado');
            $this->db->join('tsubfactor', 'tsubfactor.idsubfactor = tresultado.idsubfactor');
            $this->db->join('tfactor', 'tfactor.idfactor = tsubfactor.idfactor');
            
            $result = $this->db->get()->result_array();
            
            return $result;
        }
        
        public function guardar($data)
        {
            $this->db->insert('tresultresp', $data);
            
            return $this->db->insert_id();
        }
        
        public function obtenerMaxCombinacion()
        {
            $this->db->select_max('idcombinacion');
            $this->db->from('tresultresp');
            $aResult = $this->db->get()->result_array();
            
            $aResult = array_shift($aResult);
            
            return $aResult;
        }
    }
// EOF parentesco_model.php