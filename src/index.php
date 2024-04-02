<?php

session_start();

require_once "config.php";

$paths = array_filter(explode('/', $_GET['action']));

$defaultControllerAction = ['index', 'index'];

[$controller, $action] = array_values($paths) + $defaultControllerAction;

$controllerInstance = new (ucfirst($controller))();

$controllerInstance->$action();