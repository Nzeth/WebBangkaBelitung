<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('uploads');
  }

  public function index(){
		$this->load->view('header');
    $this->load->view('konten');
    $this->load->view('footer');
	}

  public function akun(){
    $this->load->view('admin/akun');
  }

  public function tampilan(){
    $data['record'] = $this->uploads->getWisata();
    $this->load->view('header');
    $this->load->view('slider');
    $this->load->view('tampilan', $data);
    $this->load->view('footer');
  }

  public function tentang()
  {
    $this->load->view('header');
    $this->load->view('tentang');
    $this->load->view('footer');
  }

  public function hubungi()
  {
    $this->load->view('header');
    $this->load->view('hubungi');
    $this->load->view('footer');
  }

}
