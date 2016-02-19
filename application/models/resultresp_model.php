<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class ResultResp_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos($idsubfactor = 0)
        {
            $this->db->select('*');
            $this->db->from('tresultresp');
            $this->db->join('tsubfactor', 'tsubfactor.idsubfactor = tresultresp.idsubfactor');
            $this->db->join('tresultado', 'tresultado.idresultado = tresultresp.idresultado');
            $this->db->join('trespuesta', 'trespuesta.idrespuesta = tresultresp.idrespuesta');
            $this->db->where('tresultresp.idsubfactor', $idsubfactor);
            $this->db->order_by('tresultresp.idcombinacion');
            
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