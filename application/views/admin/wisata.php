  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tempat Wisata
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <a href="<?php echo base_url();  ?>admin/tambahwisata"><button type="button" class="btn btn-primary btn-lg">Tambah Data</button></a>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Wisata</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Tempat Wisata</th>
                  <th>Deskripsi Wisata</th>
                  <th>Gambar Wisata</th>
                  <th>Action</th>
                </tr>
                <?php $no=1; foreach($record->result_array() as $list){?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $list['tempat_wisata'];?></td>
                  <td><?php echo $list['deskripsi_wisata'];?></td>
                  <td><?php echo $list['gambar'];?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>admin/editwisata/<?php echo $list['id'];?>"><button type="button" class="btn btn-primary">Update</button></a>
                    <a href="<?php echo base_url(); ?>admin/hapus/<?php echo $list['id'];?>"><button type="button" class="btn btn-primary">Delete</button></a>
                  </td>
                </tr>
                <?php $no++ ; }?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
