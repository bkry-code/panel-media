<?php

namespace Kirby\Panel\Models;


class Media {

  public function __construct() {
    $this->index = panel()->site()->index();
    $this->files = $this->index->files();
  }

  public function topbar($topbar) {
    $topbar->append(purl('media'), 'Media');
  }

}
