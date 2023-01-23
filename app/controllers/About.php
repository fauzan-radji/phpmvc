<?php
class About extends Controller
{
  public function index($nama = 'Fauzan Radji', $pekerjaan = 'Mahasiswa')
  {
    $this->view('templates/header', ['title' => 'About@index']);
    $this->view('about/index', [
      'nama' => $nama,
      'pekerjaan' => $pekerjaan,
    ]);
    $this->view('templates/footer');
  }

  public function page()
  {
    $this->view('templates/header', ['title' => 'About@page']);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
