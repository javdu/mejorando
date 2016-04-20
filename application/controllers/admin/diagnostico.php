<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Diagnostico extends Ext_Controller {
    function __construct()
	{
        parent::__construct();
        $this->load->model('diagnostico_Model', 'diagnosticoModel');
        $this->load->model('persona_model', 'personaModel');
        $this->load->model('pregunta_model', 'preguntaModel');
        $this->load->model('infresp_Model', 'infrespModel');
       
        
       $this->load->library('form_validation');
       $this->load->library('pagination');
       
       $this->aReglas = array(
            'diagnostico' => array(
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
        $config['base_url'] = 'admin/diagnostico/listado/';
        $config['total_rows'] = $this->personaModel->totalPersona();
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
       
        $aPersona = $this->personaModel->obtenerTodos($page, $config['num_links']);
        
        $aData = array(
            'aPersona' => $aPersona
        );
        
        $content = $this->load->view('admin/listdiagpers_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function listadodiagnostico($idalumno = 0)
    {
        $config['base_url'] = 'admin/diagnostico/listadodiagnostico/'.$idalumno.'/';
        $aData = array(
            'idalumno' => $idalumno
        );
        
        $config['total_rows'] = $this->diagnosticoModel->totalDiagnostico($aData);
        $config['per_page'] = '5';
        $config['uri_segment'] = 5;
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
        
        if((bool)$this->uri->segment(5)){
            $page = ($this->uri->segment(5));
        }
        else{
            $page = 0;
        }
        $aDiagnostico = $this->diagnosticoModel->obtenerTodos($page, $config['num_links'], $aData);
        
        $aData = array(
            'aDiagnostico' => $aDiagnostico
        );
        
        $content = $this->load->view('admin/listdiagnostico_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function cuestionario($idinforme = 0)
    {
        $aPregResp = $this->preguntaModel->obtenerTodosInfResp($idinforme);
        $aPreg = $this->preguntaModel->obtenerTodos(0, 1000);
        
        $aData = array(
            'aPreg' => $aPreg,
            'aPregResp' => $aPregResp,
            'idinforme' => $idinforme
        ); 
        
        $content = $this->load->view('admin/frmdiagnostico_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    {
        //var_dump($this->session->userdata('idinforme'));
        $aData = $this->input->post();
        $idinforme = $aData['idinforme'];
        unset($aData['idinforme']);
        $aAux = array();
        if ($aData) {
            foreach ($aData as $clave => $valor) {
                $aAux[] = array(
                    'idinforme' => $idinforme,
                    'idpregunta' => $clave,
                    'idrespuesta' => (int)$valor
                );
            }
    
            $this->infrespModel->eliminar($aAux);
            $this->infrespModel->guardarVarios($aAux);
        }
        
        $this->listado();
    }
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'iddiagnostico' => $this->input->post('iddiagnostico'),
                'vcescnombre' => $this->input->post('vcescnombre'),
                'vcescnro' => $this->input->post('vcescnro'),
                'vcescdirec' => $this->input->post('vcescdirec'),
                'vcesctel' => $this->input->post('vcesctel'),
                'vcesccel' => $this->input->post('vcesccel'),
                'vcescemail' => $this->input->post('vcescemail')
            );
        } else {
            $this->aReg = array(
                'iddiagnostico' => 0,
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
    
    public function formulario($iddiagnostico = 0)
    {
        $aData = array();
        
        if ( (bool) $this->input->post('iddiagnostico') and $iddiagnostico == 0) {
            $aReg = $this->iniReg();
        } else {
            $aData = array(
                'iddiagnostico' => $iddiagnostico
            );
            $aReg = $this->diagnosticoModel->obtenerUno1($aData);
        }
        
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/frmdiagnostico_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function baja($iddiagnostico)
    {
        $aData = array(
            'iddiagnostico' => $iddiagnostico
        );
            
        $aReg = $this->diagnosticoModel->obtenerUno1($aData);
        $aData = array(
            'aReg' => $aReg,
            'accion' => 'Eliminar'
        );
        $content = $this->load->view('admin/eliminardiagnostico_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }

    public function eliminar()
    {
        $this->diagnosticoModel->eliminar($this->input->post('iddiagnostico'));
        
        $this->index();
    }
}