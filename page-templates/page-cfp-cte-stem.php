<?php
/**
 * Template Name: CTE-STEM 2026 CFP
 * Description: AI-CTE-STEM 2026 Call for Papers (template-driven; ICLEA-styled).
 *
 * @package Understrap Child (TBICS)
 */

defined('ABSPATH') || exit;
get_header();

$container = get_theme_mod('understrap_container_type');

// Short <title>
add_filter('pre_get_document_title', function($title){ return 'AI-CTE-STEM 2026'; }, 99);

// Hero background (ACF 'hero_background' optional)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';

// Brand modifier to tint intro pill / buttons, etc.
$brand_modifier = 'is-cte';

// Hero subline (optional)
$hero_lead = get_field('hero_lead') ?: '';

?>
<main id="cfp-cte-stem" class="tbics-page site-main is-cte" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner"
           style="background-image:url('<?php echo esc_url($bg_image); ?>'); background-position:center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass hero-glass--brand">
        <h1 class="hero-split">
          <span class="kicker">Call for Papers</span>
          <span class="title">AI-CTE-STEM 2026</span>
        </h1>
        <?php if ($hero_lead): ?>
          <p class="lead mb-0"><?php echo esc_html($hero_lead); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Body -->
  <section class="cfp-body py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <!-- Intro / Callout -->
          <section class="cfp-section">
            <div class="cfp-intro <?php echo esc_attr($brand_modifier); ?>">
              <div class="cfp-intro-title">
                <span class="label-dot" aria-hidden="true"></span>
                <span class="kicker-inline">Call for Papers:</span>
                <h2 class="title-inline">
                  APSCE 10th International Conference on Artificial Intelligence, Computational Thinking and STEM Education (AI-CTE-STEM) 2026
                </h2>
              </div>
            </div>
          </section>

          <!-- Overview -->
          <section class="cfp-section">
            <h4 class="section-rule">Overview</h4>

            <p>The 10th APSCE International Conference on Artificial Intelligence, Computational Thinking and STEM Education (AI-CTE-STEM 2026) is a highly anticipated event organized by the Asia-Pacific Society for Computers in Education (APSCE) and hosted by Kumamoto University, Japan.</p>

            <p>Building on the success of previous conferences, AI-CTE-STEM 2026 seeks to further advance computational thinking (CT) education through knowledge sharing, collaborative discussion, and consensus-building on emerging themes and practices.</p>

            <p class="text-center" style="margin-top:1.25rem;">
              <a class="btn-brand <?php echo esc_attr($brand_modifier); ?>" target="_blank" rel="noopener"
                 href="https://eduhk.ap.panopto.com/Panopto/Pages/Viewer.aspx?id=236b63f6-0df3-48cc-a6b1-b341004cf692">
                Watch the 10-Year CTE-STEM Anniversary Video
              </a>
            </p>
          </section>

          <!-- Conference Organizers -->
          <section class="cfp-section">
            <h4 class="section-rule">Conference Organizers</h4>

            <!-- Program Committee -->
            <div class="org-roles org-roles--center" style="margin-bottom:1.25rem;">
              <article class="org-role-card">
                <p class="role-label">Program Committee Chair</p>
                <h5 class="role-name">Ting-Chia Hsu</h5>
                <p class="role-affil">National Taiwan Normal University, Taiwan</p>
              </article>
            </div>

            <div class="org-roles org-roles--center org-roles--grid-4">
              <article class="org-role-card">
                <p class="role-label">Program Committee Co-Chair</p>
                <h5 class="role-name">Daner Sun</h5>
                <p class="role-affil">The Education University of Hong Kong</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Program Committee Co-Chair</p>
                <h5 class="role-name">Jinbo Zhang</h5>
                <p class="role-affil">Beijing Normal University, China</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Program Committee Co-Chair</p>
                <h5 class="role-name">Juan Zuou</h5>
                <p class="role-affil">Tokyo City University, Japan</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Program Committee Co-Chair</p>
                <h5 class="role-name">Ivica Boticki</h5>
                <p class="role-affil">University of Zagreb, Croatia</p>
              </article>
            </div>
            <div class="text-center mt-5 mb-4">
              <a class="btn-brand" href="<?php echo esc_url( home_url( '/ai-cte-stem-2026-program-committee/' ) ); ?>">
              AI-CTE-STEM 2026 Program Committee Members
              </a>
            </div>
          </section>

          <!-- Themes of Interest -->
          <section class="cfp-section">
            <h4 class="section-rule">Themes of Interest</h4>

            <div class="themes-grid">
              <article class="theme-card">
                <h6>Foundations, Integration &amp; Infrastructure</h6>
                <ul>
                  <li>AI and Computational Thinking and its Key Elements</li>
                  <li>AI and Computational Thinking as Method</li>
                  <li>AI and STEM and Interdisciplinary Integration</li>
                  <li>AI and Open-Source Software and Hardware for CT and STEM Education</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>K–12 Classroom</h6>
                <ul>
                  <li>AI and Computational Thinking and Unplugged Activities in K–12</li>
                  <li>AI and Computational Thinking and Coding Education in K–12</li>
                  <li>AI and Computational Thinking and Subject Learning and Teaching in K–12</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Higher Education &amp; Teacher Development</h6>
                <ul>
                  <li>AI and Computational Thinking and Teacher Development</li>
                  <li>AI and Computational Thinking Development in Higher Education</li>
                  <li>AI and Computational Thinking and Evaluation</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Modalities &amp; Context</h6>
                <ul>
                  <li>AI and Computational Thinking and STEM/STEAM Education</li>
                  <li>AI and Computational Thinking and Non-formal Learning</li>
                  <li>AI and Computational Thinking and IoT</li>
                  <li>AI and Computational Thinking and Data Science</li>
                  <li>AI and Computational Thinking and Artificial Intelligence Education</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Inclusive &amp; Psychology</h6>
                <ul>
                  <li>AI and Computational Thinking and Special Education Needs</li>
                  <li>AI and Computational Thinking and Psychological Studies</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Policy &amp; General</h6>
                <ul>
                  <li>AI and Computational Thinking in Educational Policy</li>
                  <li>AI and General Submission to Computational Thinking Education</li>
                </ul>
              </article>
            </div>
          </section>

          <!-- Important Dates -->
          <section class="cfp-section">
            <h4 class="section-rule">Important Dates</h4>
            <p class="text-center">
              Please see the
              <a href="https://eds.let.media.kyoto-u.ac.jp/TBICS2026/submission-and-important-dates/" target="_blank" rel="noopener">
                Submission &amp; Important Dates
              </a>
              page for deadlines and registration details.
            </p>
          </section>
