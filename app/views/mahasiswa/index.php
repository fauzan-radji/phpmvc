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
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
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
              <td><?= $mhs['nim'] ?></td>
              <td><?= $mhs['jurusan'] ?></td>
              <td><?= $mhs['email'] ?></td>
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