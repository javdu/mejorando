<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Persona extends Ext_Controller {
    
    function __construct()
	{
        parent::__construct();
        $this->load->model('persona_model', 'personaModel');
        $this->load->model('alumno_model', 'alumnoModel');
        $this->load->model('parentesco_model', 'parentescoModel');
        $this->load->model('escuela_Model', 'escuelaModel');
        $this->load->model('escuelagrado_Model', 'escuelagradoModel');
        $this->load->model('TutAlum_Model', 'tutalumModel');
        
        $this->load->library('form_validation');
        
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
                ),   
                array(
                     'field'   => 'idescuela',
                     'label'   => 'Escuela',
                     'rules'   => 'required'
                ),   
                array(
                     'field'   => 'idescuelagrado',
                     'label'   => 'Grado',
                     'rules'   => 'required'
                )
            ),
            'tutalum' => array(  
                array(
                     'field'   => 'idparentesco',
                     'label'   => 'Parentesco',
                     'rules'   => 'required'
                )
            ),
            'buscarPersona' => array(
                array(
                    'field'   => 'inperdni',
                    'label'   => 'DNI',
                    'rules'   => 'trim|required|numeric|exact_length[8]'
                )
            )
        );
    }

	public function index()
	{
	    $viewPersona = $this->load->view(
            'abms/form_persona_view', 
            array(
                'aReg' => array_merge(
                    $this->iniRegPersona(), 
                    array(
                        'idescuela' => $this->input->post('idescuela'),
                        'idescuelagrado' => $this->input->post('idescuelagrado'),
                        'parentesco' => $this->input->post('parentesco')
                    )
                ),
                'aEscuelas' => $this->escuelaModel->obtenerTodos(),
                'aEscuelaGrados' => $this->escuelagradoModel->obtenerTodos(),
                'aParent' => $this->parentescoModel->obtenerTodosNombRever()
            ), 
            false
        );
        
		return $viewPersona;
	}
    
    public function iniRegPersona()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'vcpernombre' => strtoupper($this->input->post('vcpernombre')),
                'inperdni' => $this->input->post('inperdni'),
                'dtperfechnac' => $this->input->post('dtperfechnac'),
                'vcperdom' => $this->input->post('vcperdom'),
                'vcpertelcodarea' => $this->input->post('vcpertelcodarea'),
                'vcpertel' => $this->input->post('vcpertel'),
                'vcpercelcodarea' => $this->input->post('vcpercelcodarea'),
                'vcpercel' => $this->input->post('vcpercel'),
                'boperestado' => 1
            );
        } else {
            $this->aReg = array(
                'vcpernombre' => '',
                'inperdni' => null,
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
    
    public function iniRegAlumno()
    {
        if ((bool)$this->input->post()) {
            
        } else {
            $this->aReg = array(
                'idpersona' => null,
                'idescuela' => null,
                'idescuelagrado' => null,
                'boalumestado' => null
            );
        }
        
        return $this->aReg;
    }
    
    public function guardar()
    {
        $viewPreguntas1 = $this->load->view('preguntas/preguntas1_view', '', true);
        
        echo $viewPreguntas1;
    }
    
    public function guardarPersona()
    {
        $this->form_validation->set_rules($this->aReglas['persona']);
        if ($this->form_validation->run() == FALSE) {
            
            $aData = array(
                'aReg' => array_merge(
                    $this->iniRegPersona(), 
                    array(
                        'idescuela' => $this->input->post('idescuela'),
                        'idescuelagrado' => $this->input->post('idescuelagrado'),
                        'parentesco' => $this->input->post('parentesco')
                    )
                ),
                'aEscuelas' => $this->escuelaModel->obtenerTodos(),
                'aEscuelaGrados' => $this->escuelagradoModel->obtenerTodos(),
                'aParent' => $this->parentescoModel->obtenerTodos()
            );
            
            echo $this->load->view('abms/form_persona_view', $aData, true);
        } else {
            
            $idPersona = $this->personaModel->guardar($this->iniRegPersona());
            
            $aData = array(
                'idpersona' => $idPersona,
                'idescuela' => $this->input->post('idescuela'),
                'idescuelagrado' => $this->input->post('idescuelagrado'),
                'boalumestado' => 1
            );
            $idAlumno = $this->alumnoModel->guardar($aData);
            
            $aData = array(
                'botutalumestado' => 1,
                'idtutor' => $this->input->post('idescuela'),
                'idalumno' => $this->input->post('idalumno'),
                'idparentesco' => $this->input->post('idparentesco')
            );
            
            $idTutAlum = $this->tutalumModel->guardar($aData);
            
            $aData = array(
                'idalumno' => $idAlumno,
                'vcpernombre' => $this->input->post('vcpernombre'),
                'inperdni' => $this->input->post('inperdni')
            );
            
            $viewPersona = $this->load->view('abms/mostrarpersona_view', array('aAlumno' => $aData), true);
            
            echo $viewPersona;
        }
    }
    
    public function guardartutalum()
    {
        $this->form_validation->set_rules($this->aReglas['tutalum']);
        if ($this->form_validation->run() == FALSE) {
            $aData = $this->input->post();
            $aAlumno = $this->alumnoModel->obtenerUno($aData);
            $aData['aParent'] = $this->parentescoModel->obtenerTodos();
            $aData['aReg'] = $aAlumno;
            $aData['idparentesco'] = null;
            $viewPersona = $this->load->view('abms/formasociaralumno_view', $aData, true);
        } else {
            $aData['botutalumestado'] = 1;
            $aData['idtutor'] = $this->session->userdata('idtutor');
            $aData['idalumno'] = $this->input->post('idalumno');
            $aData['idparentesco'] = $this->input->post('idparentesco');
            
            $this->tutalumModel->guardar($aData);
            
            $aData = array();
            $aData['inperdni'] = $this->input->post('inperdni');
            $aData['idtutor'] = $this->session->userdata('idtutor');
            
            $aAlumno = $this->alumnoModel->obtenerFamiliarACargo($aData);
            $viewPersona = $this->load->view('abms/mostrarpersona_view', array('aAlumno' => $aAlumno), true);
            
            /*
            $aData['idtutor'] = $this->session->userdata('idtutor');
            $aAlumno = $this->alumnoModel->obtenerFamiliarACargo($aData);
            $viewPersona = $this->load->view('abms/mostrarpersona_view', array('aAlumno' => $aAlumno), true);
            */
        }
        
        echo $viewPersona;
    }
    
    public function buscarPersona()
    {
        $this->form_validation->set_rules($this->aReglas['buscarPersona']);
        
        if ($this->form_validation->run() == FALSE) {
            $aData = array(
                'inperdni' => ((bool) $this->input->post('inperdni'))? $this->input->post('inperdni') : ''
            );
            $viewPersona = $this->load->view('preguntas/buscadorninio_view', $aData, true);
        }
        else
        {
            $aData = $this->input->post();
            $aData['idtutor'] = $this->session->userdata('idtutor');
            $aAlumno = $this->alumnoModel->obtenerFamiliarACargo($aData);
            if ( isset($aAlumno) ) {
                $viewPersona = $this->load->view('abms/mostrarpersona_view', array('aAlumno' => $aAlumno), true);
            } else {
                $aData = $this->input->post();
                $aAlumno = $this->alumnoModel->obtenerUno($aData);
                if ( isset($aAlumno) ) {
                    $aData['aParent'] = $this->parentescoModel->obtenerTodos();
                    $aData['aReg'] = $aAlumno;
                    $aData['idparentesco'] = null;
                    $viewPersona = $this->load->view('abms/formasociaralumno_view', $aData, true);
                } else {
                    $aData = array(
                        'msj' => '<div class="alert alert-info"><p>El niño no se encuentra registrado.</p></div>',
                        'inperdni' => ((bool) $this->input->post('inperdni'))? $this->input->post('inperdni') : ''
                    );
                    $viewPersona = $this->load->view('preguntas/buscadorninio_view', $aData, true);   
                }
            }
        }
        
        echo $viewPersona;
    }
}