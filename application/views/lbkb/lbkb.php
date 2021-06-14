
     
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data LBKB</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data LBKB</h6>
            </div>
            <div class="card-body">
            <form method="post" action="<?= base_url('Lbkb/import'); ?>" enctype="multipart/form-data">
                <p><label>Select Excel File</label>
                <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                <input type="submit" name="import" value="Import" class="btn btn-info" />
            </form>

        </div>
    </div>
</div>






