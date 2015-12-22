<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Parentesco_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $consulta = $this->db->get('tparentesco');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idparentesco] = $row->vcparentnombre;
            }
            
            return $resultSimple;
        }
        
        public function obtenerTodosTutores()
        {
            $this->db->where('boparentmayoredad', 1);
            $consulta = $this->db->get('tparentesco');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idparentesco] = $row->vcparentnombre;
            }
            
            return $resultSimple;
        }
    }
// EOF parentesco_model.php