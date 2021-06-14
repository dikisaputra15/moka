<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="" method="POST">
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id user</label>
                    <input type="text" class="form-control" name="id_user" value="<?= $user['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">nip</label>
                    <input type="text" class="form-control" name="nip" value="<?= $user['nip']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $user['nama']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" value="<?= $user['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="<?= $user['jabatan']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Unit</label>
                    <input type="text" class="form-control" name="unit" value="<?= $user['unit']; ?>">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>