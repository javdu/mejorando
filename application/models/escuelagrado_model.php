<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class EscuelaGrado_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $consulta = $this->db->get('tescuelagrado');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idescuelagrado] = $row->vcescgradnombre;
            }
            
            return $resultSimple;
        }
    }
// EOF parentesco_model.php