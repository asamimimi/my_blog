<?php get_header(); ?>
<main>
  <section class="contact container">
    <h2 class="sec-title">
      <span>Contact</span>
      お問い合わせ
    </h2>

    <?php if (have_posts()) : the_post(); ?>
      <div class="article">


        <!--本文取得-->
        <?php the_content(); ?>

      </div>

    <?php endif; ?>


  </section>

</main>
<?php get_footer(); ?>