<?php

use App\System\Controller;

class Index extends Controller {

  public function index() {
    $this->view("index");
  }

}