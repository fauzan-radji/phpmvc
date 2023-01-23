<?php
class Mahasiswa
{
  private $mhs = [
    [
      'nama' => 'Fauzan Radji',
      'nim' => '531421099',
      'email' => 'fauzanradji@gmail.com',
      'jurusan' => 'Teknik Informatika'
    ],
    [
      'nama' => 'Sigit Rendang',
      'nim' => '531421065',
      'email' => 'sigitrendang@gmail.com',
      'jurusan' => 'Teknik Industri'
    ],
    [
      'nama' => 'Reza Kecap',
      'nim' => '531421034',
      'email' => 'reza_kecap@gmail.com',
      'jurusan' => 'Teknik Elektro'
    ],
    [
      'nama' => 'Roger Sumatera',
      'nim' => '531421093',
      'email' => 'roger@gmail.com',
      'jurusan' => 'Teknik Arsitektur'
    ]
  ];

  public function getAll()
  {
    return $this->mhs;
  }
}
