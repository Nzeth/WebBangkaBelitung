<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tambah Tempat Wisata
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
              <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="insert_wisata" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Tempat Wisata</label>
                  <input type="text" class="form-control" name="tempat" placeholder="Masukan Tempat Wisata">
                </div>
                <div class="form-group">
                  <label>Deskripsi Wisata</label>
                  <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Wisata"></textarea>
                  <!-- <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Wisata"> -->
                </div>
                <div class="form-group">
                  <label>File Gambar</label>
                  <input type="file" name="gambar" value="">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </section>
</div>
