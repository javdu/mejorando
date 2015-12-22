<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ResultResp extends Ext_Controller
{
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('resultresp_model', 'resultrespModel');
       $this->load->model('subfactor_model', 'subfactorModel');
       $this->load->model('resultado_model', 'resultadoModel');
       $this->load->model('respuesta_model', 'respuestaModel');
    }

	public function index()
	{
	    $aReg = $this->iniReg();
        $aSubFactor = $this->subfactorModel->obtenerTodos();
        $aResultado = $this->resultadoModel->obtenerTodos();
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        $aCombinacion = $this->resultrespModel->obtenerMaxCombinacion();
        $aReg['idcombinacion'] = $aCombinacion['idcombinacion'] + 1;
        $aData = array(
            'aSubFactor' => $aSubFactor,
            'aResultado' => $aResultado,
            'aRespuesta' => $aRespuesta,
            'aReg' => $aReg
        );
        $header = '';
        $content = $this->load->view('admin/resultresp_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content));
	}
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idresultrespcontador' => $this->input->post('idresultrespcontador'),
                'idresultrespcontador2' => $this->input->post('idresultrespcontador2'),
                'idsubfactor' => $this->input->post('idsubfactor'),
                'boresultrespestado' => 1,
                'idresultado' => $this->input->post('idresultado'),
                'idrespuesta' => $this->input->post('idrespuesta'),
                'idrespuesta2' => $this->input->post('idrespuesta2'),
                'idcombinacion' => $this->input->post('idcombinacion')
            );
        } else {
            $this->aReg = array(
                'idresultrespcontador' => null,
                'idresultrespcontador2' => null,
                'idsubfactor' => null,
                'boresultrespestado' => 1,
                'idresultado' => null,
                'idrespuesta' => null,
                'idrespuesta2' => null,
                'idcombinacion' => null,
            );
        }
        
        return $this->aReg;
    }
    
    public function guardar()
    {
        $aReg = $this->iniReg();
        $aData = array(
            'idresultrespcontador' => $aReg['idresultrespcontador'],
            'idsubfactor' => $aReg['idsubfactor'],
            'boresultrespestado' => $aReg['boresultrespestado'],
            'idresultado' => $aReg['idresultado'],
            'idrespuesta' => $aReg['idrespuesta'],
            'idcombinacion' => $aReg['idcombinacion']
        );
        $idresultresp = $this->resultrespModel->guardar($aData);
        $aData = array(
            'idresultrespcontador' => $aReg['idresultrespcontador2'],
            'idsubfactor' => $aReg['idsubfactor'],
            'boresultrespestado' => $aReg['boresultrespestado'],
            'idresultado' => $aReg['idresultado'],
            'idrespuesta' => $aReg['idrespuesta2'],
            'idcombinacion' => $aReg['idcombinacion']
        );
        $idresultresp = $this->resultrespModel->guardar($aData);
        
        $aCombinacion = $this->resultrespModel->obtenerMaxCombinacion();
        $aReg['idcombinacion'] = $aCombinacion['idcombinacion'] + 1;
        
        $aSubFactor = $this->subfactorModel->obtenerTodos();
        $aResultado = $this->resultadoModel->obtenerTodos();
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        $aData = array(
            'aSubFactor' => $aSubFactor,
            'aResultado' => $aResultado,
            'aRespuesta' => $aRespuesta,
            'aReg' => $aReg
        );
        
        $header = '';
        $content = $this->load->view('admin/resultresp_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content));
    }
}