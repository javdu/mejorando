<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Tutor_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($aData)
        {
            $idtutor = $aData['idtutor'];
            unset($aData['idtutor']);
            if ($idtutor == 0) {
                $this->db->insert('ttutor', $aData);
                $idtutor = $this->db->insert_id();
            } else {
                $this->db->where('idtutor', $idtutor);
                $this->db->update('ttutor', $aData); 
            }
            
            return $idtutor;
        }
        
        public function eliminar($aData)
        {
            $this->db->where('idtutor', $aData['idtutor']);
            $this->db->delete('ttutor');
            
            return $this->db->affected_rows();
        }
        
        public function obtenerListadoNombres()
        {
            $this->db->select('
                ttutor.idtutor,
                tpersona.vcpernombre
            ');
            $this->db->from('ttutor');
            $this->db->join('tpersona', 'tpersona.idpersona = ttutor.idpersona');
            
            $result = $this->db->get()->result();
            
            $resultSimple = array();
            foreach ($result as $row){
                $resultSimple[$row->idtutor] = $row->vcpernombre;
            }
            
            return $resultSimple;
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
            $this->db->join('tpersona', 'tpersona.idpersona = ttutor.idpersona');
            $this->db->where('ttutor.idtutor', $aData['idtutor']);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }

        public function existeTutor($aData)
        {
            $this->db->from('ttutor');
            $this->db->join('tpersona', 'tpersona.idpersona = ttutor.idpersona');
            $this->db->where('tpersona.inperdni', $aData['inperdni']);
            
            return $this->db->count_all_results();
        }
    }
// EOF .php