<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SeleccionarBD extends CI_Controller {
    private $_message = null;
    
    function __construct()
	{
        parent::__construct();
        
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
        $aEdadNinios = array(
            '' => 'Seleccionar',
            'mejorando' => 'Por defecto',
            'mejorando3' => '3 años',
            'mejorando4' => '4 años',
            'mejorando5' => '5 años',
            'mejorando6' => '6 años',
            'mejorando7' => '7 años',
            'mejorando8' => '8 años',
            'mejorando9' => '9 años'//,
            //'mejorando10' => '10 años',
            //'mejorando11' => '11 años',
            //'mejorando12' => '12 años',
        );
        
        $aData = array(
            'footer' => $this->load->view('backend/footer_view', '', true),
            'navbar' => $this->load->view(
                'backend/navbar_view', 
                array('vcusunombre' => $this->session->userdata('vcusunombre')),
                true
            ),
            'content' => $this->load->view(
                'login/seleccionarbd_view',
                array('aReg' => $this->iniReg(), 'msj' => $this->_message, 'aEdadNinios' => $aEdadNinios),
                true
            )
        );
        
        $this->load->view('masterpage', $aData);
	}
    
    public function selectbd()
    {   
        try {
            $this->db = $this->load->database($this->input->post('vcBaseDatos'), TRUE);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        redirect('preguntas/index');
    }
}