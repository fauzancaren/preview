<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Project_model');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		// $data['_page'] = 'HOME';
		// $data['project'] = $this->Project_model->getDataProjectLastUpdate();
		// $data['productKategori'] = $this->Product_model->getDataProductKategori();
		$this->load->view('templates/adminHeader.php', $data);
		$this->load->view('admin/adminDashboard.php');
		$this->load->view('templates/footerAdmin.php');
	}
	public function getDataProject()
	{
		$data['title'] = 'project';
		// $data['_page'] = 'HOME';
		$data['project'] = $this->Project_model->getDataProject();
		$this->load->view('templates/adminHeader.php', $data);
		$this->load->view('admin/adminProject.php');
		$this->load->view('templates/footerAdmin.php');
	}
}
