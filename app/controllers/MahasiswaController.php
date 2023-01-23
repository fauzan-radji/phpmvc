<?php
class MahasiswaController extends Controller
{
  public function index()
  {
    $this->view('templates/header', ['title' => 'Mahasiswa@index']);
    $this->view('mahasiswa/index', [
      'mahasiswa' => $this->model('Mahasiswa')->getAll()
    ]);
    $this->view('templates/footer');
  }
}
