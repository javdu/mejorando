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
    }
// EOF parentesco_model.php