<?php

$title = 'Media files (' . site()->index()->files()->count() . ')';

return [
  'title' => [
    'text'       => $title,
    'link'       => purl('media'),
    'compressed' => true
  ],
  'options' => [
    [
      'text' => 'Show all',
      'icon' => 'th',
      'link' => purl('media')
    ]
  ],
  'html' => function() {
    return false;
  }
];
