<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Preguntas1 extends Ext_Controller {
    
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('pregunta_model', 'preguntaModel');
       $this->load->model('informe_model', 'informeModel');
       $this->load->model('infresp_Model', 'infrespModel');
       $this->load->model('usuario_Model', 'usuarioModel');
       
       $this->load->library('pagination');          
    }
    
    public function formulario()
    {
        $config['base_url'] = 'cuestionario/preguntas1/guardar/';
        $config['total_rows'] = $this->preguntaModel->totalPregunta();
        $config['per_page'] = '10';
        $config['uri_segment'] = 4;
        $config['num_links'] = 10;
        
        /**
        * pagination-sm = pequeño
        * pagination-md = mediano
        * pagination-lg = grande
        */
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
        
        $aPreg = $this->preguntaModel->obtenerTodos($page, $config['num_links']);
        
        $aData = array(
            'aPreg' => $aPreg,
            'aReg' => array(
                'idpersona' => $this->session->userdata('idpersona'),
                'idalumno' => $this->session->userdata('idalumno')
            )
        ); 
        
        $viewPreguntas1 = $this->load->view('preguntas/preguntas1_view', $aData, true);
        
        echo $viewPreguntas1;
    }
    
    
    
    public function guardar()
    {
        //var_dump($this->session->userdata('idinforme'));
        $aData = $this->input->post();
        $aAux = array();
        if ($aData) {
            foreach ($aData as $clave => $valor) {
                $aAux[] = array(
                    'idinforme' => $this->session->userdata('idinforme'),
                    'idpregunta' => $clave,
                    'idrespuesta' => (int)$valor
                );
            }
    
            $this->infrespModel->eliminar($aAux);
            $this->infrespModel->guardarVarios($aAux);
        }
        
        $this->formulario();
    }
    
    public function guardarContinuar()
    {
        $aData = $this->input->post();
        $aAux = array();
        if ($aData) {
            foreach ($aData as $clave => $valor) {
                $aAux[] = array(
                    'idinforme' => $this->session->userdata('idinforme'),
                    'idpregunta' => $clave,
                    'idrespuesta' => (int)$valor
                );
            }
            $this->infrespModel->eliminar($aAux);
            $this->infrespModel->guardarVarios($aAux);
        }
        
        $aParams = array(
            'idinforme' => $this->session->userdata('idinforme'),
            'boinfestado' => 2
        );
        
        $idinforme = $this->informeModel->actualizar($aParams);
        
        redirect('/cuestionario/resultados/index');
    }
}