<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tutor extends CI_Controller {
    
    function __construct()
	{
        parent::__construct();
        
        $this->load->model('Tutor_Model', 'tutorModel');
        $this->load->model('Rol_Model', 'rolModel');
        $this->load->model('Persona_Model', 'personaModel');
        
        $this->load->library('form_validation');
        $this->load->library('pagination');
        
        $this->aReglas = array(
            'persona' => array(
                array(
                     'field'   => 'inperdni',
                     'label'   => 'DNI',
                     'rules'   => 'trim|required|numeric|exact_length[8]'
                  ),
                array(
                     'field'   => 'vcpernombre',
                     'label'   => 'Nombre',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'dtperfechnac',
                     'label'   => 'Fecha de nacimiento',
                     'rules'   => 'trim|required'
                  ),   
                array(
                     'field'   => 'vcperdom',
                     'label'   => 'Domicilio',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'vcpertelcodarea',
                     'label'   => 'Teléfono codigo de area',
                     'rules'   => 'trim|exact_length[3]|numeric'
                  ),
                array(
                     'field'   => 'vcpertel',
                     'label'   => 'Teléfono',
                     'rules'   => 'trim|numeric'
                  ),
                array(
                     'field'   => 'vcpercelcodarea',
                     'label'   => 'Celular codigo de area',
                     'rules'   => 'trim|exact_length[3]|numeric'
                  ),   
                array(
                     'field'   => 'vcpercel',
                     'label'   => 'Celular',
                     'rules'   => 'trim|numeric'
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
        $config['base_url'] = 'admin/tutor/listado/';
        $config['total_rows'] = $this->tutorModel->totalTutor();
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
        
        $aPersona = $this->tutorModel->obtenerTodos($page, $config['num_links']);
        
        $aData = array(
            'aPersona' => $aPersona
        );
        
        $content = $this->load->view('admin/listtutor_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $fechaAux = $this->input->post('dtperfechnac');
            $fecha = '';
            if (!empty($fechaAux)) {
                list($dia, $mes, $year) = explode("/", $fechaAux);
                $fecha = $year."-".$mes."-".$dia;
            }
            
            $this->aReg = array(
                'idpersona' => $this->input->post('idpersona'),
                'vcpernombre' => $this->input->post('vcpernombre'),
                'inperdni' => $this->input->post('inperdni'),
                'dtperfechnac' => $fecha,
                'vcperdom' => $this->input->post('vcperdom'),
                'vcpertelcodarea' => $this->input->post('vcpertelcodarea'),
                'vcpertel' => $this->input->post('vcpertel'),
                'vcpercelcodarea' => $this->input->post('vcpercelcodarea'),
                'vcpercel' => $this->input->post('vcpercel'),
                'boperestado' => 1
            );
        } else {
            $this->aReg = array(
                'idpersona' => 0,
                'vcpernombre' => '',
                'inperdni' => '',
                'dtperfechnac' => null,
                'vcperdom' => '',
                'vcpertelcodarea' => '',
                'vcpertel' => '',
                'vcpercelcodarea' => '',
                'vcpercel' => '',
                'boperestado' => 1
            );
        }
        
        return $this->aReg;
    }
    
    public function iniRegTutor()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idtutor' => $this->input->post('idtutor'),
                'idpersona' => $this->input->post('idpersona'),
                'botutestado' => 1
            );
        } else {
            $this->aReg = array(
                'idtutor' => 0,
                'dttutfecha' => date('Y-m-d'),
                'idpersona' => 0,
                'botutestado' => 1
            );
        }
        
        return $this->aReg;
    }
    
    public function formulario($idtutor = 0)
    {
        $idtutor = ((bool)$this->input->post('idtutor'))? $this->input->post('idtutor') : $idtutor;
        if ($idtutor == 0) {
            $aReg = $this->iniReg();
            $aRegTutor = $this->iniRegTutor();
            $aReg = array_merge($aReg, $aRegTutor);
            
        } else {
            $aData['idtutor'] = $idtutor;
            $aReg = $this->tutorModel->obtenerUno($aData);
            $date = date_create($aReg['dtperfechnac']);
            $aReg['dtperfechnac'] = date_format($date, 'd/m/Y');
        }
        
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/frmtutor_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    {
        $this->form_validation->set_rules($this->aReglas['persona']);
        if ($this->form_validation->run() == FALSE) {
            $this->formulario();
        } else {
            if ($this->input->post('idtutor') == 0){
                $aReg = $this->iniReg();
                $aRegTutor = $this->iniRegTutor();
                $idPersona = $this->personaModel->guardarABM($aReg);
                $aRegTutor['idpersona'] = $idPersona;
                $aRegTutor['dttutfecha'] = date('Y-m-d');
                $this->tutorModel->guardar($aRegTutor);
            } else {
                $aReg = $this->iniReg();
                $aRegTutor = $this->iniRegTutor();
                $idPersona = $this->personaModel->guardarABM($aReg);
                $idTutor = $this->tutorModel->guardar($aRegTutor);
            }
            
            $this->index();
        }
    }
    
    public function baja($idtutor)
    {
        $aData['idtutor'] = $idtutor;
        $aReg = $this->tutorModel->obtenerUno($aData);
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/eliminartutor_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function eliminar()
    {
        $aData['idtutor'] = $this->input->post('idtutor');
        $this->tutorModel->eliminar($aData);
        $aData['idpersona'] = $this->input->post('idpersona');
        $this->personaModel->eliminar($aData);
        
        $this->index();
    }
}