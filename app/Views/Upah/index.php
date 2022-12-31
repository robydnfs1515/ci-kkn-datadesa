<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?=$judul;?></h1>

  <div class="card">
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No. NIK</th>
            <th>No. KK</th>
            <th>No. Telfon</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;?>
          <?php foreach ($upah as $row): ?>
          <tr>
            <th scope="row"><?php $i;?></th>
            <th><?=['nama_upah'];?></th>
            <th><?=['nonik_upah'];?></th>
            <th><?=['notelp_upah'];?></th>
          </tr>
          <?php $i++;?>
          <?php endforeach?>
        </tbody>
      </table>
    </div>
  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->