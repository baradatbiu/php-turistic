<footer class="main-footer">
  <div class="content-footer">
    <?php
    wp_nav_menu([
      'theme_location' => 'footer_menu',
      'container' => 'div',
      'container_class' => 'bottom-menu',
      'menu_class' => 'b-menu__list'
    ]);
    ?>
    <div class="copyright-wrap">
        <div class="copyright-text">Туристик<a href="#" class="copyright-text__link"> loftschool <?php echo date('Y')?></a></div>
    </div>
  </div>
</footer>
</div>
<!-- wrapper_end-->
<?php wp_footer() ?>
</body>
</html>
