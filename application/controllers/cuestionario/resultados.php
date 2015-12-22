<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Resultados extends Ext_Controller {
    
    function __construct()
	{
	   parent::__construct();
	   $this->load->model('informe_model', 'informeModel');
       $this->load->model('alumno_model', 'alumnoModel');
       $this->load->model('persona_model', 'personaModel');
       $this->load->model('grafico_model', 'graficoModel');
       $this->load->model('factor_Model', 'factorModel');
       $this->load->model('inffacindice_Model', 'inffacindiceModel');
       
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
        
        $viewResultados = $this->load->view('preguntas/resultados_view', $aData, true);
		
        echo $viewResultados;
	}
    
    public function guardar()
    {
        $this->session->set_userdata('idinforme', 0);
        
        $viewImprimir = $this->load->view('preguntas/imprimir_view', '', true);
        
        echo $viewImprimir;
    }
    
    private function _calculaEdad($fecha)
    {
        $fecha = str_replace("/","-",$fecha);
        $fecha = date('Y/m/d',strtotime($fecha));
        $hoy = date('Y/m/d');
        $edad = $hoy - $fecha;
    
        return $edad;
    }
    
    function imprimir()
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
        $aAlumno = $this->alumnoModel->obtenerUno(array('idalumno' => $this->session->userdata('idalumno')));
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
    	// ---------------------------------------------------------
    	// Cerrar el documento PDF y preparamos la salida
    	// Este mtodo tiene varias opciones, consulte la documentacin para ms informacin.
    	$nombre_archivo = utf8_decode("Resultados Mentes Mejorando.pdf");

    	$pdf->Output($nombre_archivo, 'I');
    }
}