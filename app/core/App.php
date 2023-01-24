<?php
class App
{
  private $controller = 'HomeController';
  private $method = 'index';
  private $params = [];

  public function __construct()
  {
    $url = $this->parseURL();

    if (isset($url)) {
      if (file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
        $this->controller = ucfirst($url[0]) . 'Controller';
        unset($url[0]);
      }
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    if (isset($url)) {
      if (isset($url[1])) {
        if (method_exists($this->controller, $url[1])) {
          $this->method = $url[1];
          unset($url[1]);
        }
      }

      if (!empty($url)) {
        $this->params = array_values($url);
      }
    }
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseURL()
  {
    if (isset($_GET['__url'])) {
      $url = $_GET['__url'];
      unset($_GET['__url']);
      $url = rtrim($url, '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);

      return $url;
    }
  }
}
