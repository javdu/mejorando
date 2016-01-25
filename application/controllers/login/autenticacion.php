<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Autenticacion extends CI_Controller {
    private $_message = null;
    
    function __construct()
	{
        parent::__construct();
        
        $this->load->model('Autenticacion_Model', 'autenticacionModel');
        
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        
        $this->aReglas = array(
            'login' => array(
                array(
                     'field'   => 'vcusunombre',
                     'label'   => 'DNI',
                     'rules'   => 'trim|required|numeric|exact_length[8]'
                  ),
                array(
                     'field'   => 'vcusuclave',
                     'label'   => 'Contraseña',
                     'rules'   => 'trim|required'
                  )
            )
        );
    }
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'vcusunombre' =>  $this->input->post('vcusunombre'), 
                'vcusuclave' =>  $this->input->post('vcusuclave')
            );
        } else {
            $this->aReg = array(
                'vcusunombre' =>  '', 
                'vcusuclave' =>  ''
            );
        }
        
        return $this->aReg;
    }
    
	public function index()
	{
        $aData = array(
            'footer' => $this->load->view('backend/footer_view', '', true),
            'navbar' => $this->load->view(
                'backend/navbar_view', 
                array('vcusunombre' => $this->session->userdata('vcusunombre')),
                true
            ),
            'content' => $this->load->view(
                'login/autenticacion_view',
                array('aReg' => $this->iniReg(), 'msj' => $this->_message),
                true
            )
        );
        
        $this->load->view('masterpage', $aData);
	}
    
    public function login()
    {
        $this->form_validation->set_rules($this->aReglas['login']);
        if ($this->form_validation->run() == FALSE) {
            $aReg = $this->iniReg();
            
            $aData = array(
                'footer' => $this->load->view('backend/footer_view', '', true),
                'navbar' => $this->load->view(
                    'backend/navbar_view', 
                    array('vcusunombre' => $this->session->userdata('vcusunombre')),
                    true
                ),
                'content' => $this->load->view(
                    'login/autenticacion_view', 
                    array('aReg' => $aReg),
                    true
                )
            );
        
            $this->load->view('masterpage', $aData);
        }
        else {
            $aUsuario = $this->autenticacionModel->login(
                array(
                    'vcusunombre' =>  $this->input->post('vcusunombre'), 
                    'vcusuclave' =>  md5($this->input->post('vcusuclave'))
                )
            );
            if ((bool) $aUsuario) {
                $nuevosdatos = array(
                   'idpersona'  => $aUsuario['idpersona'],
                   'idtutor'  => $aUsuario['idtutor'],
                   'vcpernombre'  => $aUsuario['vcpernombre'],
                   'vcusunombre'  => $aUsuario['vcusunombre'],
                   'ingresado' => TRUE
                );
                $this->session->set_userdata($nuevosdatos);
                
                redirect('preguntas/index');
            } else {
                $this->_message = 'El usuario no existe, verifique su nombre de usuario y contraseña.';
                $this->index();
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        $this->index();
    }
    public function loadLoginUser()
    {
        echo $this->load->view('backend/login_user_view', array(), true);
    }
}