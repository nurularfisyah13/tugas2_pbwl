  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Pelanggan</h1>
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
              <form role="form" action="<?= base_url; ?>/pelanggan/simpanpelanggan" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nomor</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor..." name="nomor">
                  </div>
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control" placeholder="masukkan nama..." name="nama">
                  </div>
                  <div class="form-group">
                    <label >Alamat</label>
                    <input type="text" class="form-control" placeholder="masukkan alamat..." name="alamat">
                  </div>
                  <div class="form-group">
                    <label >No. Hp</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor hp..." name="no.hp">
                  </div>
                  <div class="form-group">
                    <label >KTP</label>
                    <input type="text" class="form-control" placeholder="masukkan ktp..." name="ktp">
                  </div>
                  <div class="form-group">
                    <label >No. Seri</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor seri..." name="no.seri">
                  </div>
                  <div class="form-group">
                    <label >No. Meteran</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor meteran..." name="no.meteran">
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <input type="text" class="form-control" placeholder="masukkan status..." name="status">
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