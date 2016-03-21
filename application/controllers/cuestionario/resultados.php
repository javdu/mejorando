<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Resultados extends Ext_Controller {
    var $nombre_archivo = '';
    
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('informe_model', 'informeModel');
       $this->load->model('alumno_model', 'alumnoModel');
       $this->load->model('persona_model', 'personaModel');
       $this->load->model('grafico_model', 'graficoModel');
       $this->load->model('factor_Model', 'factorModel');
       $this->load->model('inffacindice_Model', 'inffacindiceModel');
       $this->load->model('usuario_Model', 'usuarioModel');
    }

	public function index()
	{
        $header = '';
        
        $aPersona = $this->personaModel->obtenerUno(array('idpersona' => $this->session->userdata('idpersona')));
        
        $this->inffacindiceModel->eliminar(array('idinforme' => $this->session->userdata('idinforme')));
            
        $aFactor = $this->factorModel->obtenerTodos(array('idencuesta' => 1));
        $aRdo = array();
        foreach($aFactor as $elemFactor) {
            $aData = array(
                'idfactor' => $elemFactor['idfactor'],
                'idrespuesta' => 2,
                'idinforme' => $this->session->userdata('idinforme')
            );
            $aCantPregAVeces = $this->graficoModel->totalPreguntasPorFactor($aData);
            
            $aData = array(
                'idfactor' => $elemFactor['idfactor'],
                'idrespuesta' => 3,
                'idinforme' => $this->session->userdata('idinforme')
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
                'idinforme' => $this->session->userdata('idinforme'),
                'idfactor' => $elemFactor['idfactor'],
                'ininffacvalor' => $x,
                'dtinffacindicefecha' => date("Y-m-d")
            );
            
            $this->inffacindiceModel->guardar($aData);
        }
        
        //*********************************************************************************
        $aFactor = $this->factorModel->obtenerTodos(array('idencuesta' => 1));
        $aAuxGraf = array();
        foreach($aFactor as $elemFactor) {
            $aData = array(
                'idalumno' => $this->session->userdata('idalumno'),
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
        
        //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        
        $aData = array(
            'aPersona' => $aPersona,
            'aAuxCategorias' => $aAuxCategorias,
            'aAuxPorcentaje' => $aAuxPorcentaje,
            'aAuxGraf' => $aAuxGraf
        );
        
        //********************************************************************************
        $this->estadoactual($aAuxPorcentaje);
        $this->graficocomparativo($aAuxGraf);
        
        $viewResultados = $this->load->view('preguntas/resultados_view', $aData, true);
        
        
		
        echo $viewResultados;
	}
    
    public function estadoactual($aAuxPorcentaje = null)
    {
        include(APPPATH.'libraries/jpgraph-3.5.0b1/src/jpgraph.php');
        include(APPPATH.'libraries/jpgraph-3.5.0b1/src/jpgraph_bar.php');
        
        //$datay=array(20,50,90);
        $datay = $aAuxPorcentaje;
        // Size of graph
        $width=450;
        $height=300;
         
        // Set the basic parameters of the graph
        $graph = new Graph($width,$height);
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
        
        $graph->yaxis->title->Set("%");
         
        // Titles
        $graph->title->Set('Estado Actual');
         
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
        
        // Output line
        $graph->Stroke("./assets/img/estadoactual".date("dmY_His").".png");
    }
    
    public function graficocomparativo($aAuxGraf = null)
    {
            echo '<pre>';
            var_dump($aAuxGraf[0]['factFecha']);
            die;
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
            $graph->SetMargin(80,30,20,80);
             
            // Create a bar pot
            $bplot = new BarPlot($datay);
             
            // Adjust fill color
            $bplot->SetFillColor('orange');
            $graph->Add($bplot);
            
            $bplot->value->Show();
             
            // Setup the titles
            $graph->title->Set($aAuxGraf[0]['vcfactnombre']);
            $graph->xaxis->title->Set('Fecha');
            $graph->yaxis->title->Set('Aprendisaje %');
             
            $graph->title->SetFont(FF_FONT1,FS_BOLD);
            $graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
            $graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
            
            // Output line
            $graph->Stroke("./assets/img/graficocomparativo".date("dmY_His").".png");
        
    }
    
    public function guardar()
    {
        $this->session->set_userdata('idinforme', 0);
        
        $this->hacerPDF();
        
        $this->sendMailGmail();
        
        $viewImprimir = $this->load->view('preguntas/imprimir_view', '', true);
        
        $aData = array (
            'nombre_archivo' => $this->nombre_archivo
        );
        
        echo $viewImprimir;
    }
    
    public function sendMailGmail()
	{
		//cargamos la libreria email de ci
		$this->load->library("email");
 
		//configuracion para gmail
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			'smtp_user' => 'javdu1301@gmail.com',
			'smtp_pass' => 'volume436649',
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		);    
 
		//cargamos la configuración para enviar con gmail
		$this->email->initialize($configGmail);
        $this->email->attach($this->nombre_archivo, "inline");
		$this->email->from('javdu0113@gmail.com');
        
        $aUsuario = $this->usuarioModel->obtenerUno(array('idpersona' => $this->session->userdata('idpersona')));
        $this->email->to($aUsuario['vcusuemail']);
		$this->email->subject('Mentes Mejorando - '.$this->session->userdata('vcpernombre').' '.date("d/m/Y H:i"));
        
        $aData = array(
            'fecha' => date("d/m/Y H:i"),
            'vcpernombre' => $this->session->userdata('vcpernombre')
        );
		$this->email->message($this->load->view('message_view', $aData, true));
		$this->email->send();
		//con esto podemos ver el resultado
		//var_dump($this->email->print_debugger());
        
	}
    
    private function _calculaEdad($fecha)
    {
        $fecha = str_replace("/","-",$fecha);
        $fecha = date('Y/m/d',strtotime($fecha));
        $hoy = date('Y/m/d');
        $edad = $hoy - $fecha;
    
        return $edad;
    }
    
    function hacerPDF()
    {
        $this->load->library('Reporte');
        
        $pdf = new Reporte();
        
        $pdf->AddPage();
        
        $aResultados = $this->informeModel->obtenerResultados();
        
        //var_dump($aResultados[0]['resultado']);
        //die;        
        $aInforme = $this->informeModel->obtener(array('idinforme' => $this->session->userdata('idinforme')));
        $aInforme['dtinffecha'] = date("d/m/Y", strtotime($aInforme['dtinffecha']));
        $aTutor = $this->personaModel->obtenerUno(array('idpersona' => $this->session->userdata('idpersona')));
        $aAlumno = $this->alumnoModel->obtenerUnoIdAlumno(array('idalumno' => $this->session->userdata('idalumno')));
        $aAlumno['dtedad'] = $this->_calculaEdad($aAlumno['dtperfechnac']);
        $aAlumno['dtperfechnac'] = date("d/m/Y", strtotime($aAlumno['dtperfechnac']));
        
        //var_dump($aAlumno);die;
        $html = $this->load->view(
            'pdf/resultados_pdf',
            array(
                'aResultados' => $aResultados,
                'aAlumno' => $aAlumno,
                'aTutor' => $aTutor,
                'aInforme' => $aInforme
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
    	$this->nombre_archivo = __DIR__."\..\..\..\assets\pdf\Mentes_Mejorando_".str_replace(" ", "_", $aAlumno['vcpernombre'])."_".date("dmY_His").".pdf";
        $this->session->set_userdata('resultadospdf', $this->nombre_archivo);
        //file_put_contents(base_url()."assets/pdf/Mentes_Mejorando_".str_replace(" ", "_", $aAlumno['vcpernombre'])."_".date("dmY_Hi").".pdf", null);
    	$pdf->Output($this->nombre_archivo, 'F');
    }
    
    function verPDF()
    {
        //header('Content-type: application/pdf');
        //header('Content-Disposition: inline; filename="'.$this->nombre_archivo.'"');
        //readfile($this->nombre_archivo);
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="'.$this->session->userdata('resultadospdf').'"');
        readfile($this->session->userdata('resultadospdf'));
    }
}