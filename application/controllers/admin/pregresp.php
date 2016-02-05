<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PregResp extends Ext_Controller {
    var $_msj = null;
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('admin/pregresp_model', 'pregRespModel');
       $this->load->model('admin/Pregunta_model', 'preguntaModel');
       $this->load->model('Respuesta_Model', 'respuestaModel');
    }

	public function index($idpregunta = 0)
	{
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aRespuestas = $this->respuestaModel->obtenerTodos();
        $aPregResp = $this->preguntaModel->obtenerRespuestas($idpregunta);
        
        $aData = array(
            'aRespuestas' => $aRespuestas,
            'aPregResp' => $aPregResp,
            'idpregunta' => $idpregunta,
            'msj' => $this->_msj
        );
        $content = $this->load->view('admin/pregresp_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
	}
    
    public function eliminar($idpregunta = 0, $idpregresp = 0)
    {
        $rdo = $this->pregRespModel->eliminar($idpregresp);
        if ($rdo > 0) {
            $this->_msj = 'La respuesta se elimino correctamente.';
        } else {
            $this->_msj = 'No se pudo eliminar la respuesta.';
        }
        $this->index($idpregunta);
    }
    
    public function guardar()
    {
        $aReg = array(
            'idrespuesta' => $this->input->post('idrespuesta'),
            'idpregunta' => $this->input->post('idpregunta')
        );
        
        $rdo = $this->pregRespModel->existe($aReg);
        if ( $rdo == NULL) {
            $aReg = array(
                'idpregresp' => 0,
                'idrespuesta' => $this->input->post('idrespuesta'),
                'idpregunta' => $this->input->post('idpregunta')
            );
            
            $this->pregRespModel->guardar($aReg);
        } else {
            $this->_msj = 'La respuesta ya existe para esta pregunta.';
        }
        
        $this->index($this->input->post('idpregunta'));
    }
}