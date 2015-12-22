<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class SubFactor_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $consulta = $this->db->get('tsubfactor');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idsubfactor] = $row->idsubfactor.'-'.$row->vcsubfactnombre;
            }
            
            return $resultSimple;
        }
    }
// EOF parentesco_model.php