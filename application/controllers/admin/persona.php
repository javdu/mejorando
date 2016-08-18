<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Persona extends Ext_Controller {
    function __construct()
	{
	    parent::__construct();
        $this->load->model('Persona_Model', 'personaModel');
        $this->load->model('escuela_Model', 'escuelaModel');
        $this->load->model('escuelagrado_Model', 'escuelagradoModel');
        $this->load->model('Tutor_Model', 'tutorModel');
        $this->load->model('Parentesco_Model', 'parentescoModel');
        $this->load->model('TutAlum_Model', 'tutalumModel');
        $this->load->model('Rol_Model', 'rolModel');
        
       $this->load->library('form_validation');
       $this->load->library('pagination');
       
       $this->aReglas = array(
            'persona' => array(
                array(
                     'field'   => 'inperdni',
                     'label'   => 'DNI',
                     'rules'   => 'trim|required|numeric|exact_length[8]|callback_is_unique_dni'
                  ),
                array(
                     'field'   => 'vcpernombre',
                     'label'   => 'Nombre',
                     'rules'   => 'trim|required'
                  ),
                array(
                     'field'   => 'dtperfechnac',
                     'label'   => 'Fecha de nacimiento',
                     'rules'   => 'trim|required|callback_checkDateFormat'
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
                     'field'   => 'idescuelagrado',
                     'label'   => 'Escuela grado',
                     'rules'   => 'trim|required'
                ),   
                array(
                     'field'   => 'idtutor',
                     'label'   => 'Tutor',
                     'rules'   => 'trim|required|callback_is_unique_dni'
                ),   
                array(
                     'field'   => 'idparentesco',
                     'label'   => 'Parentesco',
                     'rules'   => 'trim|required'
                )
            ),
            'persona_editar' => array(
                array(
                     'field'   => 'dtperfechnac',
                     'label'   => 'Fecha de nacimiento',
                     'rules'   => 'trim|required|callback_checkDateFormat'
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
                     'field'   => 'idescuelagrado',
                     'label'   => 'Escuela grado',
                     'rules'   => 'trim|required'
                ),   
                array(
                     'field'   => 'idtutor',
                     'label'   => 'Tutor',
                     'rules'   => 'trim|required'
                ),   
                array(
                     'field'   => 'idparentesco',
                     'label'   => 'Parentesco',
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
        $config['base_url'] = 'admin/persona/listado/';
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
        
        $content = $this->load->view('admin/listpersona_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function iniReg()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idpersona' => $this->input->post('idpersona'),
                'vcpernombre' => strtoupper($this->input->post('vcpernombre')),
                'inperdni' => $this->input->post('inperdni'),
                'vcperdom' => strtoupper($this->input->post('vcperdom')),
                'vcpertelcodarea' => $this->input->post('vcpertelcodarea'),
                'vcpertel' => $this->input->post('vcpertel'),
                'vcpercelcodarea' => $this->input->post('vcpercelcodarea'),
                'vcpercel' => $this->input->post('vcpercel'),
                'dtperfechnac' => $this->input->post('dtperfechnac'),
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
                'boperestado' => 1,
                'dtperfechnac' => null
            );
        }
        
        return $this->aReg;
    }
    
    public function iniRegAlumno()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idalumno' => $this->input->post('idalumno'),
                'idescuela' => $this->input->post('idescuela'),
                'idescuelagrado' => $this->input->post('idescuelagrado'),
                'boalumestado' => 1,
                'nombreTutor' => $this->input->post('nombreTutor')
            );
        } else {
            $this->aReg = array(
                'idalumno' => 0,
                'idescuela' => null,
                'idescuelagrado' => null,
                'boalumestado' => 1,
                'nombreTutor' => ''
            );
        }
        
        return $this->aReg;
    }

    public function iniRegTutAlum()
    {
        if ((bool)$this->input->post()) {
            $this->aReg = array(
                'idtutalum' => $this->input->post('idtutalum'),
                'idtutor' => $this->input->post('idtutor'),
                'idalumno' => $this->input->post('idalumno'),
                'idparentesco' => $this->input->post('idparentesco'),
                'botutalumestado' =>1
            );
        } else {
            $this->aReg = array(
                'idtutalum' => 0,
                'idtutor' => 0,
                'idalumno' => 0,
                'idparentesco' => 0,
                'botutalumestado' =>1
            );
        }

        return $this->aReg;
    }

    public function formulario($idalumno = 0)
    {
        $aData = array();
        $aRegTutAlum = array();
        
        //if ( (bool) $this->input->post('idalumno') and $idalumno == 0) {
        if ($idalumno == 0 || (bool)$this->input->post()) {
            $aReg = $this->iniReg();
            $aRegAlumno = $this->iniRegAlumno();
            $aReg = array_merge($aReg, $aRegAlumno);
            $aRegTutAlum = $this->iniRegTutAlum();
        } else {
            $aData = array(
                'idalumno' => $idalumno
            );

            $aReg = $this->personaModel->obtenerUno1($aData);
            list($year, $mes, $dia)=explode("-", $aReg['dtperfechnac']);
            $aReg['dtperfechnac'] = $dia."/".$mes."/".$year;
            //echo '<pre>';
            //var_dump($aReg);
            //die;
            $aRegTutAlum = $this->tutalumModel->obtenerTutor($aData);
            //echo '<pre>';
            //var_dump($aRegTutAlum);
            //die;
        }
        
        $aData = array(
            'aReg' => $aReg,
            'aRegTutAlum' => $aRegTutAlum,
            'aRegTutor' => $this->tutorModel->obtenerListadoNombres(),
            'aEscuelas' => $this->escuelaModel->obtenerTodos(),
            'aEscuelaGrados' => $this->escuelagradoModel->obtenerTodos(),
            'aParentescos' => $this->parentescoModel->obtenerTodos(),
            'accion' => ($aReg['idalumno'] == 0)? 'Nuevo' : 'Editar'
        );
        
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        $content = $this->load->view('admin/frmpersona_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    {
        if ($this->input->post('idalumno') == 0){
            $this->form_validation->set_rules($this->aReglas['persona']);
        } else {
            $this->form_validation->set_rules($this->aReglas['persona_editar']);
        }
        
        if ($this->form_validation->run() == FALSE) {
            /*echo '<pre>';
            var_dump($this->input->post());
            die;*/
            $this->formulario();
        } else {
            if ($this->input->post('idalumno') == 0){
                $aReg = $this->iniReg();
                $aReg['idrol'] = $this->rolModel->getIdAlumno();
                list($dia, $mes, $year)=explode("/", $aReg['dtperfechnac']);
                $aReg['dtperfechnac'] = $year."-".$mes."-".$dia;
                $idPersona = $this->personaModel->guardarABM($aReg);
                $aRegAlumno = $this->iniRegAlumno();
                $aRegAlumno['idpersona'] = $idPersona;
                unset($aRegAlumno['nombreTutor']);
                $idAlumno = $this->personaModel->guardarAlumno($aRegAlumno);
                $aData = array(
                    'idtutalum' => $this->input->post('idtutalum'),
                    'botutalumestado' => 1,
                    'idtutor' => $this->input->post('idtutor'),
                    'idalumno' => $idAlumno,
                    'idparentesco' => $this->input->post('idparentesco')
                );
                
                $this->tutalumModel->guardar($aData);
            } else {
                $aReg = $this->iniReg();
                list($dia, $mes, $year)=explode("/", $this->input->post('dtperfechnac'));
                $aReg['dtperfechnac'] = $year."-".$mes."-".$dia;
                $idPersona = $this->personaModel->guardarABM($aReg);
                $aRegAlumno = $this->iniRegAlumno();
                unset($aRegAlumno['nombreTutor']);
                $idPersona = $this->personaModel->guardarAlumno($aRegAlumno);
                $aData = array(
                    'idtutalum' => $this->input->post('idtutalum'),
                    'botutalumestado' => 1,
                    'idtutor' => $this->input->post('idtutor'),
                    'idalumno' => $this->input->post('idalumno'),
                    'idparentesco' => $this->input->post('idparentesco')
                );

                $this->tutalumModel->guardar($aData);
            }
            
            $this->index();
        }
    }
    
    public function nuevo()
    {
        $aReg = $this->iniReg();
        $aFactor = $this->factorModel->selectTodos();
        $aSubfactor = $this->subfactorModel->selectTodos(array('idfactor' => $aReg['idfactor']));
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        
        $aData = array(
            'aFactor' => $aFactor,
            'aSubfactor' => $aSubfactor,
            'aRespuesta' => $aRespuesta,
            'aReg' => $aReg,
            'accion' => 'Nueva'
        );
        
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        
        $content = $this->load->view('admin/nuevopregunta_view', $aData, true);
		
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function loadSubFactor()
    {
        if ($this->input->post('idfactor') == null) {
            echo '';
        } else {
            $aData = array(
                'idfactor' => $this->input->post('idfactor')
            );
            $aSubfactor = $this->subfactorModel->selectTodos($aData);
            $aSubfactor = array('' => 'Seleccionar') + $aSubfactor;
            $stringAux = form_dropdown('idsubfactor', $aSubfactor, $this->input->post('idsubfactor'), array('class' => 'form-control')); 
echo <<<EOT
<div class="form-group col-xs-12">
    <label>Subfactor</label>
    {$stringAux}
</div>
EOT;
        }
    }
    
    public function editar($idPregunta)
    {
        $aData = array();
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aReg = $this->preguntaModel->obtenerUno($idPregunta);
        $aFactor = $this->factorModel->selectTodos();
        $aSubfactor = $this->subfactorModel->selectTodos(array('idfactor' => $aReg['idfactor']));
        $aRespuesta = $this->respuestaModel->obtenerTodos();
        
        $aData = array(
            'aFactor' => $aFactor,
            'aSubfactor' => $aSubfactor,
            'aRespuesta' => $aRespuesta,
            'aReg' => $aReg,
            'accion' => 'Editar'
        );
        
        $content = $this->load->view('admin/nuevopregunta_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function baja($idPregunta)
    {
        $header = '';
        $footer = '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        $aReg = $this->preguntaModel->obtenerUno($idPregunta);
        $aData = array(
            'aReg' => $aReg
        );
        $content = $this->load->view('admin/eliminarpregunta_view', $aData, true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }

    public function eliminar()
    {
        $this->preguntaModel->eliminar($this->input->post('idpregunta'));
        
        $this->index();
    }
    
    public function respuesta($idpregunta)
    {
         redirect('/admin/pregresp/index/'.$idpregunta, 'location');
    }

    public function is_unique_dni($dni) {
        $count = $this->personaModel->isUnicoDNI($dni);
        if ((int)$count == 0) {
            return true;
        } else {
            return false;
        }
    }

    function checkDateFormat($date) {
        if (preg_match("/[0-31]{2}\/[0-12]{2}\/[0-9]{4}/", $date)) {
            if(checkdate(substr($date, 3, 2), substr($date, 0, 2), substr($date, 6, 4)))
                return true;
            else
                return false;
        } else {
            return false;
        }
    }
}