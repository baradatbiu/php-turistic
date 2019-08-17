<?php get_header(); the_post()?>
  <div class="main-content">
    <div class="content-wrapper">
      <div class="content">
        <div class="article-title title-page">
          <?= the_title()?>
        </div>
        <div class="article-image"><?= the_post_thumbnail('thumbnail')?></div>
        <div class="article-info">
          <div class="post-date"><?= the_time('d.m.Y')?></div>
        </div>
        <div class="article-text">
          <?= the_content() ?>
        </div>
        <div class="article-pagination">
          <?php if ($previousPost = get_previous_post()) :?>
            <div class="article-pagination__block pagination-prev-left">
                <a href="<?=get_permalink($previousPost->ID)?>" class="article-pagination__link">
                    <i class="icon icon-angle-double-left"></i>Предыдущая запись
                </a>
              <div class="wrap-pagination-preview pagination-prev-left">
                <div class="preview-article__img"> <?=get_the_post_thumbnail($previousPost->ID, 'page_thumb')?></div>
                <div class="preview-article__content">
                  <div class="preview-article__info">
                      <a href="<?=get_permalink($previousPost->ID)?>" class="post-date"><?=get_the_time('d.n.Y', $previousPost->ID)?></a>
                  </div>
                  <div class="preview-article__text"><?=wp_trim_words($previousPost->post_content, 5) . "..."?></div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <?php if ($nextPost = get_next_post()) :?>
            <div class="article-pagination__block pagination-prev-left">
                <a href="<?=get_permalink($nextPost->ID)?>" class="article-pagination__link">
                    <i class="icon icon-angle-double-right"></i>Следующая запись
                </a>
              <div class="wrap-pagination-preview pagination-prev-left">
                <div class="preview-article__img"> <?=get_the_post_thumbnail($nextPost->ID, 'page_thumb')?></div>
                <div class="preview-article__content">
                  <div class="preview-article__info">
                      <a href="<?=get_permalink($nextPost->ID)?>" class="post-date"><?=get_the_time('d.n.Y', $nextPost->ID)?></a>
                  </div>
                  <div class="preview-article__text"><?=wp_trim_words($nextPost->post_content, 5) . "..."?></div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- sidebar-->
      <?php get_sidebar() ?>
    </div>
  </div>

<?php get_footer() ?>