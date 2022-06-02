<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pageContent extends CI_Controller {
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('Product_model');
	}

	public function index()
	{
		$data['title'] = 'Homepage';
		$data['productKategori'] = $this->Product_model->getDataProductKategori();
		$this->load->view('templates/header.php', $data);
		$this->load->view('HomePage.php');
		$this->load->view('templates/footer.php');
	}
	public function products()
	{
		$data['title'] = 'Products';
		$data['product'] = $this->Product_model->getDataProduct();
		$data['productKategori'] = $this->Product_model->getDataProductKategori();
		$this->load->view('templates/header.php', $data);
		$this->load->view('products.php', $data);
		$this->load->view('templates/footer.php');
	}
	public function productsById($id)
	{
		$text = str_replace('%20', ' ', $id);
		$data['title'] = $text;
		$data['productsById'] = $this->Product_model->getDataProductById($text);
		$data['productKategori'] = $this->Product_model->getDataProductKategori();
		$this->load->view('templates/header.php', $data, $text);
		$this->load->view('productsById.php', $data);
		$this->load->view('templates/footer.php');
	}
	public function project()
	{
		$data['title'] = 'Project';
		
		$this->load->view('templates/header.php', $data);
		$this->load->view('project.php');
		$this->load->view('templates/footer.php');
	}
	public function contact()
	{
		$data['title'] = 'Contact';
		$this->load->view('templates/header.php', $data);
		$this->load->view('contact.php');
		$this->load->view('templates/footer.php');
	}
	public function myAccount()
	{
		$data['title'] = 'My Account';
		$this->load->view('templates/header.php', $data);
		$this->load->view('myaccount.php');
		$this->load->view('templates/footer.php');
	}
}
