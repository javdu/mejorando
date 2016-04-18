<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Persona_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($data)
        {
            $this->db->insert('tpersona', $data);
            
            return $this->db->insert_id();
        }
        
        public function guardarAlumno($aReg)
        {
            $idalumno = $aReg['idalumno'];
            unset($aReg['idalumno']);
            if ($idalumno == 0) {
                $this->db->insert('talumno', $aReg);
            } else {
                $this->db->where('idalumno', $idalumno);
                $this->db->update('talumno', $aReg); 
            }
        }
        
        public function guardarABM($aReg)
        {
            $idpersona = $aReg['idpersona'];
            unset($aReg['idpersona']);
            if ($idpersona == 0) {
                $this->db->insert('tpersona', $aReg);
            } else {
                $this->db->where('idpersona', $idpersona);
                $this->db->update('tpersona', $aReg); 
            }
        }
        
        public function obtenerUno($aData)
        {
            $this->db->select('*');
            $this->db->from('tpersona');
            $this->db->join('trol', 'trol.idrol = tpersona.idrol');
            $this->db->where($aData);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
        
        public function obtenerUnoABM($aData)
        {
            $this->db->select('*');
            $this->db->from('tpersona');
            $this->db->where('idpersona', $aData['idpersona']);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
        
        public function obtenerUno1($aData)
        {
            $this->db->select('*');
            $this->db->from('talumno');
            $this->db->where('idalumno', $aData['idalumno']);
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            $this->db->join('tescuelagrado', 'tescuelagrado.idescuelagrado = talumno.idescuelagrado');
            
            $result = $this->db->get()->result_array();
            return array_shift($result);
        }
        
        public function obtenerTodos($offset, $limit)
        {
            $this->db->limit($limit, $offset);
            $this->db->select('*');
            $this->db->from('talumno');
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            $this->db->join('tescuelagrado', 'tescuelagrado.idescuelagrado = talumno.idescuelagrado');
            $this->db->order_by('tpersona.vcpernombre');
            
            return $this->db->get()->result_array();
        }
        
        public function totalPersona()
        {
            $this->db->from('tpersona');
            
            return $this->db->count_all_results();
        }
    }
// EOF parentesco_model.php