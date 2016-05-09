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
        $this->load->model('inffacindice_Model', 'inffacindiceModel');
        $this->load->model('factor_Model', 'factorModel');
        $this->load->model('grafico_model', 'graficoModel');
        $this->load->model('reporte_model', 'reporteModel');
        $this->load->model('informe_model', 'informeModel');
        $this->load->model('alumno_model', 'alumnoModel');
        
        $this->load->helper('mi_helper');
        
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
        if ($idalumno == 0) {
             $idalumno = $this->input->post('idalumno');
        }
        
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
            'aDiagnostico' => $aDiagnostico,
            'idalumno' => $idalumno,
            'aAlumno' => $this->alumnoModel->obtenerUnoIdAlumno(array('idalumno' => $idalumno))
        );
        
        $content = $this->load->view('admin/listdiagnostico_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function cuestionario($idinforme = 0, $idalumno = 0)
    {
        $aPregResp = $this->preguntaModel->obtenerTodosInfResp($idinforme);
        $aPreg = $this->preguntaModel->obtenerTodos(0, 1000);
        
        $aData = array(
            'aPreg' => $aPreg,
            'aPregResp' => $aPregResp,
            'idinforme' => $idinforme,
            'idalumno' => $idalumno
        ); 
        
        $content = $this->load->view('admin/frmdiagnostico_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function nuevo($idalumno = 0)
    {
        //$aPregResp = $this->preguntaModel->obtenerTodosInfResp($idinforme);
        $aPreg = $this->preguntaModel->obtenerTodos(0, 1000);
        
        $aData = array(
            'aPreg' => $aPreg,
            'idalumno' => $idalumno
        ); 
        
        $content = $this->load->view('admin/frmdiagnosticonuevo_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function guardar()
    { 
        //***********************************************
        //SE REGISTRAN LAS RESPUESTA DE LA PREGUNTAS
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
        
        //**************************************************
        //Se guarda de nuevo el indice
        $this->inffacindiceModel->eliminar(array('idinforme' => $idinforme));
            
        $aFactor = $this->factorModel->obtenerTodos(array('idencuesta' => 1));
        $aRdo = array();
        foreach($aFactor as $elemFactor) {
            $aData = array(
                'idfactor' => $elemFactor['idfactor'],
                'idrespuesta' => 2,
                'idinforme' => $idinforme
            );
            $aCantPregAVeces = $this->graficoModel->totalPreguntasPorFactor($aData);
            
            $aData = array(
                'idfactor' => $elemFactor['idfactor'],
                'idrespuesta' => 3,
                'idinforme' => $idinforme
            );
            $aCantPregSiempre = $this->graficoModel->totalPreguntasPorFactor($aData);
            
            $aData = array(
                'idencuesta' => 1,
                'idfactor' => $elemFactor['idfactor'],
            );
            $aTotPreg = $this->graficoModel->totalPregunta($aData);
            
            $x = (((2 * $aCantPregSiempre) + $aCantPregAVeces) * 100 / (2 * $aTotPreg));
            
            $aAux = array();
            $aAuxCategorias[] = $elemFactor['vcfactnombre'];
            $aAuxPorcentaje[] = $x;
        
            $aData = array(
                'idinforme' => $idinforme,
                'idfactor' => $elemFactor['idfactor'],
                'ininffacvalor' => $x,
                'dtinffacindicefecha' => date("Y-m-d")
            );
            
            $this->inffacindiceModel->guardar($aData);
        }
        
        //*********************************************************************************
        $aInforme = $this->informeModel->obtener(array('idinforme' => $idinforme));

        $aFactor = $this->factorModel->obtenerTodos(array('idencuesta' => 1));
        $aAuxGraf = array();
        foreach($aFactor as $elemFactor) {
            $aData = array(
                'idalumno' => $aInforme['idalumno'],
                'idfactor' => $elemFactor['idfactor'],
                'dtinffecha' => $aInforme['dtinffecha']
            );
            $aAux = $this->graficoModel->obtenerHistorialHabPsic($aData);
            $factFecha = array();
            $factValor = array();
            foreach ($aAux as $elemAux) {
                $factFecha[] = date_format(date_create($elemAux['dtinffacindicefecha']), 'd/m/Y');
                $factValor[] = $elemAux['ininffacvalor'];
            }
        
            $aAuxGraf[] = array(
                'idfactor' => $elemFactor['idfactor'],
                'vcfactnombre' => $elemFactor['vcfactnombre'],
                'factFecha' => $factFecha,
                'factValor' => $factValor
            );
        }
        //**********************************************************************************
        
        //Borramos imagen del servidor
        $aImagen = $this->reporteModel->obtenerImagen($idinforme);
        foreach($aImagen AS $elemImagen) {
            $pathfile = $elemImagen['vcrgpath'].$elemImagen['vcrgnombre'];
            $do = unlink($pathfile);
        }
        //Borramos imagen de la BD
        $this->reporteModel->eliminarImagen($idinforme);
        $this->estadoactual($aAuxPorcentaje, $idinforme);
        $this->graficocomparativo($aAuxGraf, $idinforme);
        //********************************************************************************
        
        $aData = array(
            'aAuxCategorias' => $aAuxCategorias,
            'aAuxPorcentaje' => $aAuxPorcentaje,
            'aAuxGraf' => $aAuxGraf,
            'idalumno' => $aInforme['idalumno']
        );
        $content = $this->load->view('admin/resultadograficos_view', $aData, true);
        $header = $this->load->view('backend/navbar_view', array(), true);
        $footer = $this->load->view('backend/footer_view', array(), true);
        
        $this->load->view('masterpage', array('header' => $header, 'content' => $content, 'footer' => $footer));
    }
    
    public function generarinforme($idinforme = 0, $idalumno = 0)
    {
        $aIndinf = $this->inffacindiceModel->obtenerIndiceInforme($idinforme);
        $aAuxCategorias = array();
        $aAuxPorcentaje = array();
        foreach($aIndinf AS $elemIndInf) {
            $aAuxCategorias[] = $elemIndInf['vcfactnombre'];
            $aAuxPorcentaje[] = $elemIndInf['ininffacvalor'];
        }
        //*********************************************************************************
        $aFactor = $this->factorModel->obtenerTodos(array('idencuesta' => 1));
        $aAuxGraf = array();
        foreach($aFactor as $elemFactor) {
            $aData = array(
                'idalumno' => $idalumno,
                'idfactor' => $elemFactor['idfactor']
            );
            $aAux = $this->graficoModel->obtenerHistorialHabPsic($aData);
            $factFecha = array();
            $factValor = array();
            foreach ($aAux as $elemAux) {
                $factFecha[] = date_format(date_create($elemAux['dtinffacindicefecha']), 'd/m/Y');
                $factValor[] = $elemAux['ininffacvalor'];
            }
        
            $aAuxGraf[] = array(
                'idfactor' => $elemFactor['idfactor'],
                'vcfactnombre' => $elemFactor['vcfactnombre'],
                'factFecha' => $factFecha,
                'factValor' => $factValor
            );
        }
        
        //**********************************************************************************
        
        $aData = array(
            'aAuxCategorias' => $aAuxCategorias,
            'aAuxPorcentaje' => $aAuxPorcentaje,
            'aAuxGraf' => $aAuxGraf
        );
        
        //Borramos imagen del servidor
        $aImagen = $this->reporteModel->obtenerImagen($idinforme);
        foreach($aImagen AS $elemImagen) {
            $pathfile = $elemImagen['vcrgpath'].$elemImagen['vcrgnombre'];
            $do = unlink($pathfile);
        }
        
        //Borramos imagen de la BD
        $this->reporteModel->eliminarImagen($idinforme);
        $this->estadoactual($aAuxPorcentaje, $idinforme);
        $this->graficocomparativo($aAuxGraf, $idinforme);
        //********************************************************************************
        
        $this->hacerPDF($idinforme, $idalumno);
    }
    
    public function estadoactual($aAuxPorcentaje = null, $idinforme = 0)
    {
        include(APPPATH.'libraries/jpgraph-3.5.0b1/src/jpgraph.php');
        include(APPPATH.'libraries/jpgraph-3.5.0b1/src/jpgraph_bar.php');
        
        //$datay=array(20,50,90);
        $datay = $aAuxPorcentaje;
         
        // Set the basic parameters of the graph
        $graph = new Graph(650,400);
        $graph->SetScale('textlin');
         
        $top = 60;
        $bottom = 30;
        $left = 150;
        $right = 30;
        $graph->Set90AndMargin($left,$right,$top,$bottom);
         
        // Nice shadow
        $graph->SetShadow();
         
        // Setup labels
        $lblx = array("HABILIDADES\nPSICOMOTORAS","HABILIDADES\nCOGNITIVAS","HABILIDADES\nSOCIO-EMOCIONALES");
        $graph->xaxis->SetTickLabels($lblx);
         
        // Label align for X-axis
        $graph->xaxis->SetLabelAlign('right','center','right');
         
        // Label align for Y-axis
        $graph->yaxis->SetLabelAlign('center','bottom');
        
        $graph->yaxis->title->Set("Porcentaje %");
        $graph->yaxis->title->SetAngle(0);
         
        // Titles
        $graph->title->Set('ESTADO ACTUAL');
         
        // Create a bar pot
        $bplot = new BarPlot($datay);
        $bplot->SetWidth(0.5);
        $bplot->value->Show();
        $bplot->value->SetColor("black","darkred");
        $bplot->value->SetFormat('%01.2f');  
        
        //$lbly = array("0", "10", "20", "30", "40", "50", "60", "70", "80", "90", "100");
        //$graph->yaxis->SetTickLabels($lbly);
         
        $graph->Add($bplot);
        
        $bplot->value->Show();
        $bplot->value->SetAngle(90);
        $bplot->value->SetFont(FF_ARIAL,FS_NORMAL,7);
        
        $nombImagen = "estadoactual".date("dmY_His").".png";
        $idreportegrafico = $this->reporteModel->guardarImagen(
            array(
                'idreportegrafico' => 0,
                'vcrgtitulo' => 'ESTADO ACTUAL',
                'vcrgnombre' => $nombImagen,
                'vcrgpath' => './assets/img/estadisticos/',
                'idinforme' => $idinforme
            )
        );
        
        // Output line
        $graph->Stroke("./assets/img/estadisticos/".$nombImagen);
    }
    
    public function graficocomparativo($aAuxGraf = null, $idinforme = 0)
    {
        $datay = $aAuxGraf[0]['factValor'];
         
        // Create the graph. These two calls are always required
        $graph = new Graph(650,400);
        $graph->SetScale('intlin');
        
        $lblx = $aAuxGraf[0]['factFecha'];
        $graph->xaxis->SetTickLabels($lblx);
        $graph->xaxis->SetLabelAngle(50);
         
        // Add a drop shadow
        $graph->SetShadow();
         
        // Adjust the margin a bit to make more room for titles
        $graph->SetMargin(80,30,80,80);
         
        // Create a bar pot
        $bplot = new BarPlot($datay);
         
        // Adjust fill color
        $bplot->SetFillColor('orange');
        $graph->Add($bplot);
        
        $bplot->value->Show();
        $bplot->value->SetAngle(90);
        $bplot->value->SetFont(FF_ARIAL,FS_NORMAL,7);
         
        // Setup the titles
        $graph->title->Set($aAuxGraf[0]['vcfactnombre']);
        $graph->xaxis->title->Set('Fecha');
        $graph->yaxis->title->Set('Aprendisaje %');
         
        //$graph->title->SetFont(FF_FONT1,FS_BOLD);
        $graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
        $graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
        
        $nombImagen = "habilidadespsicomotoras".date("dmY_His").".png";
        $idreportegrafico = $this->reporteModel->guardarImagen(
            array(
                'idreportegrafico' => 0,
                'vcrgtitulo' => 'HABILIDADES PSICOMOTORAS',
                'vcrgnombre' => $nombImagen,
                'vcrgpath' => './assets/img/estadisticos/',
                'idinforme' => $idinforme
            )
        );
        
        // Output line
        $graph->Stroke("./assets/img/estadisticos/".$nombImagen);
        
        //*************************************************************************
        
        //$datay = $aAuxGraf[0]['factValor'];
        $datay = $aAuxGraf[1]['factValor'];
                 
        // Create the graph. These two calls are always required
        $graph = new Graph(650,400);
        $graph->SetScale('intlin');
        
        $lblx = $aAuxGraf[1]['factFecha'];
        $graph->xaxis->SetTickLabels($lblx);
        $graph->xaxis->SetLabelAngle(50);
         
        // Add a drop shadow
        $graph->SetShadow();
         
        // Adjust the margin a bit to make more room for titles
        $graph->SetMargin(80,30,80,80);
         
        // Create a bar pot
        $bplot = new BarPlot($datay);
         
        // Adjust fill color
        $bplot->SetFillColor('orange');
        $graph->Add($bplot);
        
        $bplot->value->Show();
        $bplot->value->SetAngle(90);
        $bplot->value->SetFont(FF_ARIAL,FS_NORMAL,7);
         
        // Setup the titles
        $graph->title->Set($aAuxGraf[1]['vcfactnombre']);
        $graph->xaxis->title->Set('Fecha');
        $graph->yaxis->title->Set('Aprendisaje %');
         
        //$graph->title->SetFont(FF_FONT1,FS_BOLD);
        $graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
        $graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
        
        $nombImagen = "habilidadescongnitivas".date("dmY_His").".png";
        $idreportegrafico = $this->reporteModel->guardarImagen(
            array(
                'idreportegrafico' => 0,
                'vcrgtitulo' => 'HABILIDADES COGNITIVAS',
                'vcrgnombre' => $nombImagen,
                'vcrgpath' => './assets/img/estadisticos/',
                'idinforme' => $idinforme
            )
        );
        
        // Output line
        $graph->Stroke("./assets/img/estadisticos/".$nombImagen);
        
        //***************************************************
        
        $datay = $aAuxGraf[2]['factValor'];
         
        // Create the graph. These two calls are always required
        $graph = new Graph(650,400);
        $graph->SetScale('intlin');
        
        $lblx = $aAuxGraf[2]['factFecha'];
        $graph->xaxis->SetTickLabels($lblx);
        $graph->xaxis->SetLabelAngle(50);
         
        // Add a drop shadow
        $graph->SetShadow();
         
        // Adjust the margin a bit to make more room for titles
        $graph->SetMargin(80,30,80,80);
         
        // Create a bar pot
        $bplot = new BarPlot($datay);
         
        // Adjust fill color
        $bplot->SetFillColor('orange');
        $graph->Add($bplot);
        
        $bplot->value->Show();
        $bplot->value->SetAngle(90);
        $bplot->value->SetFont(FF_ARIAL,FS_NORMAL,7);
         
        // Setup the titles
        $graph->title->Set($aAuxGraf[2]['vcfactnombre']);
        $graph->xaxis->title->Set('Fecha');
        $graph->yaxis->title->Set('Aprendisaje %');
         
        //$graph->title->SetFont(FF_FONT1,FS_BOLD);
        $graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
        $graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
        
        $nombImagen = "habilidadessocioemocionales".date("dmY_His").".png";
        $idreportegrafico = $this->reporteModel->guardarImagen(
            array(
                'idreportegrafico' => 0,
                'vcrgtitulo' => 'HABILIDADES SOCIO-EMOCIONALES',
                'vcrgnombre' => $nombImagen,
                'vcrgpath' => './assets/img/estadisticos/',
                'idinforme' => $idinforme
            )
        );
        
        // Output line
        $graph->Stroke("./assets/img/estadisticos/".$nombImagen);
    }
    
    function hacerPDF($idinforme = 0, $idalumno = 0)
    {
        $this->load->library('Reporte');
        
        $pdf = new Reporte();
        
        $pdf->AddPage();
        
        $aResultados = $this->informeModel->obtenerResultados2($idinforme, $idalumno);
        
        $aInforme = $this->informeModel->obtener(array('idinforme' => $idinforme));
        $aInforme['dtinffecha'] = date("d/m/Y", strtotime($aInforme['dtinffecha']));
        $aTutor = $this->personaModel->obtenerUno(array('idpersona' => $aInforme['idpersona']));
        $aAlumno = $this->alumnoModel->obtenerUnoIdAlumno(array('idalumno' => $aInforme['idalumno']));
        $aAlumno['dtedad'] = calculaEdad($aAlumno['dtperfechnac']);
        $aAlumno['dtperfechnac'] = date("d/m/Y", strtotime($aAlumno['dtperfechnac']));
        
        $this->nombre_archivo = "Mentes_Mejorando_".str_replace(" ", "_", $aAlumno['vcpernombre'])."_".date("dmY_His").".pdf";
        
        $idreporte = $this->reporteModel->guardar(
            array(
                'idreporte' => 0,
                'vcreportnombre' => $this->nombre_archivo,
                'dtreportfecha' => date("Y-m-d"),
                'idinforme' => $idinforme
            )
        );
        
        $aDataImagen = $this->reporteModel->obtenerImagen($idinforme);
        
        //echo '<pre>';
        //var_dump($aDataImagen);
        //die;
        
        //var_dump($aAlumno);die;
        $html = $this->load->view(
            'pdf/resultados_pdf',
            array(
                'aResultados' => $aResultados,
                'aAlumno' => $aAlumno,
                'aTutor' => $aTutor,
                'aInforme' => $aInforme,
                'aDataImagen' => $aDataImagen
            ), 
            true
        );
        
        // Imprimimos el texto con writeHTMLCell()

    	//$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
        $pdf->writeHTML($html, true, false, true, false, '');
        
        //$this->Image('nombregrafico.png', '', '', 20, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        //$pdf->Image(, $x, $y, $w, $h, 'JPG', '', '', false, 300, '', false, false, 0, $fitbox, false, false);
    	// ---------------------------------------------------------
    	// Cerrar el documento PDF y preparamos la salida
    	// Este mtodo tiene varias opciones, consulte la documentacin para ms informacin.
        
        $this->session->set_userdata('resultadospdf', __DIR__."\..\..\..\assets\pdf\\".$this->nombre_archivo);
        //file_put_contents(base_url()."assets/pdf/Mentes_Mejorando_".str_replace(" ", "_", $aAlumno['vcpernombre'])."_".date("dmY_Hi").".pdf", null);
    	$pdf->Output( __DIR__."\..\..\..\assets\pdf\\".$this->nombre_archivo, 'F');
        
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="'.$this->session->userdata('resultadospdf').'"');
        readfile($this->session->userdata('resultadospdf'));
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