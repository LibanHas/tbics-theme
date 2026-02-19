<?php
/**
 * Template Name: TBICS 2026 - Keynote
 * Description: Keynote page. Hero uses ACF image; body is template-driven (no Gutenberg).
 *
 * @package Understrap Child (TBICS)
 */

defined('ABSPATH') || exit;
get_header();

$container = get_theme_mod('understrap_container_type');

// Hero background from ACF (optional)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/12/kumamoto-sunrise.jpg';
?>
<main id="tbics-keynote" class="tbics-page site-main" role="main">

  <!-- HERO -->
  <section class="page-hero page-hero-banner keynote-hero"
    style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-position: center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center">
      <div class="hero-glass text-white">
        <h1 class="hero-split">
          <span class="kicker">APSCE TBICS<br>Festival of Learning 2026</span>
          <span class="title">Keynote Speakers</span>
        </h1>
      </div>
    </div>
  </section>

  <!-- BODY -->
  <section class="py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="wp-content">

            <!-- Intro -->
            <section class="org-section keynote-intro text-center">
              <h3 class="mb-3">Keynote Speakers</h3>
              <p class="mb-0">
              Keynote speakers for the TBICS 2026 sub-conferences.<br>
                More details will be announced as they are confirmed.
              </p>
            </section>

            <!-- Keynotes -->
            <section class="org-section" id="keynotes">

              <div class="tbics-keynote-grid">

                <article class="tbics-keynote-item is-cte">
                  <span class="conf-tag">AI-CTE-STEM 2026</span>
                  <div class="keynote-card">
                    <h5 class="speaker-name">Prof. Valentina Dagienė</h5>
                    <p class="speaker-affil">Vilnius University, Lithuania</p>
                  </div>
                </article>

                <article class="tbics-keynote-item is-ai3l">
                  <span class="conf-tag">AI3L 2026</span>
                  <div class="keynote-card">
                    <h5 class="speaker-name">Prof. Glenn Stockwell</h5>
                    <p class="speaker-affil">Education University of Hong Kong</p>
                  </div>
                </article>

                <article class="tbics-keynote-item is-meta is-clickable">
                  <span class="conf-tag">AI-MetaACES 2026</span>

                  <a href="/TBICS2026/keynote/sangmin-michelle-lee/"
                    class="keynote-link"
                    aria-label="View keynote details for Prof. Sangmin Michelle Lee">

                    <div class="keynote-card">
                      <h5 class="speaker-name">Prof. Sangmin Michelle Lee</h5>
                      <p class="speaker-affil">Kyung Hee University, South Korea</p>

                      <span class="keynote-cta">View details →</span>
                    </div>

                  </a>
                </article>
                <article class="tbics-keynote-item is-iclea">
                  <span class="conf-tag">ICLEA 2026</span>
                  <div class="keynote-card">
                    <h5 class="speaker-name">Prof. Atsushi Shimada</h5>
                    <p class="speaker-affil">Kyushu University, Japan</p>
                  </div>
                </article>

              </div>
            </section>

            <!-- CTA row -->
            <section class="org-section mb-0">
              <h4 class="section-rule">Quick Links</h4>
              <div class="tbics-cta-row">
              <a class="btn tbics-cta tbics-cta--primary" href="/TBICS2026/submission-and-important-dates/">
                Submission &amp; Important Dates
                </a>
                <div class="dropdown tbics-cta-dropdown">
                    <button
                        class="btn tbics-cta tbics-cta--soft dropdown-toggle"
                        type="button"
                        id="cfpDropdown"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Call for Papers
                    </button>

                    <div class="dropdown-menu" aria-labelledby="cfpDropdown">
                        <a class="dropdown-item" href="/TBICS2026/call-for-papers/ai-cte-stem-2026/">AI-CTE-STEM 2026</a>
                        <a class="dropdown-item" href="/TBICS2026/call-for-papers/ai3l-2026/">AI3L 2026</a>
                        <a class="dropdown-item" href="/TBICS2026/call-for-papers/ai-metaaces-2026/">AI-MetaACES 2026</a>
                        <a class="dropdown-item" href="/TBICS2026/call-for-papers/iclea-2026/">ICLEA 2026</a>
                    </div>
                   </div>
                <a class="btn tbics-cta tbics-cta--outline" href="/TBICS2026/venue/">
                Venue
                </a>
              </div>
            </section>

          </div><!-- /.wp-content -->
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
