<?php

session_start();

$envs = array_filter(explode(PHP_EOL, file_get_contents('./../.env')));

foreach($envs as $env){
    if(str_contains($env, '=') && !str_contains($env, '#'))
        putenv($env);
}

require_once "config.php";

$paths = array_filter(explode('/', $_GET['action']));

$defaultControllerAction = ['index', 'index'];

[$controller, $action] = array_values($paths) + $defaultControllerAction;

$controllerInstance = new (ucfirst($controller))();

$controllerInstance->$action();