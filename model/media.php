<?php

namespace Kirby\Panel\Models;


class Media {

  public function __construct() {

    $this->media = panel()->site()->index()->files();

  }

  public function topbar($topbar) {
    $topbar->append(purl('media'), 'Media');
  }

}
