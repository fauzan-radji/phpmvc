<?php
class HomeController extends Controller
{
  public function index()
  {
    $this->view('templates/header', ['title' => 'Home@index']);
    $this->view('home/index', ['nama' => $this->model('User')->getUser()]);
    $this->view('templates/footer');
  }
}
