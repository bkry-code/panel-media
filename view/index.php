<div class="section">

  <h2 class="hgroup cf">
    <span>
      Media for <a href="<?php __(purl('options')) ?>"><?php __(site()->title()) ?></a>
      <span class="counter">( <?= $media->count() ?> )</span>
    </span>

  </h2>

  <?php if($media->count()): ?>
  <div class="files">

    <div class="grid">

      <?php $currentPage = null ?>

      <?php foreach($media as $file): ?><!--
   --><div class="grid-item" id="<?php __($file->filename()) ?>">
         <div class="file-info" style="padding-left: 0;">
           <?php if($currentPage !== $file->page()) : ?>
             <div class="cut"><b><a href="<?= $file->page()->url('files') ?>"><?php __($file->page()->title()) ?></a></b></div>
           <?php else : ?>
             &nbsp;
           <?php endif ?>
          <?php $currentPage = $file->page() ?>
         </div>
        <figure title="<?php __($file->filename()) ?>" class="file">
          <a class="file-preview file-preview-is-<?php __($file->type()) ?>" href="<?php __($file->url('edit')) ?>">
            <?php if($file->extension() == 'svg'): ?>
            <object data="<?php __($file->url('preview')) ?>"></object>
            <?php elseif($file->options()->preview()): ?>
            <img src="<?php __($file->crop(400, 266)->url()) ?>" alt="<?php __($file->filename()) ?>">
            <?php else: ?>
            <span><?php __($file->extension()) ?></span>
            <?php endif ?>
          </a>
          <figcaption class="file-info">
            <a href="<?php __($file->url('edit')) ?>">
              <span class="file-name cut"><?php __($file->filename()) ?></span>
              <span class="file-meta marginalia cut"><?php __($file->type() . ' / ' . $file->niceSize()) ?></span>
            </a>
          </figcaption>
          <nav class="file-options cf">

            <a class="btn btn-with-icon" href="<?php __($file->url('edit')) ?>">
              <?php i('pencil', 'left') ?><span><?php _l('files.index.edit') ?></span>
            </a>

            <?php if($file->ui()->delete()): ?>
            <a data-modal class="btn btn-with-icon" href="<?php __($file->url('delete') . '?_redirect=media') ?>">
              <?php i('trash-o', 'left') ?><span><?php _l('files.index.delete') ?></span>
            </a>
            <?php else: ?>
            <span class="btn btn-with-icon btn-disabled">
              <?php i('trash-o', 'left') ?><span><?php _l('files.index.delete') ?></span>
            </span>
            <?php endif ?>

          </nav>
        </figure>
      </div><!--
  --><?php endforeach ?>

    </div>

  </div>

  <?php else: ?>

  <div class="instruction">
    <div class="instruction-content">
      <p class="instruction-text"><?php _l('files.index.upload.first.text') ?></p>
    </div>
  </div>

  <?php endif ?>

</div>
