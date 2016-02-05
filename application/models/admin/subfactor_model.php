<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Subfactor_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerUno($idsubfactor)
        {
            $this->db->select('*');
            $this->db->from('tsubfactor');
            $this->db->join('tfactor', 'tfactor.idfactor = tsubfactor.idfactor');
            $this->db->where('idsubfactor', $idsubfactor);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
        
        public function obtenerTodos()
        {
            $this->db->select('*');
            $this->db->from('tsubfactor');
            $this->db->order_by('vcsubfactnombre');
     
            $result = $this->db->get()->result_array();
            
            return $result;
        }
        
        public function selectTodos($aData )
        {
            $this->db->select('*');
            $this->db->from('tsubfactor');
            $this->db->where('idfactor', $aData['idfactor']);
            $this->db->order_by("vcsubfactnombre"); 
            
            $consulta = $this->db->get();
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idsubfactor] = $row->vcsubfactnombre;
            }
            
            return $resultSimple;
        }
        
        public function guardar($aData)
        {
            $aReg = $aData['aReg'];
            $idsubfactor = $aReg['idsubfactor'];
            unset($aReg['idsubfactor']);
            if ($idsubfactor == 0) {
                $this->db->insert('tsubfactor', $aReg);
            } else {
                $this->db->where('idsubfactor', $idsubfactor);
                $this->db->update('tsubfactor', $aReg); 
            }
        }
        
        public function eliminar($idsubfactor)
        {
            $this->db->where('idsubfactor', $idsubfactor);
            $this->db->delete('tsubfactor');
            
            return $this->db->affected_rows();
        }
    }
// EOF parentesco_model.php