<?php get_header(); ?>
<main>
  <section class="fv">
    <div class="mv container">
      <div class="mv-lead">
        <h2 class="mv-lead__title">
          楽しいホームページ
        </h2>
        <p class="mv-lead__desc">
          ホームページを作る側も、見てくれる人も<br>
          「わくわく」「うきうき」とした<br class="onlySp">気持ちになる。<br><br>

          そんなサイトを目指してます。
        </p>
      </div>
      <div class="mv__imge">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_mv.png" alt="カフェオレでくつろぐ部屋の様子" width="1295" height="1152">
      </div>
      <!-- アニメーションするイラスト -->
      <div class="mv-animation">
        <div class="mv-animation__left">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_kids_01.png" alt="学校へ行く子供のイラスト" class="mv-animation__left__img01" width="243" height="383">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_kids_02.png" alt="学校へ行く子供のイラスト" class="mv-animation__left__img02" width="148" height="345">
          </div>
        </div>
        <div class="mv-animation__right">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_mama.png" alt="選択をする母親" class="mv-animation__right__img" width="586" height="538">
        </div>
      </div>
    </div>
    <!-- FVのお知らせBOX -->
    <div class="mv-newsContainer">
      <p class="mv-newsContainer__head"> お知らせ
      </p>
      <?php
      //$argsのプロパティを変えていく
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'no_found_rows' => true,  //ページャーを使う時はfalseに。
      );

      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
      ?>
          <p class="mv-newsContainer__title"> <?php the_title(); ?>
          </p>
          <a href="<?php echo esc_url(home_url('/news')); ?>" class="mv-newsContainer__link">More <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_arrow.svg" alt="矢印のアイコン" loading="lazy" class="mv-newsContainer__link__icon"></a>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </section>
  <!-- メッセージ -->
  <section class="top-message container" id="message">
    <h2 class="sec-title">
      <span>Message</span>
      メッセージ
    </h2>
    <p class="top-message__text">
      ご覧いただきありがとうございます。<br class="onlySp">私は2人の娘のママをしながら<br class="onlySp">web制作をしています。<br>
      このサイトは見る人が楽しめて、<br>
      自分も作りながらワクワクできるサイトを<br class="onlySp">作りたいなと思い作りました。<br>
      私自身、今までに作ったことのない、<br class="onlySp">仕掛けが組み込まれたサイトです。<br><br>

      楽しんでもらえたら嬉しいです。
    </p>
    <div class="top-message__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_desk.png" alt="デスクのイラスト" loading="lazy"></div>
  </section>
  <!-- できること -->
  <section class="top-service container" id="service">
    <h2 class="sec-title">
      <span>Service</span>
      できること
    </h2>
    <ul class="top-service__skillList">
      <li class="top-service__skill">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_html.png" alt="HTML" loading="lazy"></div>
      </li>
      <li class="top-service__skill">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_css.png" alt="CSS" loading="lazy"></div>
      </li>
      <li class="top-service__skill">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_wp.png" alt="WordPress" loading="lazy"></div>
      </li>
      <li class="top-service__skill">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_sass.png" alt="Sass" loading="lazy"></div>
      </li>
      <li class="top-service__skill">
        <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_js.png" alt="Javascript" loading="lazy"></div>
      </li>
    </ul>
  </section>
  <!-- お知らせ -->
  <section class="top-news container" id="news">
    <div class="top-news__head">
      <h2 class="sec-title">
        <span>News</span>
        お知らせ
      </h2>
      <!-- <button class="top-news__btn"> -->
      <a class="top-news__btn" href="<?php echo esc_url(home_url('/news')); ?>">一覧を見る</a>
      <!-- </button> -->
    </div>
    <div class="top-news__inner">
      <?php if (have_posts()) : ?>
        <div class="top-news__list">
          <?php while (have_posts()) : the_post(); ?>
            <article class="top-news__item">
              <a href="<?php the_permalink(); ?>" class="top-news__link">
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('Y.m.d'); ?>
                </time>
                <h3>
                  <?php if (mb_strlen($post->post_title, 'UTF-8') > 30) :
                    $title = mb_substr($post->post_title, 0, 30, 'UTF-8'); ?>
                    <?php echo $title . '…'; ?>
                  <?php else : ?>
                    <?php echo $post->post_title; ?>
                  <?php endif;  ?>
                </h3>

              </a>
            </article>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>
    </div>
    <div class="top-news__img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image_cafe.png" alt="コーヒータイムのイラスト" loading="lazy">
    </div>
  </section>
</main>

<?php get_footer(); ?>