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
    }
// EOF parentesco_model.php