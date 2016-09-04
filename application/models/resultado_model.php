<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Resultado_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $consulta = $this->db->get('tresultado');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idresultado] = $row->idresultado.'-'.$row->vcresultinfobt;
            }
            
            return $resultSimple;
        }
        
        public function obtenerTodosElementos($idsubfactor = 0)
        {
            $this->db->select(
                'tresultado.idresultado, 
                 tresultado.vcresultestninio,
                 tresultado.vcresultinfobt,
                 tresultado.vcresultsugprof,
                 tresultado.vcresultejepot,
                 tresultado.vcresultorientadult,
                 tresultado.boresultestado,
               	 tresultado.idsubfactor'
            );
            $this->db->from('tresultado');
            $this->db->where('tresultado.idsubfactor', $idsubfactor);
            
            $aResultado = $this->db->get()->result_array();
            
            return $aResultado;
        }
        
        public function obtenerUno($idresultado = 0)
        {
            $this->db->select(
                'tresultado.idresultado, 
                 tresultado.vcresultestninio,
                 tresultado.vcresultinfobt,
                 tresultado.vcresultsugprof,
                 tresultado.vcresultejepot,
                 tresultado.vcresultorientadult,
                 tresultado.boresultestado,
               	 tresultado.idsubfactor'
            );
            $this->db->from('tresultado');
            $this->db->where('tresultado.idresultado', $idresultado);
            
            $aResultado = $this->db->get()->result_array();
            
            return array_shift($aResultado);
        }
        
        public function guardar($aReg)
        {
            $idresultado = $aReg['idresultado'];
            unset($aReg['idresultado']);
            if ($idresultado == 0) {
                $this->db->insert('tresultado', $aReg);
                $idresultado = $this->db->insert_id();
            } else {
                $this->db->where('idresultado', $idresultado);
                $this->db->update('tresultado', $aReg);
            }
            
            return $idresultado;
        }
        
        public function eliminar($idresultado)
        {
            $this->db->where('idresultado', $idresultado);
            $this->db->delete('tresultado');
            
            return $this->db->affected_rows();
        }
    }
// EOF parentesco_model.php