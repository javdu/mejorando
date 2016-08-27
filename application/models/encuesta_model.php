<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Encuesta_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos($offset, $limit)
        {
            $this->db->select('*');
            $this->db->from('tencuesta');
            $this->db->limit($limit, $offset);

            $result = $this->db->get()->result_array();

            return $result;
        }

        public function obtenerUno($aData)
        {
            $this->db->select('*');
            $this->db->from('tencuesta');
            $this->db->where('tencuesta.idencuesta', $aData['idencuesta']);
            
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }

        public function totalEncuesta()
        {
            $this->db->from('tencuesta');
            
            return $this->db->count_all_results();
        }

        public function guardar($aReg)
        {
            $idencuesta = $aReg['idencuesta'];
            unset($aReg['idencuesta']);
            if ($idencuesta == 0) {
                $this->db->insert('tencuesta', $aReg);
            } else {
                $this->db->where('idencuesta', $idencuesta);
                $this->db->update('tencuesta', $aReg); 
            }
        }

        public function eliminar($idencuesta)
        {
            $this->db->where('idencuesta', $idencuesta);
            $this->db->delete('tencuesta');
        }

        public function isUnicoEncuesta($edad)
        {
            $this->db->select('
                tencuesta.idencuesta
            ');
            $this->db->from('tencuesta');
            $this->db->where('tencuesta.intencedad', (int)$edad);
            $this->db->where('tencuesta.vcencestado', 1);
            
            $result = $this->db->count_all_results();
            
            return $result;
        }

        public function obtenerTodosSelect()
        {
            $this->db->order_by('vcencnombre');
            $consulta = $this->db->get('tencuesta');
            
            $resultSimple = array();
            foreach ($consulta->result() as $row){
                $resultSimple[$row->idencuesta] = $row->vcencnombre;
            }
            
            return $resultSimple;
        }
    }
// EOF parentesco_model.php