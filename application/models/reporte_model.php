<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Reporte_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($aReg = null)
        {
            $idreporte = $aReg['idreporte'];
            unset($aReg['idreporte']);
            if ($idreporte == 0) {
                $this->db->insert('treporte', $aReg);
            } else {
                $this->db->where('idreporte', $idreporte);
                $this->db->update('treporte', $aReg); 
            }
            
            return $this->db->insert_id();
        }
        
        public function guardarImagen($aReg = null)
        {
            $idreportegrafico = $aReg['idreportegrafico'];
            unset($aReg['idreportegrafico']);
            if ($idreportegrafico == 0) {
                $this->db->insert('tgraficoreporte', $aReg);
            } else {
                $this->db->where('idreportegrafico', $idreportegrafico);
                $this->db->update('tgraficoreporte', $aReg); 
            }
            
            return $this->db->insert_id();
        }
        
        public function obtenerImagen($idinforme = 0)
        {
            $this->db->select('*');
            $this->db->from('tgraficoreporte');
            $this->db->where('idinforme', $idinforme);
            
            $result = $this->db->get()->result_array();
            
            return $result;
        }
    }
// EOF parentesco_model.php