<?php get_header(); ?>
<main>
  <!-- メッセージ -->
  <section class="news container">
    <h2 class="sec-title">
      <span>News</span>
      お知らせ
    </h2>
    <?php if (have_posts()) : ?>
      <div class="news__inner">
        <?php while (have_posts()) : the_post(); ?>
          <article class="news__card newsCard">
            <a href="<?php the_permalink(); ?>" class="newsCard__link">
              <?php
              // カテゴリーのデータを取得
              $cat = get_the_category();
              $cat = $cat[0];
              ?>
              <p class="newsCard__cate"><?php echo $cat->cat_name; ?></p>
              <div class="newsCard__img">
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="タイトル" loading="lazy">
              </div>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="newsCard__date"><?php echo get_the_date('Y.m.d'); ?></time>
              <h2 class="newsCard__title">
                <?php the_title(); ?>
              </h2>
            </a>
          </article>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </section>

</main>
<?php get_footer(); ?>