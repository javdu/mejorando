<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Autenticacion_Model extends CI_Model
    {
    	public function __construct()
    	{
    		parent::__construct();
    	}
        
        public function login($aParams)
        {
            $this->db->select('
                tpersona.idpersona, 
                tpersona.inperdni, 
                tpersona.vcpernombre, 
                tusuario.idusuario, 
                tusuario.vcusunombre, 
                tusuario.vcusuclave, 
                tusuario.vcusuemail,
                ttutor.idtutor'
            );
            $this->db->from('tusuario');
            $this->db->where($aParams);
            $this->db->join('tpersona', 'tpersona.idpersona = tusuario.idpersona');
            $this->db->join('ttutor', 'ttutor.idpersona = tpersona.idpersona');
            $result = $this->db->get()->result_array();
            
            return array_shift($result);
        }
        
        public function guardar($data)
        {
            $this->db->insert('tpersona', $data);
            
            return $this->db->insert_id();
        }
    }
// EOF parentesco_model.php