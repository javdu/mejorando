<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Tutor_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($aData)
        {
            $this->db->insert('ttutor', $aData);
            
            return $this->db->insert_id();
        }
        
        public function eliminar($aData)
        {
            $this->db->delete('ttutor', $aData);
            
            return $this->db->affected_rows();
        }
        
        public function obtenerListadoNombres()
        {
            $this->db->select('
                ttutor.idtutor AS value,
                tpersona.vcpernombre AS label
            ');
            $this->db->from('ttutor');
            $this->db->join('tpersona', 'tpersona.idpersona = ttutor.idpersona');
            
            $result = $this->db->get()->result_array();
            
            /*
            echo '<pre>';
            var_dump($result);
            die;
            $aAux = array();
            foreach ($result AS $elemResult) {
                $aAux[] = $elemResult['vcpernombre'];
            }*/
            
            return $result;
        }
    }
// EOF .php