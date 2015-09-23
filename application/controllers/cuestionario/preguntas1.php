<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Preguntas1 extends CI_Controller {

	public function index()
	{
        $header = '';
        $viewPreguntas1 = $this->load->view('preguntas/preguntas1_view', '', true);
		
        return $viewPreguntas1;
	}
    
    public function guardar()
    {
        $viewResultados = $this->load->view('preguntas/resultados_view', '', true);
        
        echo $viewResultados;
    }
}