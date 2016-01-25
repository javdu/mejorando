<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Subfactor_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $this->db->select('*');
            $this->db->from('tsubfactor');
            $this->db->order_by('idfactor, vcsubfactnombre');
     
            $result = $this->db->get()->result_array();
            
            return $result;
        }
        
        public function selectTodos()
        {
            $consulta = $this->db->get('tsubfactor');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idsubfactor] = $row->vcsubfactnombre;
            }
            
            return $resultSimple;
        }
    }
// EOF parentesco_model.php