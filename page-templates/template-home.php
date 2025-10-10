<?php
/**
 * Template Name: Template Home
 *
 * @package Understrap
 */

defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- Custom Hero Section -->
<section class="hero-section">
  <div class="hero-overlay">
  <div class="hero-content hero-card">
  <div class="anniv-hero">
  <span class="anniv-wrap is-meta">
    <span class="anniv-pill">
      <span class="anniv-star" aria-hidden="true"></span>
      Celebrating 10 Years
    </span>

    <!-- optional extra sparkles -->
    <span class="sparkle s1">✦</span>
    <span class="sparkle s2">★</span>
    <span class="sparkle s3">✧</span>
    <span class="sparkle s4">✦</span>
    <span class="sparkle s5">★</span>
  </span>

  <h1 class="hero-title">APSCE TBICS<br>Festival of Learning 2026</h1>
  <p class="hero-location">Kumamoto, Japan</p>
  <p class="hero-date">June 25–27, 2026</p>
</div>
</div>
  </div>
</section>

<!-- home-intro stays as your welcome copy only -->
<section class="home-intro">
  <div class="container">
    <div class="intro-panel intro-panel--wide">
      <h2 class="intro-heading ruled">Welcome to APSCE TBICS Festival of Learning 2026</h2>

      <img class="intro-badge"
           src="<?php echo esc_url( get_theme_file_uri('img/TBICS2026-logo.png') ); ?>"
           alt="TBICS 2026 badge" loading="lazy" width="280" height="320" />

      <div class="intro-body">
        <p>
          The Asia-Pacific Society for Computers in Education (APSCE) is pleased to announce the 2026
          edition of its Theme-Based International Conference Series (TBICS), to be held from
          June 25 to 27, 2026, in Kumamoto, Japan.
        </p>

        <p class="intro-note">
          <strong>TBICS is held in addition to APSCE’s flagship annual ICCE</strong>
          (International Conference on Computers in Education). To celebrate the 10th anniversary of the TBICS conference, TBICS is convening multiple co-located conferences under one “Festival of Learning.”
        </p>
        <h3 class="intro-sub">APSCE TBICS 2026 will host:</h3>
    <section class="conf-cards">
      <div class="container">
        <div class="conf-cards-grid">

          <a class="conf-card is-cte" href="<?php echo esc_url( home_url('/ai-cte-stem-2026/') ); ?>">
            <span class="conf-tag">AI-CTE-STEM 2026</span>
            <p class="conf-desc">The 10th International Conference on Artificial Intelligence,
              Computational Thinking and STEM Education</p>
            <span class="conf-cta">Call for Papers</span>
          </a>

          <a class="conf-card is-ai3l" href="<?php echo esc_url( home_url('/ai3l-2026/') ); ?>">
            <span class="conf-tag">AI3L 2026</span>
            <p class="conf-desc">The 5th International Conference on Artificial Intelligence in
              Language Learning and Literacy</p>
            <span class="conf-cta">Call for Papers</span>
          </a>

          <a class="conf-card is-meta" href="<?php echo esc_url( home_url('/ai-metaaces-2026/') ); ?>">
            <span class="conf-tag">AI-MetaACES 2026</span>
            <p class="conf-desc">The 4th International Conference on Artificial Intelligence, Metaverse
              and Artificial Companions in Education and Society</p>
            <span class="conf-cta">Call for Papers</span>
          </a>

          <a class="conf-card is-iclea" href="<?php echo esc_url( home_url('/iclea-2026-cfp/') ); ?>">
            <span class="conf-tag">ICLEA 2026</span>
            <p class="conf-desc">The 2nd International Conference on Learning Evidence and Analytics</p>
            <span class="conf-cta">Call for Papers</span>
          </a>
        </div>
      </div>
    </section>
    <div class="conf-cards-cta d-flex justify-content-center mt-3">
      <a class="btn btn-primary" href="<?php echo esc_url( home_url('/submission-and-important-dates/') ); ?>">
        Submission &amp; Important Dates
      </a>
    </div>
    </div><!-- /.intro-body -->
    </div><!-- /.intro-panel -->
    </div>
    </section>



<!-- Sponsors (unchanged) -->
<section class="sponsor-section">
  <div class="container text-center">
    <h2 class="section-title"><?php the_field('sponsors_title'); ?></h2>
    <div class="sponsor-image">
      <img src="<?php the_field('sponsors_image'); ?>" alt="Sponsor Logos" loading="lazy">
    </div>
  </div>
</section>

<?php get_footer(); ?>
