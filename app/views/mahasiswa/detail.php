<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Detail <?= $data['mahasiswa']['nama'] ?></h3>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?= $data['mahasiswa']['nama'] ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $data['mahasiswa']['email'] ?></h6>
          <p class="card-text"><?= $data['mahasiswa']['nim'] ?> | <?= $data['mahasiswa']['jurusan'] ?></p>
          <a href="<?= BASEURL ?>/mahasiswa" class="card-link">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>