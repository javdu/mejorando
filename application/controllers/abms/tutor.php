<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tutor extends Ext_Controller {
    
    function __construct()
	{
        parent::__construct();
        $this->load->model('persona_model', 'personaModel');
        $this->load->model('alumno_model', 'alumnoModel');
        $this->load->model('parentesco_model', 'parentescoModel');
        $this->load->model('escuela_Model', 'escuelaModel');
        $this->load->model('escuelagrado_Model', 'escuelagradoModel');
        
        $this->load->library('form_validation');
        
        $this->aReglas = array(
            'persona' => array(
                array(
                     'field'   => 'inperdni',
                     'label'   => 'DNI',
                     'rules'   => 'required'
                  ),
                array(
                     'field'   => 'vcpernombre',
                     'label'   => 'Nombre',
                     'rules'   => 'required'
                  ),
                array(
                     'field'   => 'dtperfechnac',
                     'label'   => 'Fecha de nacimiento',
                     'rules'   => 'required'
                  ),   
                array(
                     'field'   => 'vcperdom',
                     'label'   => 'Domicilio',
                     'rules'   => 'required'
                  ),
                array(
                     'field'   => 'vcpertelcodarea',
                     'label'   => 'Teléfono codigo de area',
                     'rules'   => 'required'
                  ),
                array(
                     'field'   => 'vcpertel',
                     'label'   => 'Teléfono',
                     'rules'   => 'required'
                  ),
                array(
                     'field'   => 'vcpercelcodarea',
                     'label'   => 'Celular codigo de area',
                     'rules'   => 'required'
                  ),   
                array(
                     'field'   => 'vcpercel',
                     'label'   => 'Celular',
                     'rules'   => 'required'
                )
            ),
            'buscarPersona' => array(
                array(
                    'field'   => 'inperdni',
                    'label'   => 'DNI',
                    'rules'   => 'trim|required|integer|exact_length[8]'
                )
            )
        );
    }    

	public function index()
	{
	    $aEscuelas = $this->escuelaModel->obtenerTodos();
        $aEscuelaGrados = $this->escuelagradoModel->obtenerTodos();
        $aParent = $this->parentescoModel->obtenerTodos();
        $viewPersona = $this->load->view(
            'abms/formtutor_view', 
            array(
                'aEscuelas' => $aEscuelas,
                'aEscuelaGrados' => $aEscuelaGrados,
                'aParent' => $aParent
            ), 
            false
        );
        
		return $viewPersona;
	}
    
    public function guardar()
    {
        $viewPreguntas1 = $this->load->view('preguntas/preguntas1_view', '', true);
        
        echo $viewPreguntas1;
    }
    
    public function guardarbuscar()
    {
        $aPost = $this->input->post();
        $aData = array(
            'vcpernombre' => $this->input->post('vcpernombre'),
            'inperdni' => $this->input->post('inperdni'),
            'dtperfechnac' => $this->input->post('dtperfechnac'),
            'vcperdom' => $this->input->post('vcperdom'),
            'vcpertelcodarea' => $this->input->post('vcpertelcodarea'),
            'vcpertel' => $this->input->post('vcpertel'),
            'vcpercelcodarea' => $this->input->post('vcpercelcodarea'),
            'vcpercel' => $this->input->post('vcpercel'),
            'boperestado' => 1
        );
        
        $idPersona = $this->personaModel->guardar($aData);
        
        $aData = array(
            'idpersona' => $idPersona,
            'idescuela' => $this->input->post('idescuela'),
            'idescuelagrado' => $this->input->post('idescuelagrado'),
            'boalumestado' => 1
        );
        
        $idAlumno = $this->alumnoModel->guardar($aData);
        
        $viewPersona = $this->load->view('abms/mostrarpersona_view', null, true);
        
        echo $viewPersona;
    }
    
    public function buscarPersona()
    {
        $aData = $this->input->post();
        $aAlumno = $this->alumnoModel->obtenerUno($aData);
        $this->form_validation->set_rules($this->aReglas['buscarPersona']);
        
        if ($this->form_validation->run() == FALSE) {
            $viewPersona = $this->load->view('preguntas/buscadorninio_view', array(), true);
        }
        else
        {
            if ( isset($aAlumno) ) {
                $viewPersona = $this->load->view('abms/mostrarpersona_view', array('aAlumno' => $aAlumno), true);
            } else {
                $aData = array(
                    'msj' => '<div class="alert alert-info"><p>El niño no se encuentra registrado.</p></div>'
                );
                $viewPersona = $this->load->view('preguntas/buscadorninio_view', $aData, true);
            }
        }
        
        echo $viewPersona;
    }
}