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
                'idencuesta' => $this->input->post('idencuesta')
            );
        } else {
            $this->aReg = array(
                'idfactor' => 0,
                'vcfactnombre' => '',
                'vcfactdescrip' => '',
                'vcfactestado' => 1,
                'idencuesta' => 0
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
    
    public function formulario($idfactor = 0, $idencuesta = 0)
    {
        $aData = array();
        
        if ( (bool) $this->input->post('idfactor') || $idfactor == 0) {
            $this->aReg = $this->iniReg();
            $this->aReg['idencuesta'] = $idencuesta;
            /*echo '<pre>';
            var_dump($this->aReg);
            die;*/
        } else {
            $this->aReg = $this->factorModel->obtenerUno($idfactor);   

            
        }
        
        $aData = array(
            'aReg' => $this->aReg,
            'accion' => 'Editar'
        );
        
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
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
            $this->factorModel->guardar($aReg);
            redirect('/admin/pregunta/index/'.$aReg['idencuesta'], 'location');
        }
    }
    
    public function baja($idfactor = 0, $idencuesta = 0)
    {
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $aReg = $this->factorModel->obtenerUno($idfactor);
        $aData = array(
            'aReg' => $aReg,
            'idencuesta' => $idencuesta
        );
        $content = $this->load->view('admin/eliminarfactor_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function eliminar()
    {
        $this->factorModel->eliminar($this->input->post('idfactor'));
        
        redirect('/admin/pregunta/index/'.$this->input->post('idencuesta'), 'location');
    }
}