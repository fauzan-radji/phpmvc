<?php
class About
{
  public function index($first = 0, $second = 0)
  {
    var_dump($first, $second);
    echo 'About@index';
  }
}
