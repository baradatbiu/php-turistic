<?php get_header(); the_post() ?>
  <!-- header_end-->
  <div class="main-content">
    <div class="content-wrapper">
      <div class="content">
        <h1 class="title-page"><?= the_title()?></h1>
        <?= the_content() ?>
      </div>
      <!-- sidebar-->
      <?php get_sidebar() ?>
    </div>
  </div>
<?php get_footer() ?>