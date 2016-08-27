<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Encuesta extends Ext_Controller {
    function __construct()
	{
	    parent::__construct();
        $this->load->model('encuesta_Model', 'encuestaModel');
        
       $this->load->library('form_validation');
       $this->load->library('pagination');
       
       $this->aReglas = array(
            'encuesta' => array(
                array(
                     'field'   => 'vcencnombre',
                     'label'   => 'Nombre',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'vcencdescrip',
                     'label'   => 'Descripción',
                     'rules'   => 'trim|required'
                  )
            )
        );
    }

	public function index()
	{
	    $this->listado();
	}
    
    public function listado()
    {
        $config['base_url'] = 'admin/encuesta/listado/';
        $config['total_rows'] = $this->encuestaModel->totalEncuesta();
        $config['per_page'] = '10';
        $config['uri_segment'] = 4;
        $config['num_links'] = 10;
        
        $config['full_tag_open'] = '<ul class="pagination pagination-md">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="nropaginacion">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active nropaginacion"><span>';
        $config['cur_tag_close'] = '<span></span></span></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = '«';
        $config['prev_link'] = '‹';
        $config['last_link'] = '»';
        $config['next_link'] = '›';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>'; 
        
        $this->pagination->initialize($config);
        
        if((bool)$this->uri->segment(4)){
            $page = ($this->uri->segment(4)) ;
        }
        else{
            $page = 0;
        }
        
        $aEncuesta = $this->encuestaModel->obtenerTodos($page, $config['num_links']);
        
        $aData = array(
            'aEncuesta' => $aEncuesta
        );
        
        $content = $this->load->view('encuesta/listencuesta_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idencuesta' => $this->input->post('idencuesta'),
                'vcencnombre' => strtoupper($this->input->post('vcencnombre')),
                'vcencdescrip' => strtoupper($this->input->post('vcencdescrip')),
                'dtencfecha' => $this->input->post('dtencfecha'),
                'vcencestado' => 1
            );
        } else {
            $this->aReg = array(
                'idencuesta' => 0,
                'vcencnombre' => '',
                'vcencdescrip' => '',
                'dtencfecha' => '',
                'vcencestado' => 1
            );
        }
        
        return $this->aReg;
    }
    
    public function formulario($idencuesta = 0)
    {
        $aData = array();
        
        if ( (bool) $this->input->post('idencuesta') || $idencuesta == 0) {
            $aReg = $this->iniReg();
        } else {
            $aData = array(
                'idencuesta' => $idencuesta
            );
            $aReg = $this->encuestaModel->obtenerUno($aData);
        }
        
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('encuesta/frmencuesta_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    {
        $this->form_validation->set_rules($this->aReglas['encuesta']);
        
        if ($this->form_validation->run() == FALSE) {
            $this->formulario();
        } else {
            $aReg = $this->iniReg();
            $idEncuesta = $this->encuestaModel->guardar($aReg);
            $this->index();
        }
    }
    
    public function baja($idencuesta)
    {
        $aData = array(
            'idencuesta' => $idencuesta
        );
            
        $aReg = $this->encuestaModel->obtenerUno($aData);
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Eliminar'
        );
        $content = $this->load->view('encuesta/eliminarencuesta_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }

    public function eliminar()
    {
        $this->encuestaModel->eliminar($this->input->post('idencuesta'));
        
        $this->index();
    }
}