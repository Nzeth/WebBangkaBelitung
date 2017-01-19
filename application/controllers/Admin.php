<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('uploads');
    if (!$this->session->userdata('logged_in')) {
          redirect('login');
        }
  }

  public function index(){
		$this->load->view('admin/header');
    $this->load->view('admin/dasboard');
    $this->load->view('admin/footer');
	}

  public function wisata(){
    $data['record'] = $this->uploads->getWisata();
		$this->load->view('admin/header');
    $this->load->view('admin/wisata', $data);
    $this->load->view('admin/footer');
	}

  public function tambahwisata(){
    $this->load->view('admin/header');
    $this->load->view('admin/tambah_wisata');
    $this->load->view('admin/footer');
  }

  public function insert_wisata(){
		$this->load->library('upload');
		$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
    $config['upload_path'] = './uploads/wisata/'; //path folder
  	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['max_size'] = '200488'; //maksimum besar file 20M
    $config['file_name'] = $nmfile; //nama yang terupload nantinya
		$this->upload->initialize($config);

		if($_FILES['gambar']['name'])
		{
			if (!$this->upload->do_upload('gambar'))
			{
        $this->load->view('admin/tambahwisata');

        	}else{
          	$gbr = $this->upload->data();
            $data = array(
            'tempat_wisata' =>$this->input->post('tempat'),
            'deskripsi_wisata' =>$this->input->post('deskripsi'),
            'gambar' =>$gbr['file_name']
            );

            $this->uploads->insert_wisata($data); //akses model untuk menyimpan ke database
            redirect('admin/wisata'); //jika berhasil maka akan ditampilkan view gambar

            }
        }
    }

  public function editwisata($id){
    $data['record'] = $this->uploads->getSinglewisata($id)->row_array();
    $this->load->view('admin/header');
    $this->load->view('admin/edit_wisata', $data);
    $this->load->view('admin/footer');
  }

  public function update_wisata(){
		$this->load->library('upload');
		$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
    $config['upload_path'] = './uploads/wisata/'; //path folder
  	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['max_size'] = '200488'; //maksimum besar file 20M
    $config['file_name'] = $nmfile; //nama yang terupload nantinya
		$this->upload->initialize($config);

		if($_FILES['gambar']['name'])
		{
			if (!$this->upload->do_upload('gambar'))
			{
        $this->load->view('admin/tambahwisata');

        	}else{
          	$gbr = $this->upload->data();
            $data = array(
            'tempat_wisata' =>$this->input->post('tempat'),
            'deskripsi_wisata' =>$this->input->post('deskripsi'),
            'gambar' =>$gbr['file_name']
            );

            $this->uploads->update_wisata($data, $this->input->post('id')); //akses model untuk menyimpan ke database
            redirect('admin/wisata'); //jika berhasil maka akan ditampilkan view gambar

            }
        }
        $data = array(
        'tempat_wisata' =>$this->input->post('tempat'),
        'deskripsi_wisata' =>$this->input->post('deskripsi'),
        'gambar' =>$this->input->post('gambar2')
        );

        $this->uploads->update_wisata($data, $this->input->post('id')); //akses model untuk menyimpan ke database
        redirect('admin/wisata'); //jika berhasil maka akan ditampilkan view gambar
    }

    function hapus($id){
      $this->uploads->do_hapus_wisata($id);
      redirect('admin/wisata');
    }

    function logout(){
      $this->session->unset_userdata('logged_in');
      redirect('login');
    }

}
