<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->template->load('templates/home_template','kontak');
  }

}
