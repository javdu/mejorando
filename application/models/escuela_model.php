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
    }
// EOF parentesco_model.php