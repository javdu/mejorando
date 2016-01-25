<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class InfResult extends Ext_Controller {
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('infresult_model', 'infResultModel');
    }

	public function index()
	{
        $aResult = $this->infResultModel->obtenerTodos();
        $aData = array(
            'aResult' => $aResult
        );
        $header = '';
        $content = $this->load->view('admin/listinfresult_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content));
	}
    
    public function guardar()
    {
        $this->session->set_userdata('idalumno', $this->input->post('idalumno'));
        if (((bool)$this->session->userdata('idinforme') == false)||($this->session->userdata('idinforme') == 0)) {
            $aParams = array(
                'dtinffecha' => date('Y-m-d'),
                'boinfestado' => 1,
                'idinfest' => 1,
                'idencuesta' => 1,
                'idalumno' => $this->session->userdata('idalumno'),
                'idpersona' => $this->session->userdata('idpersona')
            );
            
            $idinforme = $this->informeModel->guardar($aParams);
            
            $this->session->set_userdata('idinforme', $idinforme);   
        }
        
        redirect('/cuestionario/preguntas1/formulario');
    }
}