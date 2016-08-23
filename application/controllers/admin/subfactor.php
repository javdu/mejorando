<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SubFactor extends Ext_Controller
{
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('admin/Factor_model', 'factorModel');
       $this->load->model('admin/Subfactor_model', 'subfactorModel');
       
       $this->load->library('form_validation');
       
       $this->aReglas = array(
            'subfactor' => array(
                array(
                     'field'   => 'vcsubfactnombre',
                     'label'   => 'Nombre',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'vcsubfactdescrip',
                     'label'   => 'Descripción',
                     'rules'   => 'trim'
                  ),
                array(
                     'field'   => 'idfactor',
                     'label'   => 'Factor',
                     'rules'   => 'trim|required'
                  )
            )
        );
    }
    
    public function index()
	{
        $aFactor = $this->factorModel->obtenerTodos();
        $aSubfactor = $this->subfactorModel->obtenerTodos();
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
        $content = $this->load->view('admin/listsubfactor_view', $aData, true);
        $footer = $this->load->view('backend/footer_view', array(), true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
	}

	public function index1($idpregunta = 0)
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
                'idsubfactor' => $this->input->post('idsubfactor'),
                'vcsubfactnombre' => $this->input->post('vcsubfactnombre'),
                'vcsubfactdescrip' => $this->input->post('vcsubfactdescrip'),
                'vcsubfactestado' => 1,
                'idfactor' => $this->input->post('idfactor')
            );
        } else {
            $this->aReg = array(
                'idsubfactor' => 0,
                'vcsubfactnombre' => '',
                'vcsubfactdescrip' => '',
                'vcsubfactestado' => 1,
                'idfactor' => 0
            );
        }
        
        return $this->aReg;
    }
    
    public function nuevo($idencuesta = 0)
    {
        $aReg = $this->iniReg();
        $aFactor = $this->factorModel->selectTodos($idencuesta);
        
        $aData = array(
            'aFactor' => $aFactor,
            'aReg' => $aReg,
            'accion' => 'Nuevo'
        );
        
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $content = $this->load->view('admin/frmsubfactor_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function editar($idsubfactor)
    {
        $aData = array();
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aReg = $this->subfactorModel->obtenerUno($idsubfactor);
        $aFactor = $this->factorModel->selectTodos();
        
        $aData = array(
            'aFactor' => $aFactor,
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        
        $content = $this->load->view('admin/frmsubfactor_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    {
        $this->form_validation->set_rules($this->aReglas['subfactor']);
        if ($this->form_validation->run() == FALSE) {
            $this->nuevo();
        } else {
            $aReg = $this->iniReg();
            $this->subfactorModel->guardar(array('aReg' => $aReg));
            
            //$this->index();
            redirect('/admin/pregunta/index', 'location');
        }
    }
    
    public function baja($idPregunta)
    {
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aReg = $this->subfactorModel->obtenerUno($idPregunta);
        $aData = array(
            'aReg' => $aReg
        );
        $content = $this->load->view('admin/eliminarsubfactor_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function eliminar()
    {
        $this->subfactorModel->eliminar($this->input->post('idsubfactor'));
        
        //$this->index();
        redirect('/admin/pregunta/index', 'location');
    }
}