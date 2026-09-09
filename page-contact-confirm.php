<?php get_header(); ?>

</section>
<main>

  <section class="contact container">
    <h2 class="sec-title">
      <span>Confirm</span>
      お問い合わせ内容確認
    </h2>

    <?php if (have_posts()) : the_post(); ?>
      <article class="article">


        <!--本文取得-->
        <?php the_content(); ?>

      </article>

    <?php endif; ?>


  </section>

</main>
<?php get_footer(); ?>