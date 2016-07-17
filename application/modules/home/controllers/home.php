<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct() {

		parent::__construct();

		// load database
        $this->load->database();

        // load model
        $this->load->model('common_model');

        // meta title, description
        $this->data["title"] = "Tổng quan";
        $this->data["description"] = "Tổng quan toàn bộ hệ thống quản lý tạp hóa";

        // initialize breadcrumbs
        $this->position['item'][0]['title'] = "Tổng quan";
	}

	public function index() {

		// breadcrumbs
		$this->data['position'] = $this->load->view("parts/position", $this->position, TRUE);

		// menu active
		$this->data['menu_active'] = "home";

		// load view
		$this->load_view('home', $this->data);
	}
}