<?php

return [
  'title' => 'Media',
  'options' => [
    [
      'text' => 'All media',
      'icon' => 'image',
      'link' => purl('media')
    ]
  ],
  'html' => function() {

   return tpl::load(__DIR__ . DS . 'media.html.php', [
     'count' => site()->index()->files()->count(),
   ]);
  }
];
