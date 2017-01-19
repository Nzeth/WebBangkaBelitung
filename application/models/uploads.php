<?php
class Uploads extends CI_Model {

  var $tabel1 = 'wisataa';//tabel gambar di database ci_graphic

    function __construct() {
        parent::__construct();
    }

    function insert_wisata($data){
       $this->db->insert($this->tabel1, $data);
       return TRUE;
  }

    function getWisata() {
         return $this->db->get('wisataa');
    }

    //fungsi untuk select satu gambar untuk di edit
    function getSinglewisata($id) {
        return $query = $this->db->get_where('wisataa', array('id' => $id));
    }

    //fungsi untuk melakukan edit data blog
    function update_wisata($data, $id){
      $this->db->where('id', $id);
       $this->db->update($this->tabel1, $data);
       return TRUE;
    }

    //fungsi untuk menghapus blog dari database
    function do_hapus_wisata($id) {
        $this->db->delete('wisataa', array('id' => $id));
        // redirect('admin/welcome/blog');
    }

}
