<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct(){
		parent::__construct();

		// load config main
		$this->config->load('config_main', TRUE);

		// autoload helper
		$this->load->helper(array('url','path','form','main'));
	}
}	