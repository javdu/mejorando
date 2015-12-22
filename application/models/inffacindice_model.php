<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class InfFacIndice_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($aData)
        {
            $this->db->insert('tinffacindice', $aData);
            
            return $this->db->insert_id();
        }
        
        public function eliminar($aData)
        {
            $this->db->where('idinforme', $aData['idinforme']);
            $this->db->delete('tinffacindice'); 
        }
    }
// EOF parentesco_model.php