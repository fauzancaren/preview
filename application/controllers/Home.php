<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data['title'] = 'Homepage';
		$data['_page'] = 'HOME';
		$data['productKategori'] = $this->Product_model->getDataProductKategori();
		$this->load->view('templates/header.php', $data);
		$this->load->view('content/home/HomePage.php');
		$this->load->view('templates/footer.php');
	}
}
