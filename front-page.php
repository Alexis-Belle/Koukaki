<?php

get_header();
?>

<main id="primary" class="site-main">
  <section class="banner fade-in-down">
      <?php get_template_part('template-parts/hero'); ?>
  </section>

  <section id="#story" class="story">
    <article class="fade-in-up animation-wrapper">
      <?php get_template_part('template-parts/section-story'); ?>
    </article>
    <article id="characters" class="fade-in-up">
      <?php get_template_part('template-parts/section-personnages'); ?>
    </article>
    <article id="place" class="fade-in-up">
      <?php get_template_part('template-parts/section-lieu'); ?>
    </article>
  </section>
  
  <section id="studio" class="fade-in-up">
    <?php get_template_part('template-parts/section-studio'); ?>
  </section>
  <section id="oscars" class="fade-in-up">
    <?php get_template_part('template-parts/section-oscars'); ?>
  </section>
</main><!-- #main -->

<?php
get_footer();
