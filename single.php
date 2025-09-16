<?php
/**
 * The Single Post template
 * @package Understrap (child theme TBICS)
 */

get_header(); ?>

<main id="single-post" class="site-main">

  <!-- Hero section -->
  <section class="single-hero">
    <div class="container text-center">
      <h1 class="post-title"><?php the_title(); ?></h1>
      <p class="post-meta"><?php echo get_the_date(); ?></p>
      <a href="/TBICS2026/category/news" class="btn btn-secondary mt-3">← Back to News</a>
    </div>
  </section>

  <!-- Post Content -->
  <div class="container my-5">
    <article class="single-content">
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail mb-4">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="post-body">
        <?php
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
        ?>
      </div>
    </article>

    <!-- Post navigation -->
    <div class="post-navigation d-flex justify-content-between mt-5">
      <div class="prev-post">
        <?php previous_post_link('%link', '← Previous'); ?>
      </div>
      <div class="next-post">
        <?php next_post_link('%link', 'Next →'); ?>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
