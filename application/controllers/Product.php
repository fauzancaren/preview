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
      $this->load->helper('nohp');
		// panggil library text
		$this->load->helper('text');	
		// panggil library text
		$this->load->library('user_agent');	
      $data['title'] = "Detail Item";
      $data['_page'] = 'PRODUCTS';
      $data['productKategori'] = $this->Product_model->getDataProductKategori();
      $data['MsitemById'] = $this->Product_model->getDataItemById($id);
      $data['MsitemDeskripsi'] = $this->Product_model->getDataItemDeskripsiById($id);
      $data['MsItemSubImg'] = $this->Product_model->getDataItemSubImgById($id);
      $this->load->view('templates/header.php', $data, $id);
      $this->load->view('content/product/itemById.php', $data);
      $this->load->view('templates/footer.php');
   }
   public function getitem($category, $index)
   {
      $data = $this->Product_model->getDataProductNext($category, $index);
      $html = "";
      $delay = 0;
      foreach ($data as $row) {
      if($delay == 400) { $delay=100 ;}else{ $delay+=100;}
         $html .= '<a data-aos="fade-up" data-aos-delay="'.$delay.'" data-aos-once="false" class ="col" style="text-decoration: none; color: #000000bd;" href="' . base_url("product/detailItem/" . $row->MsItemId) . '">
                     <div class="d-flex flex-column justify-content-center  p-2" style="background-color: #f2f2f22b; box-shadow: -1px 1px 4px 0px #3c2f2a7a; border-radius: 10px; font-family: Montserrat, sans-serif; height: 100%;">
                        <div class="d-flex flex-column item p-2"> 
                           <img class="img-fluid mb-2 rounded-3 align-self-center" style="height: 300px; width: 350px;object-fit: cover;" src="' . base_url("function/functionimage/product/") . $row->MsItemCode . '" alt="">
                           <h6 class="align-self-center align-self-lg-start px-sm-2 mt-2 fw-bold" style="color: #896a5e;">' . $row->MsItemName . '</h6>
                           <span class="align-self-center align-self-lg-start px-sm-2 mb-3 fw-light">' . $row->MsItemSize . '</span>
                           <span class="align-self-center align-self-lg-start px-sm-2 fw-normal">Rp. ' . number_format($row->MsItemPrice) . ' /' . $row->MsItemUoM . '</span>
                        </div>
                     </div>
                  </a>';
      }
      echo $html;
   }
}
