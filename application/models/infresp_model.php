<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class InfResp_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($data)
        {
            $this->db->insert('tinfresp', $data);
            
            return $this->db->insert_id();
        }
        
        public function guardarVarios($data)
        {
            $this->db->insert_batch('tinfresp', $data);
            
            return $this->db->insert_id();
        }
        
        public function eliminar($data)
        {
            foreach($data as $elem)
            {
                $this->db->where('idpregunta', $elem['idpregunta']);
                $this->db->where('idinforme', $elem['idinforme']);
                
                $this->db->delete('tinfresp');
            }
        }
    }
// EOF parentesco_model.php