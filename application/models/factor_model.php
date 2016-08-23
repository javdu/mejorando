<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Factor_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos($idencuesta)
        {
            $this->db->select('
                idfactor,
                vcfactnombre
            ');
            $this->db->from('tfactor');
            $this->db->where('idencuesta', $idencuesta);
            
            return $this->db->get()->result_array(); 
        }
    
    }
// EOF parentesco_model.php