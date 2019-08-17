<div class="sidebar">
  <div class="sidebar__sidebar-item">
    <div class="sidebar-item__title">Теги</div>
    <div class="sidebar-item__content">
      <?php $tags = get_tags(array('hide_empty' => false));
      if ($tags) :
        ?>
        <ul class="tags-list">
          <?php foreach ($tags as $tag) : ?>
            <li class="tags-list__item"><a href="<?=get_tag_link($tag->term_id)?>" class="tags-list__item__link"><?=$tag->name?></a></li>
          <? endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
  <div class="sidebar__sidebar-item">
    <div class="sidebar-item__title">Категории</div>
    <?php
    $categories = get_terms([
      'taxonomy' => 'category',
      'hide_empty' => true,
      'parent' => 0
    ]);
    if ($categories) :
      ?>
      <div class="sidebar-item__content">
        <ul class="category-list">
          <?php foreach ($categories as $category) : ?>
            <li class="category-list__item"><a href="<?=get_term_link($category)?>" class="category-list__item__link">
                <?=$category->name?></a>
              <?php $subcategories = get_terms([
                'taxonomy' => 'category',
                'hide_empty' => false,
                'parent' => $category->term_id
              ]);
              if ($subcategories) : ?>
                <ul class="category-list__inner">
                  <?php foreach ($subcategories as $subcategory) : ?>
                    <li class="category-list__item"><a href="<?=get_term_link($subcategory)?>" class="category-list__item__link">
                        <?=$subcategory->name?></a></li>
                  <? endforeach; ?>
                </ul>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
  <?php if ( is_active_sidebar( 'true_side' ) ) : ?>

    <div id="true-side" class="sidebar">

      <?php dynamic_sidebar( 'true_side' ); ?>

    </div>

  <?php endif; ?>
</div>