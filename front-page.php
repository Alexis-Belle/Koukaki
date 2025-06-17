<?php

get_header();
?>

    <main id="primary" class="site-main">
  <?php get_template_part('template-parts/hero'); ?>

  <section id="#story" class="story fade-in-up">
    <?php get_template_part('template-parts/section-story'); ?>
    <?php get_template_part('template-parts/section-personnages'); ?>
    <?php get_template_part('template-parts/section-lieu'); ?>
  </section>

  <?php get_template_part('template-parts/section-studio'); ?>
    </main><!-- #main -->

<?php
get_footer();
