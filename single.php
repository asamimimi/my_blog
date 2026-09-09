<?php get_header(); ?>
<main>
  <!-- 記事ページ -->
  <section class="newsSingle">
    <h2 class="sec-title">
      <span>News</span>
      お知らせ
    </h2>

    <?php if (have_posts()) : the_post(); ?>
      <article class="article">

        <header class="article__head">
          <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="article__date"><?php echo get_the_date('Y.m.d'); ?></time>
          <h2 class="article__title"><?php the_title(); ?></h2>
          <?php
          $cats = get_the_category();
          if ($cats) :
          ?>
            <ul class="article__cateList">
              <?php foreach ($cats as $cat) : ?>
                <li class="article__cateItem"><?php echo $cat->name; ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </header>
        <div class=" article__content">
          <!--本文取得-->
          <?php the_content(); ?>
        </div>
      </article>

    <?php endif; ?>
    <!-- ==================
      ページネーション
      ================== -->
    <div class="btnwrap">
      <div class="btn__pagenation btn__pagenation--pre">
        <!-- <?php previous_post_link('%link', '%title'); ?> -->
        <?php twpp_adjacent_post_link(true); ?>
      </div>
      <div class="btn__pagenation btn__pagenation--next">
        <!-- <?php next_post_link('%link', '%title'); ?> -->
        <?php twpp_adjacent_post_link(false); ?>
      </div>
    </div>

  </section>

</main>
<?php get_footer(); ?>