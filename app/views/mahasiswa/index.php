<div class="container">
  <div class="row mb-3">
    <div class="col">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
    </div>
  </div>

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

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="" hidden>Pilih Jurusan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Teknik Arsitektur">Teknik Arsitektur</option>
              <option value="Teknik Sipil">Teknik Sipil</option>
              <option value="Seni Rupa">Seni Rupa</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>