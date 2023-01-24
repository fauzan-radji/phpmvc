<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Daftar Mahasiswa</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <table class="table table-striped table-secondary">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $no = 1;
          foreach ($data['mahasiswa'] as $mhs) :
          ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $mhs['nama'] ?></td>
              <td><a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge bg-info text-decoration-none">Detail</a></td>
            </tr>
          <?php
            $no++;
          endforeach;
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>