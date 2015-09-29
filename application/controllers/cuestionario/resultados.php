<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Resultados extends CI_Controller {

	public function index()
	{
        $header = '';
        $viewResultados = $this->load->view('preguntas/resultados_view', '', true);
		
        return $viewResultados;
	}
    
    public function guardar()
    {
        $viewImprimir = $this->load->view('preguntas/imprimir_view', '', true);
        
        echo $viewImprimir;
    }
    
    function imprimir()
    {
        $this->load->library('Pdf');
        
        $pdf = new Pdf();

    	$html = $this->load->view(
            'pdf/resultados_pdf',
            array('aPublicacion' => null), 
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