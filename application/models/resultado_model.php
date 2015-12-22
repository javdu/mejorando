<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Resultado_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $consulta = $this->db->get('tresultado');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idresultado] = $row->idresultado.'-'.$row->vcresultinfobt;
            }
            
            return $resultSimple;
        }
    }
// EOF parentesco_model.php