<?php

kirby()->set('widget', 'media', __DIR__ . '/widget');

if(function_exists('panel') && $panel = panel()) {
  $panel->routes = array_merge([
    [
      'pattern' => 'media',
      'action'  => function() {
        require 'core/controller.php';
        require 'core/model.php';

        echo MediaController::index();
      },
      'method'  => 'GET|POST'
    ],
  ], $panel->routes);
}
