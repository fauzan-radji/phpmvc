<?php
class App
{
  private $controller;
  private $method;
  private $params = [];

  public function __construct()
  {
    $url = $this->getURL();
    [$route, $params] = Route::get($url);
    $this->params = $params;

    if (!isset($route)) {
      echo "<code>Cannot get $url</code>";
      die;
    }

    if (!file_exists('../app/controllers/' . $route->controller . '.php')) {
      echo "<code>There is no controller named <b>$route->controller</b></code>";
      die;
    }

    require_once '../app/controllers/' . $route->controller . '.php';
    $this->controller = new $route->controller;
    $this->method = $route->method;

    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function getURL()
  {
    $url = '/';
    if (isset($_GET['__url'])) {
      $url .= $_GET['__url'];
      unset($_GET['__url']);
      $url = rtrim($url, '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
    }

    return $url;
  }
}
