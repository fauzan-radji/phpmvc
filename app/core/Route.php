<?php

class Route
{
  public $route;
  public $controller;
  public $method;
  public $params;

  public function __construct($route, $controller, $method)
  {
    $this->route = $route;
    $this->controller = $controller;
    $this->method = $method;
    $this->params = [];
  }

  //===== STATIC =====//
  private static $routes = [];

  public static function get($path)
  {
    foreach (Route::$routes as $route) {
      $pattern = '#^' . preg_replace('/\{\w+\}/', '(\w+)', $route->route) . '$#i';
      if (!preg_match($pattern, $path, $matches)) continue;

      $pattern = str_replace('(\w+)', '\{(\w+)\}', $pattern);
      preg_match($pattern, $route->route, $keys);

      array_shift($matches);
      array_shift($keys);

      $params = array_combine($keys, $matches);

      return [$route, $params];
    }

    return null;
  }

  public static function add($route, $handler)
  {
    [$controller, $method] = $handler;
    Route::$routes[] = new Route($route, $controller, $method);
  }
}
