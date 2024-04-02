<?php

namespace App\System;

class Controller {

  public function view($view, $data = [], $header = true, $footer = true) {

    $header && require_once VIEW_PATH . 'layout/header.view.phtml';

    // make $data visible to view
    if (is_array($data)) {
      extract($data, EXTR_SKIP);
    } else {
      extract([$data], EXTR_SKIP);
    }

    // ex: contact/edit
    $defaultPath = ['index', 'index'];
    [$folder, $action] = explode(".", $view) + $defaultPath;

    // view/${folder}/{$action} => view/contact/edit.view.phtml
    require_once VIEW_PATH . $folder . '/' . $action . '.view.phtml';

    $footer && require_once VIEW_PATH . 'layout/footer.view.phtml';

  }

  public function getParams() {
    $urlParts = explode('/', $_SERVER['REQUEST_URI']);
    $urlParamsOnly = array_slice($urlParts, 3);
    return $urlParamsOnly;
  }

}