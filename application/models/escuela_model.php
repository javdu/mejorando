<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Escuela_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function obtenerTodos()
        {
            $this->db->order_by('vcescnombre');
            $consulta = $this->db->get('tescuela');
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idescuela] = $row->vcescnombre . ' - N° ' . $row->vcescnro;
            }
            
            return $resultSimple;
        }
        
        public function obtenerTodosABM($offset, $limit)
        {
            $this->db->limit($limit, $offset);
            $this->db->select('*');
            $this->db->from('tescuela');
            $this->db->order_by('tescuela.vcescnombre');
            
            return $this->db->get()->result_array();
        }
        
        public function obtenerDocEsc()
        {
            $this->db->select('tescuela.idescuela, tescuela.vcescnombre, tescuela.vcescnro');
            $this->db->from('tescuela');
            $this->db->join('tdocesc', 'tdocesc.idescuela = tescuela.idescuela','left');
            $this->db->where('tdocesc.idescuela =', 'NULL');
            $this->db->order_by('vcescnombre');
            $consulta = $this->db->get();
            
            $resultSimple = array();
			foreach ($consulta->result() as $row){
                $resultSimple[$row->idescuela] = $row->vcescnombre . ' - N° ' . $row->vcescnro;
            }
            
            return $resultSimple;
        }
        
        public function totalEscuela()
        {
            $this->db->from('tescuela');
            
            return $this->db->count_all_results(); 
        }
        
        public function obtenerUno1($aData)
        {
            $this->db->select('*');
            $this->db->from('tescuela');
            $this->db->where('idescuela', $aData['idescuela']);
            
            $result = $this->db->get()->result_array();
            return array_shift($result);
        }
        
        public function guardarABM($aReg)
        {
            $idescuela = $aReg['idescuela'];
            unset($aReg['idescuela']);
            if ($idescuela == 0) {
                $this->db->insert('tescuela', $aReg);
            } else {
                $this->db->where('idescuela', $idescuela);
                $this->db->update('tescuela', $aReg); 
            }
        }
        
        public function eliminar($idescuela)
        {
            $this->db->where('idescuela', $idescuela);
            $this->db->delete('tescuela');
            
            return $this->db->affected_rows();
        }
    }
// EOF parentesco_model.php