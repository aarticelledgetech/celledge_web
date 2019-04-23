<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function __construct($config = 'rest'){
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		parent::__construct();
    }
	public function index(){
		$this->load->view('web/header');
		$this->load->view('web/nav');
		$this->load->view('web/index');
		$this->load->view('web/footer');
	}
}
