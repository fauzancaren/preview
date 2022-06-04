<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Product_model');
   }

   public function index()
   {
      $data['title'] = 'Products';
      $data['_page'] = 'PRODUCTS';
      $data['product'] = $this->Product_model->getDataProduct();
      $data['productKategori'] = $this->Product_model->getDataProductKategori();
      $this->load->view('templates/header.php', $data);
      $this->load->view('content/product/products.php', $data);
      $this->load->view('templates/footer.php');
   }
   public function productsById($id)
   {
      $data['title'] = "Products Byid";
      $data['_page'] = 'PRODUCTS';
      $data['productsById'] = $this->Product_model->getDataProductById($id);
      $data['productKategori'] = $this->Product_model->getDataProductKategori();
      $data['productKategoriById'] = $this->Product_model->getDataProductKategoriById($id);
      $this->load->view('templates/header.php', $data, $id);
      $this->load->view('content/product/productsById.php', $data);
      $this->load->view('templates/footer.php');
   }
   public function detailItem($id)
   {
      $data['title'] = "Detail Item";
      $data['_page'] = 'PRODUCTS';
      $data['productKategori'] = $this->Product_model->getDataProductKategori();
      $data['MsitemById'] = $this->Product_model->getDataItemById($id);
      $this->load->view('templates/header.php', $data, $id);
      $this->load->view('content/product/itemById.php', $data);
      $this->load->view('templates/footer.php');
   }
}
