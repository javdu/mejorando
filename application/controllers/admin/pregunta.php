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
       
       $this->load->library('form_validation');
       
       $this->aReglas = array(
            'pregunta' => array(
                array(
                     'field'   => 'vcpregnombre',
                     'label'   => 'Nombre',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'idfactor',
                     'label'   => 'Factor',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'idsubfactor',
                     'label'   => 'Subfactor',
                     'rules'   => 'trim|required'
                  )
            )
        );
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
        
        //echo '<pre>';
        //var_dump($aFactor);
        $aData = array(
            'aFactor' => $aFactor
        );
        $header = $this->load->view('backend/navbar_view', array(), true);;
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/listpregunta_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
	}
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idpregunta' => $this->input->post('idpregunta'),
                'vcpregnombre' => $this->input->post('vcpregnombre'),
                'idfactor' => $this->input->post('idfactor'),
                'idsubfactor' => $this->input->post('idsubfactor'),
                'bopregestado' => 1
            );
        } else {
            $this->aReg = array(
                'idpregunta' => 0,
                'vcpregnombre' => null,
                'idfactor' => 0,
                'idsubfactor' => 0,
                'bopregestado' => 1
            );
        }
        
        return $this->aReg;
    }
    
    public function guardar()
    {
        $this->form_validation->set_rules($this->aReglas['pregunta']);
        if ($this->form_validation->run() == FALSE) {
            $this->nuevo();
        } else {
            $aReg = $this->iniReg();
            unset($aReg['idfactor']);
            $this->preguntaModel->guardar(array('aReg' => $aReg));
            $this->index();
        }
    }
    
    public function nuevo()
    {
        $aReg = $this->iniReg();
        $aFactor = $this->factorModel->selectTodos();
        $aSubfactor = $this->subfactorModel->selectTodos(array('idfactor' => $aReg['idfactor']));
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        
        $aData = array(
            'aFactor' => $aFactor,
            'aSubfactor' => $aSubfactor,
            'aRespuesta' => $aRespuesta,
            'aReg' => $aReg,
            'accion' => 'Nueva'
        );
        
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        
        $content = $this->load->view('admin/nuevopregunta_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function loadSubFactor()
    {
        if ($this->input->post('idfactor') == null) {
            echo '';
        } else {
            $aData = array(
                'idfactor' => $this->input->post('idfactor')
            );
            $aSubfactor = $this->subfactorModel->selectTodos($aData);
            $aSubfactor = array('' => 'Seleccionar') + $aSubfactor;
            $stringAux = form_dropdown('idsubfactor', $aSubfactor, $this->input->post('idsubfactor'), array('class' => 'form-control')); 
echo <<<EOT
<div class="form-group col-xs-12">
    <label>Subfactor</label>
    {$stringAux}
</div>
EOT;
        }
    }
    
    public function editar($idPregunta)
    {
        $aData = array();
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aReg = $this->preguntaModel->obtenerUno($idPregunta);
        $aFactor = $this->factorModel->selectTodos();
        $aSubfactor = $this->subfactorModel->selectTodos(array('idfactor' => $aReg['idfactor']));
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        
        $aData = array(
            'aFactor' => $aFactor,
            'aSubfactor' => $aSubfactor,
            'aRespuesta' => $aRespuesta,
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        
        $content = $this->load->view('admin/nuevopregunta_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function baja($idPregunta)
    {
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aReg = $this->preguntaModel->obtenerUno($idPregunta);
        $aData = array(
            'aReg' => $aReg
        );
        $content = $this->load->view('admin/eliminarpregunta_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }

    public function eliminar()
    {
        $this->preguntaModel->eliminar($this->input->post('idpregunta'));
        
        $this->index();
    }
    
    public function respuesta($idpregunta)
    {
         redirect('/admin/pregresp/index/'.$idpregunta, 'location');
    }
}