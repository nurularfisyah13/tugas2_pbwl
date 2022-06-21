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
              <form role="form" action="<?= base_url; ?>/buku/updatePelanggan" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['pelanggan']['pel_id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nomor</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor..." name="nomor" value="<?= $data['pelanggan']['pel_no'];?>">
                  </div>
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control" placeholder="masukkan nama..." name="nama" value="<?= $data['pelanggan']['pel_nama'];?>">
                  </div>
                  <div class="form-group">
                    <label >Alamat</label>
                    <input type="text" class="form-control" placeholder="masukkan alamat..." name="alamat" value="<?= $data['pelanggan']['pel_alamat'];?>">
                  </div>
                  <div class="form-group">
                    <label >No. Hp</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor hp..." name="no.hp" value="<?= $data['pelanggan']['pel_hp'];?>">
                  </div>
                  <div class="form-group">
                    <label >KTP</label>
                    <input type="text" class="form-control" placeholder="masukkan ktp..." name="ktp" value="<?= $data['pelanggan']['pel_ktp'];?>">
                  </div>
                  <div class="form-group">
                    <label >No. Seri</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor seri..." name="no.seri" value="<?= $data['pelanggan']['pel_seri'];?>">
                  </div>
                  <div class="form-group">
                    <label >No. Meteran</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor meteran..." name="no.meteran" value="<?= $data['pelanggan']['pel_meteran'];?>">
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <input type="text" class="form-control" placeholder="masukkan status..." name="status" value="<?= $data['pelanggan']['pel_aktif'];?>">
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