<!-- Steering Committee -->
<section class="cfp-section">
  <h4 class="section-rule">Steering Committee</h4>

  <div class="org-roles org-roles--grid-3">
    <article class="org-role-card">
      <p class="role-label">Steering Committee Chair</p>
      <h5 class="role-name">Tak-Wai Chan</h5>
      <p class="role-affil">National Central University, Taiwan</p>
    </article>
    <article class="org-role-card">
      <p class="role-label">Steering Committee Co-Chair</p>
      <h5 class="role-name">Siu-Cheung Kong</h5>
      <p class="role-affil">The Education University of Hong Kong</p>
    </article>
    <article class="org-role-card">
      <p class="role-label">Steering Committee Co-Chair</p>
      <h5 class="role-name">Chee-Kit Looi</h5>
      <p class="role-affil">The Education University of Hong Kong</p>
    </article>
  </div>
  <h5 class="org-subtitle">Members</h5>
  <ul class="org-members two-col">
    <li><span class="name">Hiroaki Ogata</span><span class="affil">Kyoto University, Japan</span></li>
    <li><span class="name">Weiqin Chen</span><span class="affil">Oslo Metropolitan University, Norway</span></li>
    <li><span class="name">Jon Mason</span><span class="affil">Charles Darwin University, Australia</span></li>
    <li><span class="name">JU-LING SHIH</span><span class="affil">National Central University, Taiwan</span></li>
    <li><span class="name">Ting-Chia Hsu</span><span class="affil">National Taiwan Normal University, Taiwan</span></li>
  </ul>
</section>



          <!-- Contact -->
          <section class="cfp-section is-cte" aria-labelledby="contact-title">
            <h4 id="contact-title" class="section-rule">Contact</h4>

            <div class="contact-card is-cte">
              <div class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="24" height="24" focusable="false">
                  <path fill="currentColor" d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"/>
                </svg>
              </div>

              <div class="contact-copy">
                <p class="eyebrow">Questions about AI-CTE-STEM 2026?</p>
                <p class="micro">For questions regarding submissions, please contact the organizing committee.</p>

                <p class="contact-actions">
                  <a class="btn-brand is-cte"
                     href="mailto:ckhsu@ntnu.edu.tw?subject=AI-CTE-STEM%202026%20%E2%80%94%20CFP%20Question">
                    ckhsu@ntnu.edu.tw
                  </a>
                </p>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
