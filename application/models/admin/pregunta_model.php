<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Pregunta_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos($idencuesta)
        {
            $this->db->select('*');
            $this->db->from('tpregunta');
            $this->db->join('tsubfactor', 'tsubfactor.idsubfactor = tpregunta.idsubfactor');
            $this->db->join('tfactor', 'tfactor.idfactor = tsubfactor.idfactor');
            $this->db->where('tfactor.idencuesta', $idencuesta);
            $this->db->order_by('tsubfactor.idsubfactor, tpregunta.vcpregnombre');
     
            $result = $this->db->get()->result_array();
            
            return $result;
        }
        
        public function guardar($aData)
        {
            $aReg = $aData['aReg'];
            $idpregunta = $aReg['idpregunta'];
            unset($aReg['idpregunta']);
            if ($idpregunta == 0) {
                $this->db->insert('tpregunta', $aReg);
            } else {
                $this->db->where('idpregunta', $idpregunta);
                $this->db->update('tpregunta', $aReg); 
            }
        }
        
        public function obtenerUno($idpregunta)
        {
            $this->db->select('*');
            $this->db->from('tpregunta');
            $this->db->join('tsubfactor', 'tsubfactor.idsubfactor = tpregunta.idsubfactor');
            $this->db->join('tfactor', 'tfactor.idfactor = tsubfactor.idfactor');
            $this->db->where('idpregunta', $idpregunta);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
        
        public function eliminar($idpregunta)
        {
            $this->db->where('idpregunta', $idpregunta);
            $this->db->delete('tpregunta');
            
            return $this->db->affected_rows();
        }
        
        public function obtenerRespuestas($idpregunta)
        {
            $this->db->select('*');
            $this->db->from('tpregresp');
            $this->db->join('trespuesta', 'trespuesta.idrespuesta = tpregresp.idrespuesta');
            $this->db->where('tpregresp.idpregunta', $idpregunta);
            $this->db->order_by('vcrespnombre');
            
            $result = $this->db->get()->result_array();
            
            return $result;
        }
    }
// EOF parentesco_model.php