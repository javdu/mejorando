<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Escuela extends Ext_Controller {
    function __construct()
	{
	    parent::__construct();
        $this->load->model('escuela_Model', 'escuelaModel');
        
       $this->load->library('form_validation');
       $this->load->library('pagination');
       
       $this->aReglas = array(
            'escuela' => array(
                array(
                     'field'   => 'vcescnombre',
                     'label'   => 'DNI',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'vcescnro',
                     'label'   => 'Nro. establecimiento',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'vcescdirec',
                     'label'   => 'Dirección',
                     'rules'   => 'trim|required'
                  ),   
                array(
                     'field'   => 'vcesctel',
                     'label'   => 'Tel.',
                     'rules'   => 'trim'
                  ),
                array(
                     'field'   => 'vcesccel',
                     'label'   => 'Celúlar',
                     'rules'   => 'trim'
                  ),
                array(
                     'field'   => 'vcescemail',
                     'label'   => 'Email',
                     'rules'   => 'trim|valid_email'
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
        $config['base_url'] = 'admin/escuela/listado/';
        $config['total_rows'] = $this->escuelaModel->totalEscuela();
        $config['per_page'] = '5';
        $config['uri_segment'] = 4;
        $config['num_links'] = 5;
        
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
        
        $aEscuela = $this->escuelaModel->obtenerTodosABM($page, $config['num_links']);
        
        $aData = array(
            'aEscuela' => $aEscuela
        );
        
        $content = $this->load->view('admin/listescuela_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idescuela' => $this->input->post('idescuela'),
                'vcescnombre' => $this->input->post('vcescnombre'),
                'vcescnro' => $this->input->post('vcescnro'),
                'vcescdirec' => $this->input->post('vcescdirec'),
                'vcesctel' => $this->input->post('vcesctel'),
                'vcesccel' => $this->input->post('vcesccel'),
                'vcescemail' => $this->input->post('vcescemail')
            );
        } else {
            $this->aReg = array(
                'idescuela' => 0,
                'vcescnombre' => '',
                'vcescnro' => '',
                'vcescdirec' => '',
                'vcesctel' => '',
                'vcesccel' => '',
                'vcescemail' => ''
            );
        }
        
        return $this->aReg;
    }
    
    public function formulario($idescuela = 0)
    {
        $aData = array();
        
        if ( (bool) $this->input->post('idescuela') and $idescuela == 0) {
            $aReg = $this->iniReg();
        } else {
            $aData = array(
                'idescuela' => $idescuela
            );
            $aReg = $this->escuelaModel->obtenerUno1($aData);
        }
        
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/frmescuela_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    {
        $this->form_validation->set_rules($this->aReglas['escuela']);
        if ($this->form_validation->run() == FALSE) {
            $this->formulario();
        } else {
            $aReg = $this->iniReg();
            $idPersona = $this->escuelaModel->guardarABM($aReg);
            $this->index();
        }
    }
    
    public function baja($idescuela)
    {
        $aData = array(
            'idescuela' => $idescuela
        );
            
        $aReg = $this->escuelaModel->obtenerUno1($aData);
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Eliminar'
        );
        $content = $this->load->view('admin/eliminarescuela_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }

    public function eliminar()
    {
        $this->escuelaModel->eliminar($this->input->post('idescuela'));
        
        $this->index();
    }
}