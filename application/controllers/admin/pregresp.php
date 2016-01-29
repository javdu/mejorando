<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PregResp extends Ext_Controller {
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('admin/pregresp_model', 'pregRespModel');
    }

	public function index($idpregunta = 0)
	{
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aRespuestas = $this->respuestaModel->obtenerTodos();
        $aPregResp = $this->preguntaModel->obtenerRespuestas($idpregunta);
        
        $aData = array(
            'aRespuestas' => $aRespuestas,
            'aPregResp' => $aPregResp
        );
        $content = $this->load->view('admin/pregresp_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
	}
    
    public function eliminar($idpregresp = 0)
    {
        $this->pregRespModel->eliminar($this->input->post('idpregunta'));
        
        $this->index();
    }
}