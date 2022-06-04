<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Product_model');
   }

   public function index()
   {
      $data['title'] = 'My Account';
      $data['_page'] = 'MY ACCOUNT';
      $this->load->view('templates/header.php', $data);
      $this->load->view('content/account/myaccount.php');
      $this->load->view('templates/footer.php');
   }
}
