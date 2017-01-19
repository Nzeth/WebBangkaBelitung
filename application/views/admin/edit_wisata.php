<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Ubah Tempat Wisata
      <small></small>
    </h1>
  </section>
  <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>admin/update_wisata" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Tempat Wisata</label>
                  <input type="text" class="form-control" name="tempat" placeholder="Masukan Tempat Wisata" value="<?php echo $record['tempat_wisata']; ?>">
                </div>
                <div class="form-group">
                  <label>Deskripsi Wisata</label>
                  <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Wisata" value="<?php echo $record['deskripsi_wisata']; ?>"></textarea>
                  <!-- <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Wisata" value="<?php echo $record['deskripsi_wisata']; ?>"> -->
                </div>
                <div class="form-group">
                  <label>File Gambar Lama</label>
                  <input type="hidden" name="gambar2" value="<?php echo $record['gambar']; ?>">
                  <img src="<?php echo base_url(); ?>uploads/wisata/<?php echo $record['gambar']; ?>" alt="">
                </div>
                <div class="form-group">
                  <label>File Gambar Baru</label>
                  <input type="file" name="gambar">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </section>
</div>
