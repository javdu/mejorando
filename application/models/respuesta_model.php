<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Respuesta_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $this->db->select('*');
            $this->db->from('trespuesta');
            $this->db->order_by('vcrespnombre');
            
            $consulta = $this->db->get();
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idrespuesta] = $row->idrespuesta.' - '.$row->vcrespnombre;
            }
            
            return $resultSimple;
        }
    }
// EOF parentesco_model.php