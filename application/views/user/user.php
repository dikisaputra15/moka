<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah User</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Password</th>
                      <th>Jabatan</th>
                      <th>Unit</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($user as $dat) : ?>
                    <tr>
                      <td><?= $dat['nip']; ?></td>
                      <td><?= $dat['nama']; ?></td>
                      <td><?= $dat['password']; ?></td>
                      <td><?= $dat['jabatan']; ?></td>
                      <td><?= $dat['unit']; ?></td>
                      <td> 
                          <a href="<?= base_url('User/hapususer/') . $dat['id_user']; ?>" class="btn btn-danger">Hapus</a>
                          <a href="<?= base_url('User/edituser/') . $dat['id_user']; ?>" class="btn btn-primary">Edit</a>
                      </td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('User/tambahuser') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="NIP" name="nip" id="nip" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Lengkap" name="nama" id="nama" required>
                  </div> 
                 <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="password" placeholder="Password" name="password" id="password" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Jabatan" name="jabatan" id="jabatan" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="unit" name="unit" id="unit" required>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>