<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ext_Controller extends CI_Controller
{
    protected $_message = null;
    protected $aReg = null;
    function __construct()
	{
		parent::__construct();
        
        $login = $session_id = $this->session->userdata('ingresado');
        
        if (! $login) {
            redirect('login/autenticacion/index');   
        }
	}
 }