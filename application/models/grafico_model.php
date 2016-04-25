<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Grafico_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function totalPreguntasPorFactor($aData)
        {
            $this->db->from('tinfresp');
            $this->db->where('tfactor.idfactor',$aData['idfactor']);
            $this->db->where('idrespuesta',$aData['idrespuesta']);
            $this->db->where('idinforme',$aData['idinforme']);
            $this->db->join('tpregunta', 'tpregunta.idpregunta = tinfresp.idpregunta');
            $this->db->join('tsubfactor', 'tsubfactor.idsubfactor = tpregunta.idsubfactor');
            $this->db->join('tfactor', 'tfactor.idfactor = tsubfactor.idfactor');
            
            return $this->db->count_all_results();
        }
        
        public function totalPregunta($aData)
        {
            $this->db->from('tpregunta');
            $this->db->join('tsubfactor', 'tsubfactor.idsubfactor = tpregunta.idsubfactor');
            $this->db->join('tfactor', 'tfactor.idfactor = tsubfactor.idfactor');
            $this->db->where('tfactor.idencuesta',$aData['idencuesta']);
            $this->db->where('tfactor.idfactor',$aData['idfactor']);
            
            return $this->db->count_all_results();
        }
        
        public function obtenerHistorialHabPsic($aData)
        {
            $this->db->select('*');
            $this->db->from('tinffacindice');
            $this->db->join('tinforme', 'tinforme.idinforme = tinffacindice.idinforme');
            $this->db->where('tinforme.idalumno', $aData['idalumno']);
            $this->db->where('tinffacindice.idfactor', $aData['idfactor']);
            if(isset($aData['dtinffecha'])) {
                $this->db->where('tinforme.dtinffecha <=', $aData['dtinffecha']);
            } 
            $this->db->order_by('dtinffacindicefecha');
            $this->db->limit(12);
            
            $result = $this->db->get()->result_array();
            
            return $result;
        }
    }
// EOF parentesco_model.php