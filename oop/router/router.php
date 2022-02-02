<?php

class Routes {
  public function route($routes, $path) {
    $route = $_SERVER['REQUEST_URI'];
    if (array_key_exists($route, $routes)) {
      include "{$routes[$route]}";
    } else {
      $path;
    }
  }

}