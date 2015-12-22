<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Inicio extends CI_Controller {

	public function index()
	{
        $aData = array(
            'navbar' => $this->load->view('navbar_view', '', true),
            'header' => $this->load->view('header_view', '', true),
            'content' => $this->load->view('body_view', '', true),
            'footer' => $this->load->view('footer_view', '', true)
        );
        
        $this->load->view('masterpage', $aData);
	}
}