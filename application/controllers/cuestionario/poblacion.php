<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Poblacion extends CI_Controller {

	public function index()
	{
        $header = '';
        $viewPoblacion = $this->load->view('preguntas/poblacion_view', '', true);
		
        return $viewPoblacion;
	}
    
    public function guardar()
    {
        $viewPreguntas1 = $this->load->view('preguntas/preguntas1_view', '', true);
        
        echo $viewPreguntas1;
    }
}