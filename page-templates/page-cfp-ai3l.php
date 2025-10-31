<?php
/**
 * Template Name: AI3L 2026 CFP
 * Description: AI3L 2026 Call for Papers (template-driven; ICLEA-styled).
 */

defined('ABSPATH') || exit;
get_header();

$container = get_theme_mod('understrap_container_type');

// Short <title>
add_filter('pre_get_document_title', function($title){ return 'AI3L 2026'; }, 99);

// Hero background (ACF 'hero_background' optional)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';

// Brand modifier (used by intro pill, buttons, contact card, etc.)
$brand_modifier = 'is-ai3l';

// Optional subline in the hero (you can set ACF “hero_lead”; fallback shows former name)
$hero_lead = get_field('hero_lead') ?: 'Formerly ICFULL';
?>
<main id="cfp-ai3l" class="tbics-page site-main is-ai3l" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner"
           style="background-image:url('<?php echo esc_url($bg_image); ?>'); background-position:center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass hero-glass--brand">
        <h1 class="hero-split">
          <span class="kicker">Call for Papers</span>
          <span class="title">AI3L 2026</span>
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
                  APSCE 5th International Conference on AI in Language Learning and Literacy (AI3L) 2026
                </h2>
              </div>
            </div>
          </section>

          <!-- Overview -->
          <section class="cfp-section">
            <h4 class="section-title">Overview</h4>

            <p>The <strong>5th International Conference on AI in Language Learning and Literacy (AI3L 2026)</strong> — formerly the International Conference on Future Language Learning (ICFULL) — invites contributions that explore how artificial intelligence is reshaping language and literacy education.</p>

            <p><strong>Conference Theme:</strong> <em>Transcending Language Learning in the Age of AI: Toward Personalization, Automation, and Immersive Experiences</em></p>

            <p>As AI and post-pandemic online learning continue to transform education, AI3L 2026 focuses on adaptive instruction, automated assessment, immersive experiences (e.g., chatbots, robot-assisted learning, XR), and the ethical, cultural, and pedagogical implications of these shifts. We welcome empirical studies, design innovations, theoretical perspectives, and critical reflections.</p>
          </section>

          <!-- Themes of Interest -->
          <section class="cfp-section">
            <h4 class="section-title">Themes of Interest</h4>

            <div class="themes-grid">
              <article class="theme-card">
                <h6>Intelligent &amp; Adaptive Learning</h6>
                <ul>
                  <li>Adaptive / personalized learning</li>
                  <li>AI-supported language learning</li>
                  <li>Chatbots in language learning</li>
                  <li>Robot-assisted language learning</li>
                  <li>Technology-supported self-directed learning</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Data, Analytics &amp; Assessment</h6>
                <ul>
                  <li>Corpus-based &amp; data-driven learning</li>
                  <li>Learning analytics in language learning</li>
                  <li>Language assessment with emerging technologies</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Immersive &amp; Game-based Experiences</h6>
                <ul>
                  <li>Digital game-based language learning</li>
                  <li>Language learning with AR / VR / MR</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Design, Theory, Ethics &amp; Futures</h6>
                <ul>
                  <li>Emerging theories, practices &amp; design models</li>
                  <li>Ethical issues in technology-supported language learning</li>
                  <li>Position papers &amp; visionary discussions</li>
                </ul>
              </article>
            </div>
          </section>

          <!-- Presentation Types -->
          <section class="cfp-section">
            <h4 class="section-title">Presentation Types (Extended Abstract only)</h4>
            <p>For AI3L 2026, submissions are <strong>extended abstracts only (500 words)</strong>, in one of the following formats:</p>
            <ul class="topics-list no-bullets">
              <li><strong>Oral presentation:</strong> 20 minutes including Q&amp;A</li>
              <li><strong>Poster presentation:</strong> Presenter attends during the scheduled poster session</li>
            </ul>
          </section>

          <!-- Call for Symposia (CTA) -->
        <section class="cfp-section">
          <h4 class="section-title">Call for Symposia</h4>
          <p class="mb-2">
          AI3L 2026 invites submissions of symposium proposals. See the full call and submission details below.
          </p>
          <div class="text-center mt-5 mb-4">
            <a class="btn-brand"
              href="<?php echo esc_url( home_url( '/ai3l-2026/call-for-symposia/' ) ); ?>">
              Read the Call for Symposia
            </a>
          </div>
        </section>

          <!-- Conference Organizers -->
          <section class="cfp-section">
            <h4 class="section-title">Conference Organizers</h4>

            <!-- Program Committee -->
            <div class="org-roles org-roles--center" style="margin-bottom:1.25rem;">
              <article class="org-role-card">
                <p class="role-label">Program Committee Chair</p>
                <h5 class="role-name">Jie-Chi Yang</h5>
                <p class="role-affil">National Central University, Taiwan</p>
              </article>
            </div>

            <div class="org-roles org-roles--center org-roles--grid-4">
              <article class="org-role-card">
                <p class="role-label">Program Committee Co-Chair</p>
                <h5 class="role-name">Yoshiko Goda</h5>
                <p class="role-affil">Kumamoto University, Japan</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Program Committee Co-Chair</p>
                <h5 class="role-name">Rustam Shadiev</h5>
                <p class="role-affil">Zhejiang University, China</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Program Committee Co-Chair</p>
                <h5 class="role-name">Wen-Chi Vivian Wu</h5>
                <p class="role-affil">National Chung Hsing University, Taiwan</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Program Committee Co-Chair</p>
                <h5 class="role-name">Chunping Zheng</h5>
                <p class="role-affil">Beijing Univ. of Posts &amp; Telecommunications, China</p>
              </article>
            </div>
          </section>

          <!-- Steering Committee -->
          <section class="cfp-section">
            <h4 class="section-title">Steering Committee</h4>

            <div class="org-roles org-roles--force-3 org-roles--center">
              <article class="org-role-card">
                <p class="role-label">Chair</p>
                <h5 class="role-name">Tak-Wai Chan</h5>
                <p class="role-affil">National Central University, Taiwan</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Co-Chair</p>
                <h5 class="role-name">Yanjie Song</h5>
                <p class="role-affil">The Education University of Hong Kong</p>
              </article>
            </div>

            <h5 class="org-subtitle">Members</h5>
            <ul class="org-members two-col">
              <li><span class="name">Yu-Ju Lan</span><span class="affil">National Taiwan Normal University (NTNU), Taiwan</span></li>
              <li><span class="name">Yun Wen</span><span class="affil">National Institute of Education, <br>Nanyang Technological University, Singapore</span></li>
              <li><span class="name">Wen-Chi Vivian Wu</span><span class="affil">National Chung Hsing University (NCHU), Taiwan</span></li>
              <li><span class="name">Jie-Chi Yang</span><span class="affil">National Central University (NCU), Taiwan</span></li>
              <li><span class="name">Chunping Zheng</span><span class="affil">Beijing University of Posts &amp; Telecommunications (BUPT), China</span></li>
            </ul>
          </section>

          <!-- Contact -->
          <section class="cfp-section <?php echo esc_attr($brand_modifier); ?>" aria-labelledby="contact-title">
            <h4 id="contact-title" class="section-title">Contact</h4>
            <div class="contact-card <?php echo esc_attr($brand_modifier); ?>">
              <div class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="24" height="24" focusable="false">
                  <path fill="currentColor" d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"/>
                </svg>
              </div>
              <div class="contact-copy">
                <p class="eyebrow">Questions about AI3L 2026?</p>
                <p class="micro">For questions regarding submissions, please contact the organizing committee.</p>
                <p class="contact-actions">
                  <a class="btn-brand <?php echo esc_attr($brand_modifier); ?>"
                     href="mailto:yang@cl.ncu.edu.tw?subject=AI3L%202026%20%E2%80%94%20CFP%20Question">
                    yang@cl.ncu.edu.tw
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
