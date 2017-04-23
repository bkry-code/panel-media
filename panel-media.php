<?php

kirby()->set('widget', 'media', __DIR__ . '/widget');

require 'controller/media.php';
require 'model/media.php';


panel()->routes = array_merge([
  [
    'pattern' => 'media',
    'action'  => function() {
      $media = new MediaController;
      echo $media->index();
    },
    'method'  => 'GET|POST'
  ],
], panel()->routes);
