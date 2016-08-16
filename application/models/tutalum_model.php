<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class TutAlum_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTutAlum($aData)
        {
            $this->db->select('
                ttutalum.idtutalum,
                tpersona.inperdni,
                tpersona.vcpernombre,
                tescuela.vcescnombre'
            );
            $this->db->from('ttutalum');
            $this->db->where('idtutor =', $aData['idtutor']);
            $this->db->join('talumno', 'ttutalum.idalumno = talumno.idalumno');
            $this->db->join('tpersona', 'tpersona.idpersona = talumno.idpersona');
            $this->db->join('tescuela', 'tescuela.idescuela = talumno.idescuela');
            
            return $this->db->get()->result_array();
        }
        
        public function obtenerTutor($aData)
        {
            $this->db->select('
                ttutalum.idtutalum,
                tpersona.inperdni,
                tpersona.vcpernombre,
                tparentesco.vcparentnombre,
                ttutor.idtutor,
                tparentesco.idparentesco,
                ttutalum.idalumno'
            );
            $this->db->from('ttutalum');
            $this->db->where('idalumno =', $aData['idalumno']);
            $this->db->join('ttutor', 'ttutalum.idtutor = ttutor.idtutor');
            $this->db->join('tpersona', 'tpersona.idpersona = ttutor.idpersona');
            $this->db->join('tparentesco', 'tparentesco.idparentesco = ttutalum.idparentesco');
            
            $aResult = $this->db->get()->result_array();
            $aResult = array_shift($aResult);
            return $aResult;
        }
        
        public function guardar($aData)
        {
            $idtutalum = $aData['idtutalum'];
            unset($aData['ttutalum']);
            if ($idtutalum == 0) {
                $this->db->insert('ttutalum', $aData);
                $idtutalum = $this->db->insert_id();
            } else {
                $this->db->where('idtutalum', $idtutalum);
                $this->db->update('ttutalum', $aData); 
            }
            
            return $idtutalum;
        }
        
        public function eliminar($aData)
        {
            $this->db->delete('ttutalum', $aData);
            
            return $this->db->affected_rows();
        }
        
        public function editar($aData) {
            $idalumno = $aData['idalumno'];
            $idtutor = $aData['idalumno'];
            //eliminamos
            $this->db->where('idalumno', $idalumno);
            $this->db->where('idtutor', $aData['idtutorviejo']);
            $this->db->delete('ttutalum'); 
            unset($aData['idtutorviejo']);
            //Isertamos
            $this->db->insert('ttutalum', $aData); 
            
            
            //$this->db->where('idalumno', $idalumno);
            //$this->db->where('idtutor', $idtutor);
            //$this->db->update('ttutalum', $aData); 
        }
    }
// EOF parentesco_model.php