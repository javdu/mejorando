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
    
    public function eliminar()
    {
        $this->infResultModel->eliminar($this->input->post('idpregunta'));
        
        $this->index();
    }
}