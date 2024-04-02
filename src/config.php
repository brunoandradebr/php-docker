<?php

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
define('MODEL_PATH', ROOT_PATH . '/model/');
define('VIEW_PATH', ROOT_PATH . '/view/');
define('CONTROLLER_PATH', ROOT_PATH . '/controller/');
define('SYSTEM_PATH', ROOT_PATH . '/system/');
// assets folder do not exists inside project, it's an alias defined in nginx conf
define('ASSETS', '/assets');

spl_autoload_register(function ($class_name) {

  $requirePaths = [SYSTEM_PATH, CONTROLLER_PATH, MODEL_PATH];

  foreach ($requirePaths as $path) {

    $partsFromNamespace = explode('\\', $class_name);

    $file = $path . end($partsFromNamespace) . '.php';

    if (file_exists($file))
      require_once $file;

  }

});

if (!isset($_SESSION['theme']))
  $_SESSION['theme'] = 'light';