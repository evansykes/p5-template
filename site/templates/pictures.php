<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <div class="bingo"><div id="pick">
    <h1><?php echo html($page->title()) ?></h1></div></div>
    <div class="maintext"><?php echo kirbytext($page->text()) ?></div>
  </article>

</section>

<?php snippet('masonry') ?>

<?php snippet('footer') ?>