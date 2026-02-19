<?php
/**
 * Template Name: ICLEA 2026 CFP
 * Description: ICLEA 2026 Call for Papers page content.
 *
 * @package Understrap Child (TBICS)
 */

defined('ABSPATH') || exit;
get_header();
$container = get_theme_mod('understrap_container_type');

// Force a short page/browser title: "ICLEA 2026"
add_filter('pre_get_document_title', function($title){
  return 'ICLEA 2026';
}, 99);
$hero_lead = get_field('hero_lead') ?: 'Exploring New Frontiers in Learning Analytics through Artificial Intelligence (AI) Augmentation';

$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';
?>

<main id="cfp-iclea" class="tbics-page site-main is-iclea" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-position: center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass hero-glass--brand">
        <h1 class="hero-split">
          <span class="kicker">Call for Papers</span>
          <span class="title">ICLEA 2026</span>
          <?php if ($hero_lead): ?>
          <p class="lead mb-0"><?php echo esc_html($hero_lead); ?></p>
        <?php endif; ?>
        </h1>
      </div>
    </div>
  </section>

  <!-- CFP Body -->
<section class="cfp-body py-5" style="background-color:#DDEBF7;">
  <div class="<?php echo esc_attr($container); ?>">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="wp-content">

         <!-- Intro / Callout -->
          <section class="cfp-section">
            <div class="cfp-intro is-iclea">  <!-- set brand via .is-iclea -->
              <div class="cfp-intro-title">
                <span class="label-dot" aria-hidden="true"></span>
                <span class="kicker-inline">Call for Papers:</span>
                <h2 class="title-inline">
                  APSCE 2nd International Conference on Learning Evidence and Analytics (ICLEA) 2026
                </h2>
              </div>
            </div>
          </section>
          <!-- Overview -->
          <section class="cfp-section">
            <h4 class="section-title">Overview</h4>
            <p>The 2nd International Conference on Learning Evidence and Analytics (ICLEA 2026) will take place on <strong>June 25–27, 2026</strong>, in <strong>Kumamoto, Japan</strong>.</p>
            <p>This year's theme, <em>“Exploring New Frontiers in Learning Analytics through Artificial Intelligence (AI) Augmentation”</em> highlights the evolving intersection of learning analytics and AI, focusing on how learning unfolds with analytics enhanced by AI technologies. As AI becomes increasingly integrated into learning environments, not just as a tool but as a collaborator, ICLEA 2026 invites us to rethink and explore how we capture, interpret, and act upon learning data in ways that empower both learners and educators.</p>
            <p>ICLEA 2026 aims to bring together global researchers, educators, policymakers, and industry experts to share and discuss the latest research and trends in learning evidence and research. ICLEA offers a dedicated space to examine how learning unfolds in AI-augmented educational environments, and how analytics can help make those learning processes visible, interpretable, and actionable. Rather than focusing on building AI systems, ICLEA 2026 centers on the processes of learning using learning analytics and how AI-mediated interactions shape them.</p>
          </section>

          <!-- Themes of Interest (card grid) -->
          <section class="cfp-section">
            <h4 class="section-title">Themes of Interest</h4>
            <p>We invite submissions that address cutting-edge research, case studies, best practices, and emerging trends in the following topics (but not limited to these):</p>

            <div class="themes-grid">
              <article class="theme-card">
                <h6>Metrics &amp; Indicators</h6>
                <ul>
                  <li>Metrics, indicators and models of learning evidence</li>
                  <li>New indicators for learning processes &amp; outcomes (e.g., self-regulation, engagement, collaboration)</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Data &amp; Analytics</h6>
                <ul>
                  <li>Unimodal &amp; multimodal data curation, modelling &amp; analytics</li>
                  <li>Synthesis &amp; application of indicators for predicting and simulating learning processes &amp; outcomes</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Designs &amp; Feedback</h6>
                <ul>
                  <li>Learning designs &amp; evaluation of analytics-based feedback</li>
                  <li>AI-augmented innovations &amp; interventions (e.g., pedagogical agents with LLMs, analytics-based feedback)</li>
                  <li>Formative evaluation and effectiveness of analytics-based feedback</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Competencies &amp; Literacy</h6>
                <ul>
                  <li>Learner &amp; educator competencies and skills in AI-augmented analytics</li>
                  <li>Cognitive &amp; metacognitive skills in AI-rich contexts</li>
                  <li>Strategies &amp; practices for building data literacy; tools for interpreting analytics insights</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Concepts &amp; Collaboration</h6>
                <ul>
                  <li>Conceptual &amp; critical perspectives on human-system integration and collaboration</li>
                  <li>Evolving boundaries of learner/system roles in co-constructed learning</li>
                  <li>What counts as learning evidence in AI-augmented education; human-AI collaboration &amp; multi-LLM agent systems</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Ethics &amp; Trust</h6>
                <ul>
                  <li>Ethical and trustworthy use of data; frameworks for responsible analytics</li>
                  <li>Privacy, security, and data protection in educational environments</li>
                  <li>Fairness and transparency in AI-augmented learning analytics tools</li>
                </ul>
              </article>
            </div>
          </section>

          <!-- Proceedings / Journals -->
          <section class="cfp-section">
            <h4 class="section-title">Proceedings &amp; Journals</h4>
            <p>Accepted papers in the main conference will be published in the proceedings of the APSCE Library (<a href="https://library.apsce.net" target="_blank" rel="noopener">https://library.apsce.net</a>).</p>
            <p>Authors of selected accepted papers will be invited to submit extended versions for possible inclusion in a special section of the <a href="https://learning-analytics.info/index.php/JLA/index" target="_blank" rel="noopener">Journal of Learning Analytics</a>. Details regarding the submission process will be shared at a later date.</p>
          </section>

      

          <!-- Conference Chairs -->
          <!-- Conference Chairs -->
<section class="cfp-section">
  <h4 class="section-title">Conference Chairs</h4>

  <!-- Program Chair (solo row) -->
<div class="org-roles org-roles--solo">
  <article class="org-role-card">
    <p class="role-label">Program Chair</p>
    <h5 class="role-name">Elizabeth Koh</h5>
    <p class="role-affil">Nanyang Technological University, Singapore</p>
  </article>
</div>

<!-- Program Co-Chairs (3-up row) -->
<div class="org-roles org-roles--grid-3">
  <article class="org-role-card">
    <p class="role-label">Program Co-Chair</p>
    <h5 class="role-name">Srećko Joksimović</h5>
    <p class="role-affil">University of South Australia, Australia</p>
  </article>

  <article class="org-role-card">
    <p class="role-label">Program Co-Chair</p>
    <h5 class="role-name">Lishan Zhang</h5>
    <p class="role-affil">Beijing Institute of Technology, China</p>
  </article>

  <article class="org-role-card">
    <p class="role-label">Program Co-Chair</p>
    <h5 class="role-name">Changhao Liang</h5>
    <p class="role-affil">Kyoto University, Japan</p>
  </article>
</div>
<div class="text-center mt-5 mb-4">
              <a class="btn-brand" href="<?php echo esc_url( home_url( '/iclea-2026-program-committee/' ) ); ?>">
              ICLEA 2026 Program Committee Members
              </a>
            </div>
</section>


          <!-- Steering Committee -->
         <!-- Steering Committee -->
<section class="cfp-section">
  <h4 class="section-title">Steering Committee</h4>

  <!-- Role cards -->
  <div class="org-roles org-roles--force-3 org-roles--center">
    <article class="org-role-card">
      <p class="role-label">Chair</p>
      <h5 class="role-name">Hiroaki Ogata</h5>
      <p class="role-affil">Kyoto University, Japan</p>
    </article>

    <article class="org-role-card">
      <p class="role-label">Co-Chair</p>
      <h5 class="role-name">Ting-Chia Hsu</h5>
      <p class="role-affil">Taiwan Normal University, Taiwan</p>
    </article>

    <article class="org-role-card">
      <p class="role-label">Co-Chair</p>
      <h5 class="role-name">Weiqin Chen</h5>
      <p class="role-affil">Oslo Metropolitan University, Norway</p>
    </article>
  </div>

  <!-- Members -->
  <h5 class="org-subtitle">Members</h5>
  <ul class="org-members two-col">
    <li><span class="name">Tak-Wai Chan</span><span class="affil">National Central University, Taiwan</span></li>
    <li><span class="name">Maiga Chang</span><span class="affil">Athabasca University, Canada</span></li>
    <li><span class="name">Gautam Biswas</span><span class="affil">Vanderbilt University, United States</span></li>
    <li><span class="name">Siu-Cheung Kong</span><span class="affil">The Education University of Hong Kong, Hong Kong</span></li>
    <li><span class="name">Chee Kit Looi</span><span class="affil">The Education University of Hong Kong, Hong Kong</span></li>
    <li><span class="name">Ma. Mercedes T. Rodrigo</span><span class="affil">Ateneo de Manila University, Philippines</span></li>
    <li><span class="name">Yanjie Song</span><span class="affil">The Education University of Hong Kong, Hong Kong</span></li>
  </ul>
</section>

             <!-- Contact -->
             <section class="cfp-section" aria-labelledby="contact-title">
  <h4 id="contact-title" class="section-title">Contact</h4>

  <div class="contact-card">
    <div class="contact-icon" aria-hidden="true">
      <!-- simple envelope svg -->
      <svg viewBox="0 0 24 24" width="24" height="24" focusable="false">
        <path fill="currentColor" d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"/>
      </svg>
    </div>

    <div class="contact-copy">
      <p class="eyebrow">Questions about ICLEA 2026?</p>
      <p class="micro">
        For programme or submission queries, email the ICLEA 2026 team.
      </p>

      <p class="contact-actions">
        <a class="btn-brand" href="mailto:iclea2026@gmail.com?subject=ICLEA%202026%20%E2%80%94%20CFP%20Question">
          iclea2026@gmail.com
        </a>
      </p>
    </div>
  </div>
</section>
        </div><!-- /.wp-content -->

      </div>
    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>
