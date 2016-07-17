<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	function __construct() {

		parent::__construct();

		// load database
        $this->load->database();

        // load model
        $this->load->model('common_model');

        // meta title, description
        $this->data["title"] = "Hàng hóa";
        $this->data["description"] = "Danh sách toàn bộ hàng hóa";

        // initialize breadcrumbs
        $this->position['item'][0]['title'] = "Tổng quan";
        $this->position['item'][0]['url'] = site_url();
        $this->position['item'][1]['title'] = "Hàng hóa";

        // menu active
		$this->data['menu_active'] = "product";

		// the number of item per page
        $this->limit = 10;

        // directory of images
        $this->temp_img_dir = "public/images/temp";
		$this->out_img_dir = "public/images/products";
	}

	public function index() {
		// load css, javascript
		$this->set_css('green');
		$this->set_js('icheck.min');

		// breadcrumbs
		$this->data['position'] = $this->load->view("parts/position", $this->position, TRUE);

		// load view
		$this->load_view('index', $this->data);
	}

	public function addProductCategory() {
		// initialize data
		$this->data["category"] = array(
            "name" => ""
        );

        // form validation
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div style="clear:both;"></div><div class="alert alert-danger">', '</div>');

        // set rule
        $this->form_validation->set_rules("name", "Tên nhóm hàng", "required|trim|xss_clean");

        if ($this->form_validation->run()) {
        	// prepare data
        	$ins_data = array(
        		'name' => $this->security_clean(set_value("name"))
    		);

    		// insert into DB
    		$this->common_model->set_table('product_categories');
    		$this->common_model->insert($ins_data);
        }
	}
}