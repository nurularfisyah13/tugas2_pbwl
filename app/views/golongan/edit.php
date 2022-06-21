  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Golongan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url; ?>/golongan/updateGolongan" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $data['golongan']['gol_id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nomor</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor..." name="id" value="<?= $data['golongan']['gol_id']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Kode</label>
                    <input type="text" class="form-control" placeholder="masukkan kode..." name="kode" value="<?= $data['golongan']['gol_kode']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Golongan</label>
                    <input type="text" class="form-control" placeholder="masukkan golongan..." name="nama" value="<?= $data['golongan']['gol_nama']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->