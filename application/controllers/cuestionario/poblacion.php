<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Poblacion extends Ext_Controller {
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('pregunta_model', 'preguntaModel');
       $this->load->model('informe_model', 'informeModel');
    }

	public function index()
	{
        $header = '';
        $viewPoblacion = $this->load->view('preguntas/poblacion_view', '', true);
		
        return $viewPoblacion;
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
}