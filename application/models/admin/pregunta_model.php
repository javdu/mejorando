<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Pregunta_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $this->db->select('*');
            $this->db->from('tpregunta');
            $this->db->order_by('idsubfactor, vcpregnombre');
     
            $result = $this->db->get()->result_array();
            
            return $result;
        }
    }
// EOF parentesco_model.php