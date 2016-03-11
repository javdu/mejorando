<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Factor extends Ext_Controller
{
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('admin/Factor_model', 'factorModel');
       
       $this->load->library('form_validation');
       
       $this->aReglas = array(
            'factor' => array(
                array(
                     'field'   => 'vcfactnombre',
                     'label'   => 'Nombre',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'vcfactdescrip',
                     'label'   => 'Descripción',
                     'rules'   => 'trim'
                  )
            )
        );
    }
    
    public function index()
	{
        
	}
    
     public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idfactor' => $this->input->post('idfactor'),
                'vcfactnombre' => $this->input->post('vcfactnombre'),
                'vcfactdescrip' => $this->input->post('vcfactdescrip'),
                'vcfactestado' => 1,
                'idencuesta' => 1
            );
        } else {
            $this->aReg = array(
                'idfactor' => 0,
                'vcfactnombre' => '',
                'vcfactdescrip' => '',
                'vcfactestado' => 1,
                'idencuesta' => 1
            );
        }
        
        return $this->aReg;
    }
    
    public function nuevo()
    {
        $aReg = $this->iniReg();
        $aFactor = $this->factorModel->selectTodos();
        
        $aData = array(
            'aFactor' => $aFactor,
            'aReg' => $aReg,
            'accion' => 'Nuevo'
        );
        
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        
        $content = $this->load->view('admin/frmsubfactor_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function formulario($idfactor = 0)
    {
        $aData = array();
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        if ( (bool) $this->input->post('idfactor') and $idfactor == 0) {
            $aReg = $this->iniReg();
        } else {
            $aReg = $this->factorModel->obtenerUno($idfactor);   
        }
        
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        
        $content = $this->load->view('admin/frmfactor_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    {
        $this->form_validation->set_rules($this->aReglas['factor']);
        if ($this->form_validation->run() == FALSE) {
            $this->formulario();
        } else {
            $aReg = $this->iniReg();
            //echo '<pre>';
            //var_dump($aReg);
            $this->factorModel->guardar($aReg);
            redirect('/admin/pregunta/index', 'location');
        }
    }
    
    public function baja($idfactor = 0)
    {
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aReg = $this->factorModel->obtenerUno($idfactor);
        $aData = array(
            'aReg' => $aReg
        );
        $content = $this->load->view('admin/eliminarfactor_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function eliminar()
    {
        $this->factorModel->eliminar($this->input->post('idfactor'));
        
        redirect('/admin/pregunta/index', 'location');
    }
}