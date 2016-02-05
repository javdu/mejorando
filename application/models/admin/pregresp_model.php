<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class PregResp_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function eliminar($idpregresp)
        {
            $this->db->where('idpregresp', $idpregresp);
            $this->db->delete('tpregresp');
            
            return $this->db->affected_rows();
        }
        
        public function guardar($aReg)
        {
            $idpregresp = $aReg['idpregresp'];
            unset($aReg['idpregresp']);
            if ($idpregresp == 0) {
                $this->db->insert('tpregresp', $aReg);
            } else {
                $this->db->where('idpregresp', $idpregresp);
                $this->db->update('tpregresp', $aReg);
            }
        }
        
        public function existe($aReg)
        {
            $this->db->select('idpregresp');
            $this->db->from('tpregresp');
            $this->db->where($aReg);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
    }
// EOF parentesco_model.php