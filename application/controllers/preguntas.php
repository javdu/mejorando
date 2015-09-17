<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Preguntas extends CI_Controller {

	public function index()
	{
        $header = '';
        $content = $this->load->view('preguntas/main', '', true);
		$this->load->view('masterpage', array('header' => $header, 'content' => $content));
	}
}