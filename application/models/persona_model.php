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
                
                $idalumno = $this->db->insert_id();
            } else {
                $this->db->where('idalumno', $idalumno);
                $this->db->update('talumno', $aReg); 
            }
            
            return $idalumno;
        }
        
        public function guardarABM($aReg)
        {
            $idpersona = $aReg['idpersona'];
            unset($aReg['idpersona']);
            if ($idpersona == 0) {
                $this->db->insert('tpersona', $aReg);
                $idpersona = $this->db->insert_id();
            } else {
                $this->db->where('idpersona', $idpersona);
                $this->db->update('tpersona', $aReg); 
            }
            
            return $idpersona;
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
            $this->db->select('
                talumno.*,
                tpersona.*,
                tescuela.*,
                ttutorpersona.vcpernombre AS nombreTutor,
                ttutorpersona.inperdni AS dniTutor,
                ttutor.idtutor,
                ttutalum.idparentesco,
                ttutalum.idtutalum
            ');
            $this->db->from('talumno');
            $this->db->where('talumno.idalumno', $aData['idalumno']);
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            //Tutor
            $this->db->join('ttutalum', 'ttutalum.idalumno = talumno.idalumno');
            $this->db->join('ttutor', 'ttutor.idtutor = ttutalum.idtutor');
            $this->db->join('tpersona AS ttutorpersona', 'ttutorpersona.idpersona = ttutor.idpersona');
            
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
            
            $result = $this->db->get()->result_array();
            
            return $result;
        }
        
        public function totalPersona()
        {
            $this->db->from('talumno');
            
            return $this->db->count_all_results();
        }
    }
// EOF parentesco_model.php