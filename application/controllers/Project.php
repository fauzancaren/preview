<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Product_model');
   }

   public function index()
   {
      $data['title'] = 'Project';
      $data['_page'] = 'PROJECT';
      $this->load->view('templates/header.php', $data);
      $this->load->view('content/project/project.php');
      $this->load->view('templates/footer.php');
   }
}
