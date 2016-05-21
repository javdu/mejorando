<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario extends CI_Controller {
    
    function __construct()
	{
        parent::__construct();
        $this->load->model('persona_model', 'personaModel');
        $this->load->model('alumno_model', 'alumnoModel');
        $this->load->model('parentesco_model', 'parentescoModel');
        $this->load->model('escuela_model', 'escuelaModel');
        $this->load->model('escuelagrado_model', 'escuelagradoModel');
        $this->load->model('rol_model', 'rolModel');
        $this->load->model('docesc_model', 'docEscModel');
        $this->load->model('usuario_model', 'usuarioModel');
        $this->load->model('tutalum_model', 'tutAlumModel');
        $this->load->model('tutor_model', 'tutorModel');
                
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        
        $this->aReglas = array(
            'persona' => array(
                array(
                     'field'   => 'idrol',
                     'label'   => 'Yo soy',
                     'rules'   => 'required'
                  ),
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
            ),
            'usuario' => array(
                array(
                     'field'   => 'vcusunombre',
                     'label'   => 'Usuario',
                     'rules'   => 'trim|required|numeric|exact_length[8]'
                  ),
                array(
                     'field'   => 'vcusuclave',
                     'label'   => 'Clave',
                     'rules'   => 'trim|required|min_length[4]'
                  ),
                array(
                     'field'   => 'vcusuemail',
                     'label'   => 'Email',
                     'rules'   => 'trim|required|valid_email'
                  )
            ),
            'tutor' => array(
                array(
                     'field'   => 'inperdni',
                     'label'   => 'Documento',
                     'rules'   => 'required|numeric|exact_length[8]'
                  )
            )
        );
    }    

	public function index()
	{
        $aEscuelas = $this->escuelaModel->obtenerTodos();
        $aEscuelaGrados = $this->escuelagradoModel->obtenerTodos();
        $aRol = $this->rolModel->obtenerTodosTutores();
        $viewPersona = $this->load->view(
            'abms/formusuariopersona_view',
            array(
                'aReg' => $this->iniReg(),
                'aEscuelas' => $aEscuelas,
                'aEscuelaGrados' => $aEscuelaGrados,
                'aRol' => $aRol
            ), 
            false
        );
        
		return $viewPersona;
	}
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idrol' => $this->input->post('idrol'),
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
                'idrol' => null,
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
    
    public function iniRegUsuario()
    {
        if ((bool)$this->input->post('form-usuario')) {
            $this->aReg = array(
                'vcusunombre' => $this->input->post('vcusunombre'),
                'vcusuclave' => $this->input->post('vcusuclave'),
                'vcusuemail' => $this->input->post('vcusuemail'),
                'bousuestado' => 1
            );
        } else {
            $this->aReg = array(
                'vcusunombre' => null,
                'vcusuclave' => '',
                'vcusuemail' => null,
                'bousuestado' => 1
            );
        }
        
        return $this->aReg;
    }
    
    public function iniRegTutor()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idtutor' => 1,//$this->input->post('idtutor'),
                'inperdni' => $this->input->post('inperdni')
            );
        } else {
            $this->aReg = array(
                'idtutor' => 1,
                'inperdni' => null
            );
        }
        
        return $this->aReg;
    }
    
    public function iniRegTutAlum()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'botutalumestado' => 1,
                'idtutor' => $this->input->post('idtutor'),
                'idalumno' => null,
                'idparentesco' => 1
            );
        } else {
            $this->aReg = array(
                'botutalumestado' => 1,
                'idtutor' => 1,
                'idalumno' => null,
                'idparentesco' => 1
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
            $aEscuelas = $this->escuelaModel->obtenerTodos();
            $aEscuelaGrados = $this->escuelagradoModel->obtenerTodos();
            $aParent = $this->parentescoModel->obtenerTodos();
            $aRol = $this->rolModel->obtenerTodos();
            $view = $this->load->view(
                'abms/formusuariopersona_view', 
                array(
                    'aReg' => $this->iniReg(),
                    'aEscuelas' => $aEscuelas,
                    'aEscuelaGrados' => $aEscuelaGrados,
                    'aParent' => $aParent,
                    'aRol' => $aRol
                ), 
                true
            ); 
        }
        else
        {
            $aData = $this->iniReg();
            $idpersona = $this->personaModel->guardar($aData);
            
            $aData = array(
                'dttutfecha' => date("Y-m-d"),
                'botutestado' => 1,
                'idpersona' => $idpersona
            );
            $idTutor = $this->tutorModel->guardar($aData);
            
            $aReg = array();
            $aReg = $this->iniRegUsuario();
            $aReg['idpersona'] = $idpersona;
            $view = $this->load->view(
                'abms/formusuario_view', 
                array(
                    'aReg' => $aReg
                ), 
                true
            );
            
            /*
            switch ($this->input->post('idrol')) {
                case 2:
                    $aEscuelas = $this->escuelaModel->obtenerTodos();
                    $aParams = array('idDocente' => 1);
                    $aDocEsc = $this->docEscModel->obtenerEscPorDoc($aParams);
                    $view = $this->load->view(
                        'abms/formusuariodocente_view', 
                        array(
                            'aReg' => array('iddocente' => 1),
                            'aEscuelas' => $aEscuelas,
                            'aDocEsc' => $aDocEsc
                        ), 
                        true
                    );
                    
                    break;
                default:
                    $aParams = array('idtutor' => 1);
                    $aTutAlum = $this->tutAlumModel->obtenerTutAlum($aParams);
                    $view = $this->load->view(
                        'abms/formusuariotutor_view', 
                        array(
                            'aReg' => array(
                                'idtutor' => 1,
                                'inperdni' => null
                            ),
                            'aTutAlum' => $aTutAlum
                        ), 
                        true
                    );
                    break;
            }*/
        }
        
        echo $view;
    }
    
    public function guardarDocente()
    {
        $aParams = array(
            'iddocente' => $this->input->post('iddocente'),
            'idescuela' => $this->input->post('idescuela')
        );
        $this->docEscModel->guardar($aParams);
        
        $aEscuelas = $this->escuelaModel->obtenerTodos();
        $aParams = array('idDocente' => 1);
        $aDocEsc = $this->docEscModel->obtenerEscPorDoc($aParams);
        $view = $this->load->view(
            'abms/formusuariodocente_view', 
            array(
                'aReg' => array('iddocente' => 1),
                'aEscuelas' => $aEscuelas,
                'aDocEsc' => $aDocEsc
            ), 
            true
        );
        
        echo $view;
    }
    
    public function eliminarDocente($iddocesc)
    {
        $aParams = array(
            'iddocesc' => $iddocesc
        );
        $this->docEscModel->eliminar($aParams);
        
        $aEscuelas = $this->escuelaModel->obtenerTodos();
        $aParams = array('idDocente' => 1);
        $aDocEsc = $this->docEscModel->obtenerEscPorDoc($aParams);
        $view = $this->load->view(
            'abms/formusuariodocente_view', 
            array(
                'aReg' => array('iddocente' => 1),
                'aEscuelas' => $aEscuelas,
                'aDocEsc' => $aDocEsc
            ), 
            true
        );
        
        echo $view;
    }
    
    public function formUsuario()
    {
        $view = $this->load->view(
            'abms/formusuario_view', 
            array(
                'aReg' => $this->iniRegUsuario()
            ), 
            true
        );
        
        echo $view;
    }
    
    public function guardarUsuario()
    {
        $this->form_validation->set_rules($this->aReglas['usuario']);
        
        if ($this->form_validation->run() == FALSE) {
            $aReg = $this->iniRegUsuario();
            $aReg['idpersona'] = $this->input->post('idpersona');
            $view = $this->load->view(
                'abms/formusuario_view', 
                array(
                    'aReg' => $aReg
                ), 
                true
            );
        } else {
            $aParams = $this->iniRegUsuario();
            $aParams['vcusuclave'] = md5($aParams['vcusuclave']);
            $aParams['idpersona'] = $this->input->post('idpersona');
            $this->usuarioModel->guardar($aParams);
            
            $aData = array(
                'aReg' => array(
                    'vcusunombre' =>  '', 
                    'vcusuclave' =>  ''
                ),
                'msj' => 'El usuario se creo exitosamente.'
            );
            
            $view = $this->load->view('login/autenticacion_view', $aData, true);
        }
        
        echo $view;
    }
    
    public function guardarTutAlum()
    {
        $this->form_validation->set_rules($this->aReglas['tutor']);
        
        if ($this->form_validation->run() == FALSE) {
            $aParams = array('idtutor' => 1);
            $aTutAlum = $this->tutAlumModel->obtenerTutAlum($aParams);
            $view = $this->load->view(
                'abms/formusuariotutor_view', 
                array(
                    'aReg' => $this->iniRegTutor(),
                    'aTutAlum' => $aTutAlum
                ), 
                true
            );
        } else {
            $aParams = array(
                'inperdni' => $this->input->post('inperdni')
            );

            $aAlum = $this->alumnoModel->obtenerUno($aParams);

            if (isset($aAlum)) {
                $this->iniRegTutAlum();
                $this->aReg['idalumno'] = $aAlum['idalumno'];
                $this->tutAlumModel->guardar($this->aReg);
                
                $aParams = array('idtutor' => 1);
                $aTutAlum = $this->tutAlumModel->obtenerTutAlum($aParams);
                $view = $this->load->view(
                    'abms/formusuariotutor_view', 
                    array(
                        'aReg' => $this->iniRegTutor(),
                        'aTutAlum' => $aTutAlum
                    ), 
                    true
                );
            } else {
                $aParams = array('idtutor' => 1);
                $aTutAlum = $this->tutAlumModel->obtenerTutAlum($aParams);
                $view = $this->load->view(
                    'abms/formusuariotutor_view', 
                    array(
                        'aReg' => $this->iniRegTutor(),
                        'aTutAlum' => $aTutAlum,
                        'msj' => '<div class="alert alert-info"><p>El alumno no se encuentra registrado.</p></div>'
                    ), 
                    true
                );
            }
        }
        
        
        echo $view;
    }
    
    public function eliminarTutor($idtutalum)
    {
        $aParams = array(
            'idtutalum' => $idtutalum
        );
        $this->tutAlumModel->eliminar($aParams);
        
        $aParams = array('idtutor' => 1);
        $aTutAlum = $this->tutAlumModel->obtenerTutAlum($aParams);
        $view = $this->load->view(
            'abms/formusuariotutor_view', 
            array(
                'aReg' => $this->iniRegTutor(),
                'aTutAlum' => $aTutAlum
            ), 
            true
        );
        
        echo $view;
    }
}