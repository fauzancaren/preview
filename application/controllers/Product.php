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
   public function getitem($category, $index)
   {
      $data = $this->Product_model->getDataProductNext($category, $index);
      $html = "";
      foreach ($data as $row) {
         $html .= '<div class="d-flex flex-row justify-content-center">
                     <a style="text-decoration: none; color: black;" href="' . base_url("product/detailItem/" . $row->MsItemId) . '">
                        <div class="d-flex flex-column p-3 item">
                           <img class="img-fluid mb-3 rounded-3" style="height: 250px; width: 250px;object-fit: cover;" src="' . base_url("function/functionimage/product/") . $row->MsItemCode . '" alt="">
                           <span class=" px-1 fw-bold">' . $row->MsItemName . '</span>
                           <small class="px-1">Rp. ' . number_format($row->MsItemPrice) . ' /' . $row->MsItemUoM . '</small>
                           <small class="px-1">' . $row->MsItemCode . '</small>
                        </div>
                     </a>
                  </div>';
      }
      echo $html;
   }
}
