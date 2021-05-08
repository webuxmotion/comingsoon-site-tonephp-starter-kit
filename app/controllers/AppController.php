<?php

namespace app\controllers;

use core\base\Controller;

class AppController extends Controller {
  public $layout = 'comingsoon';
  
  public function __construct($route) {
    parent::__construct($route);
  }
}