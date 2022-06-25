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
                     <div class="d-flex flex-column p-md-2" style="background-color: #f2f2f22b;box-shadow: 1px 2px 2px 0px #a3a2a291;     border: 1.2px solid #a3a2a280; font-family: Montserrat, sans-serif; height: 100%;">
                        <div class="d-flex flex-column item p-md-2"> 
                           <img class="img-fluid mb-2 align-self-center img-product" src="' . base_url("function/functionimage/product/") . $row->MsItemCode . '" alt="">
                           <small class="align-self-center align-self-lg-start px-2 mt-2 fw-bold" style="color: #896a5e; font-size: 1em; min-height: 46px;">' . $row->MsItemName . '</small>
                           <span class="align-self-center align-self-lg-start px-sm-2 mb-2 fw-normal" style="font-size: 1.3vh;">' . $row->MsItemSize . '</span>
                           <span class="align-self-center align-self-lg-start px-sm-2 fw-normal mb-2" style="font-size: 1.7vh;">Rp. ' . number_format($row->MsItemPrice) . ' /' . $row->MsItemUoM . '</span>
                        </div>
                     </div>
                  </a>';
      }
      echo $html;
   }
}
