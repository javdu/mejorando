<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Rol_Model extends CI_Model
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
        
        public function obtenerTodosTutores()
        {
            $this->db->where('borolesmayoredad', 1);
            $consulta = $this->db->get('trol');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idrol] = $row->vcrolnombre;
            }
            
            return $resultSimple;
        }
    }
// EOF parentesco_model.php