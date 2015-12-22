<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Preguntas extends Ext_Controller {

	public function index()
	{
        $aData = array(
            'inperdni' => ((bool) $this->input->post('inperdni'))? $this->input->post('inperdni') : ''
        );
            
        $viewBuscadorNinio = $this->load->view('preguntas/buscadorninio_view', $aData, true);
        $content = $this->load->view('preguntas/main_view', array('viewBuscadorNinio' => $viewBuscadorNinio), true);
		
        $aData = array(
            'footer' => $this->load->view('backend/footer_view', '', true),
            'navbar' => $this->load->view('backend/navbar_view', '', true),
            'content' => $content
        );
        
        $this->load->view('masterpage', $aData);
	}
}