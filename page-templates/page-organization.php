<?php
/**
 * Template Name: TBICS 2026 - Organization
 * Description: Organization page. Hero uses ACF image; body is template-driven (no Gutenberg).
 *
 * @package Understrap Child (TBICS)
 */

defined('ABSPATH') || exit;
get_header();
$container = get_theme_mod('understrap_container_type');

// Hero background from ACF (optional)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/08/mt-aso-about.jpg';
?>
<main id="about-tbics" class="tbics-page site-main" role="main">

  <!-- Hero -->
  <!-- <section class="page-hero org-hero-banner"
           style="background-image:url('<?php echo esc_url($bg_image); ?>'); background-position:center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass">
        <h1 class="mb-2"><?php the_title(); ?></h1>
        <p class="lead mb-0">APSCE TBICS Festival of Learning 2026 — Organizing Committee &amp; Governance</p>
      </div>
    </div>
  </section> -->
  <section class="page-hero page-hero-banner" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-position: center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass">
        <h1 class="hero-split">
          <span class="kicker">APSCE TBICS Festival of Learning 2026</span>
          <span class="title">Organizing Committee &amp; Governance</span>
        </h1>
      </div>
    </div>
  </section>
  <!-- Body (template-driven; no Gutenberg content rendered) -->
  <section class="py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="wp-content">

            <!-- About -->
            <section class="org-section">
              <h3>About APSCE TBICS Festival of Learning 2026</h3>
              <p>
                APSCE TBICS Festival of Learning 2026 is organized by the Asia-Pacific Society of Computers in
                Education (APSCE). The conference brings together multiple theme-based sub-conferences under one
                umbrella to advance research and practice in technology-enhanced learning.
              </p>
            </section>

            <!-- Program Coordination -->
            <section class="org-section">
            <h4 class="section-rule">Program Coordination</h4>

            <!-- Centered single card using the same styling -->
            <div class="org-roles org-roles--center">
              <article class="org-role-card">
                <p class="role-label">Program Coordination Chair</p>
                <h5 class="role-name">Hiroaki Ogata</h5>
                <p class="role-affil">Kyoto University, Japan</p>
              </article>
            </div>
          </section>
            <!-- Program Chairs of Sub-Conferences -->
<section class="org-section" id="subconf-chairs">
  <h4 class="section-rule">Program Chairs of Sub-Conferences</h4>

  <div class="subconf-grid">

    

    <article class="subconf-block is-cte">
      <span class="conf-tag">AI-CTE-STEM</span>
      <div class="chair-card">
        <p class="role-label">Program Chair</p>
        <h5 class="role-name">Ting-Chia Hsu</h5>
        <p class="role-affil">National Taiwan Normal University, Taiwan</p>
      </div>
    </article>

    <article class="subconf-block is-ai3l">
      <span class="conf-tag">AI3L (ICFULL)</span>
      <div class="chair-card">
        <p class="role-label">Program Chair</p>
        <h5 class="role-name">Jie-Chi Yang</h5>
        <p class="role-affil">National Central University, Taiwan</p>
      </div>
    </article>

    <article class="subconf-block is-meta">
      <span class="conf-tag">MetaACES</span>
      <div class="chair-card">
        <p class="role-label">Program Chair</p>
        <h5 class="role-name">Yusuke Hayashi</h5>
        <p class="role-affil">Hiroshima University, Japan</p>
      </div>
    </article>

    <article class="subconf-block is-iclea">
      <span class="conf-tag">ICLEA</span>
      <div class="chair-card">
        <p class="role-label">Program Chair</p>
        <h5 class="role-name">Elizabeth Koh</h5>
        <p class="role-affil">Nanyang Technological University, Singapore</p>
      </div>
    </article>

  </div>
</section>
          </div><!-- /.wp-content -->
        </div>
      </div>
    </div>
  </section>

  <!-- Local Organization Committee -->
  <section class="org-section">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <h4 class="section-rule">Local Organization Committee</h4>

          <!-- Role cards -->
          <div class="org-roles org-roles--center">
            <article class="org-role-card">
              <p class="role-label">Co-Chair</p>
              <h5 class="role-name">Rwitajit MAJUMDAR</h5>
              <p class="role-affil">Kumamoto University, Japan</p>
            </article>

            <article class="org-role-card">
              <p class="role-label">Co-Chair</p>
              <h5 class="role-name">Shin-Ichiro KUBOTA</h5>
              <p class="role-affil">Kumamoto University, Japan</p>
            </article>
          </div>

          <!-- Members -->
          <h5 class="org-subtitle">Members</h5>
          <ul class="org-members two-col">
            <li><span class="name">Toshihiro KITA</span><span class="affil">Kumamoto University, Japan</span></li>
            <li><span class="name">Mashashi TODA</span><span class="affil">Kumamoto University, Japan</span></li>
            <li><span class="name">Yoshiko GODA</span><span class="affil">Kumamoto University, Japan</span></li>
            <li><span class="name">Hiroshi NAKANO</span><span class="affil">Kumamoto University, Japan</span></li>
            <li><span class="name">Asuka KAWAGOE</span><span class="affil">Kumamoto University, Japan</span></li>
            <li><span class="name">Ai YAMASHITA</span><span class="affil">Kumamoto University, Japan</span></li>
          </ul>

        </div>
      </div>
    </div>
  </section>

  <!-- Steering Committee -->
  <section class="org-section">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <h4 class="section-rule">Steering Committee</h4>

          <div class="org-roles org-roles--force-3 org-roles--center">
            <article class="org-role-card">
              <p class="role-label">Chair</p>
              <h5 class="role-name">Tak-Wai Chan</h5>
              <p class="role-affil">National Central University, Taiwan</p>
            </article>

            <article class="org-role-card">
              <p class="role-label">Co-Chair</p>
              <h5 class="role-name">Siu Cheung Kong</h5>
              <p class="role-affil">The Education University of Hong Kong</p>
            </article>

            <article class="org-role-card">
              <p class="role-label">Secretary</p>
              <h5 class="role-name">Yanjie Song</h5>
              <p class="role-affil">The Education University of Hong Kong</p>
            </article>
          </div>

          <h5 class="org-subtitle">Members</h5>
          <ul class="org-members two-col">
            <li><span class="name">Gautam Biswas</span><span class="affil">Vanderbilt University, USA</span></li>
            <li><span class="name">Chee-Kit Looi</span><span class="affil">Nanyang Technological University, Singapore</span></li>
            <li><span class="name">Maiga Chang</span><span class="affil">Athabasca University, Canada</span></li>
            <li><span class="name">Hiroaki Ogata</span><span class="affil">Kyoto University, Japan</span></li>
            <li><span class="name">Weiqin Chen</span><span class="affil">Oslo Metropolitan University, Norway</span></li>
            <li><span class="name">Maria Mercedes Rodrigo</span><span class="affil">Ateneo de Manila University, Philippines</span></li>
          </ul>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
