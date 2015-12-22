<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Usuario_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function guardar($aData)
        {
            $this->db->insert('tusuario', $aData);
            
            return $this->db->insert_id();
        }
    }
// EOF parentesco_model.php