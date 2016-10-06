<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vanwedding extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index($page = 'home'){
		$data['title_web']= 'VanCateringDecoration';


        $this->load->view('default/index', $data);
	}
}
?>