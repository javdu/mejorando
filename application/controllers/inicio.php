<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Inicio extends CI_Controller {

	public function index()
	{
        $header = $this->load->view('header_view', '', true);
        $content = $this->load->view('body_view', '', true);
		$this->load->view('masterpage', array('header' => $header, 'content' => $content));
	}
}