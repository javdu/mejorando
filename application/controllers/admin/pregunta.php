<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pregunta extends Ext_Controller {
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('admin/Pregunta_model', 'preguntaModel');
       $this->load->model('admin/Factor_model', 'factorModel');
       $this->load->model('admin/Subfactor_model', 'subfactorModel');
       $this->load->model('Respuesta_Model', 'respuestaModel');
       
    }

	public function index()
	{
        $aFactor = $this->factorModel->obtenerTodos();
        $aSubfactor = $this->subfactorModel->obtenerTodos();
        $aPregunta = $this->preguntaModel->obtenerTodos();
        $aAux = array();
        foreach($aFactor AS $elemFactor) {
           $aAux[$elemFactor['idfactor']] = $elemFactor;
        }
        $aFactor = $aAux;
        $aAux = array();
        foreach($aSubfactor AS $elemSubfactor) {
           $aAux[$elemSubfactor['idsubfactor']] = $elemSubfactor;
        }
        $aSubfactor = $aAux;
        $aAux = array();
        foreach($aPregunta AS $elemPregunta) {
            $aAux[$elemPregunta['idsubfactor']][] = $elemPregunta;
        }
        foreach($aAux AS $idAux => $elemAux) {
            $aSubfactor[$idAux]['pregunta'][] = $elemAux;
        }
        $aAux = array();
        foreach($aSubfactor AS $elemSubfactor) {
            $aAux[$elemSubfactor['idfactor']][] = $elemSubfactor;
        }
        foreach($aAux AS $idAux => $elemAux) {
            $aFactor[$idAux]['subfactor'][] = $elemAux;
        }
        $aData = array(
            'aFactor' => $aFactor
        );
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $content = $this->load->view('admin/listpregunta_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
	}
    
    public function iniReg()
    {
        
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
    
    public function nuevo()
    {
        $aFactor = $this->factorModel->selectTodos();
        $aSubfactor = $this->subfactorModel->selectTodos();
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        
        $aData = array(
            'aFactor' => $aFactor,
            'aSubfactor' => $aSubfactor,
            'aRespuesta' => $aRespuesta
        );
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        
        $content = $this->load->view('admin/nuevopregunta_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    {
        
    }
    
    public function editar()
    {
        $aData = array();
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $content = $this->load->view('admin/editarpregunta_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function eliminar()
    {
        $aData = array();
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $content = $this->load->view('admin/eliminarpregunta_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
}