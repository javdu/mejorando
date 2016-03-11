<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Factor_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $this->db->select('*');
            $this->db->from('tfactor');
            $this->db->order_by("vcfactnombre"); 
     
            $result = $this->db->get()->result_array();
            
            return $result;
        }
        
        public function selectTodos()
        {
            $this->db->select('*');
            $this->db->from('tfactor');
            $this->db->order_by("vcfactnombre"); 
            
            $consulta = $this->db->get();
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idfactor] = $row->vcfactnombre;
            }
            
            return $resultSimple;
        }
        
        public function obtenerUno($idfactor)
        {
            $this->db->select('*');
            $this->db->from('tfactor');
            $this->db->where('idfactor', $idfactor);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
        
        public function guardar($aData)
        {
            $idfactor = $aData['idfactor'];
            unset($aData['idfactor']);
            if ($idfactor == 0) {
                $this->db->insert('tfactor', $aData);
            } else {
                $this->db->where('idfactor', $idfactor);
                $this->db->update('tfactor', $aData); 
            }
        }
        
        public function eliminar($idfactor)
        {
            $this->db->where('idfactor', $idfactor);
            $this->db->delete('tfactor');
            
            return $this->db->affected_rows();
        }
    }
// EOF parentesco_model.php