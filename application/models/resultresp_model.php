<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class ResultResp_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $consulta = $this->db->get('trol');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idrol] = $row->vcrolnombre;
            }
            
            return $resultSimple;
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