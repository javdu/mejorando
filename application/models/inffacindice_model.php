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
        
        public function obtenerIndiceInforme($idinforme = 0)
        {
            $this->db->select('vcfactnombre, ininffacvalor');
            $this->db->from('tinffacindice');
            $this->db->where('idinforme', $idinforme);
            $this->db->join('tfactor', 'tfactor.idfactor = tinffacindice.idfactor');
            
            $aResult = $this->db->get()->result_array();
            
            return $aResult;
        }
    }
// EOF parentesco_model.php