  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman User</h1>
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
              <form role="form" action="<?= base_url; ?>/user/updateUser" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control" placeholder="masukkan email..." name="email" value="<?= $data['user']['user_email']; ?>" autofocus>
                  </div>
                  <div class="form-group">
                    <label >Password</label>
                    <input type="pass" class="form-control" placeholder="masukkan password..." name="password" value="<?= $data['user']['user_password'];?>">
                  </div>
                  <div class="form-group">
                    <label >Nama</label>
                    <input type="text" class="form-control" placeholder="masukkan nama..." name="nama" value="<?= $data['user']['user_nama'];?>">
                  </div>
                  <div class="form-group">
                    <label >Alamat</label>
                    <input type="text" class="form-control" placeholder="masukkan alamat..." name="alamat" value="<?= $data['user']['user_alamat'];?>">
                  </div>
                  <div class="form-group">
                    <label >Hp</label>
                    <input type="text" class="form-control" placeholder="masukkan nomor hp..." name="no.hp" value="<?= $data['user']['user_hp'];?>">
                  </div>
                  <div class="form-group">
                    <label >Kode Pos</label>
                    <input type="text" class="form-control" placeholder="masukkan kode pos..." name="kodepos" value="<?= $data['user']['user_pos'];?>">
                  </div>
                  <div class="form-group">
                    <label >Role</label>
                    <input type="text" class="form-control" placeholder="masukkan role..." name="role" value="<?= $data['user']['user_role'];?>">
                  </div>
                  <div class="form-group">
                    <label >Aktif</label>
                    <input type="text" class="form-control" placeholder="masukkan aktif..." name="aktif" value="<?= $data['user']['user_aktif'];?>">
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