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
            
            return $result;
        }
        
        public function totalTutor()
        {
            $this->db->from('ttutor');
            
            return $this->db->count_all_results();
        }
        
        public function obtenerTodos($offset, $limit)
        {
            $this->db->limit($limit, $offset);
            $this->db->select('*');
            $this->db->from('ttutor');
            $this->db->join('tpersona', 'tpersona.idpersona = ttutor.idpersona');
            $this->db->order_by('tpersona.vcpernombre');
            
            $result = $this->db->get()->result_array();
            
            return $result;
        }
        
        public function obtenerUno($aData)
        {
            $this->db->select('
                tpersona.*,
                ttutor.*
            ');
            $this->db->from('ttutor');
            $this->db->where('talumno.idalumno', $aData['idalumno']);
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
    }
// EOF .php