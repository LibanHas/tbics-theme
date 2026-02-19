<?php
/**
 * Template Name: AI-MetaACES 2026 CFP
 * Description: APSCE AI-MetaACES 2026 Call for Papers.
 *
 * @package Understrap Child (TBICS)
 */

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

// Short <title>
add_filter('pre_get_document_title', function($title){ return 'AI-MetaACES 2026'; }, 99);

// Hero background (ACF 'hero_background' optional)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';

// Brand modifier for buttons, pills, accents
$brand_modifier = 'is-meta';

// Optional hero subline
$hero_lead = get_field('hero_lead') ?: 'Cultivating Symbiotic Ecosystems: Agency, Ethics, and Identity in AI-Mediated Worlds';
?>
<main id="cfp-ai-metaaces" class="tbics-page site-main is-meta" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner"
           style="background-image:url('<?php echo esc_url($bg_image); ?>'); background-position:center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass hero-glass--brand">
        <h1 class="hero-split">
          <span class="kicker">Call for Papers</span>
          <span class="title">AI-MetaACES 2026</span>
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
                  APSCE 4th International Conference on Artificial Intelligence, Metaverse and Artificial Companions in Education and Society (AI-MetaACES) 2026
                </h2>
              </div>
            </div>
          </section>

          <!-- Overview -->
          <section class="cfp-section">
            <h4 class="section-title">Overview</h4>

            <p>The 4th International Conference on Artificial Intelligence, Metaverse and Artificial Companions in Education and Society (AI-MetaACES 2026) will take place on <strong>June 25–27, 2026</strong>, in <strong>Kumamoto, Japan</strong>.</p>

            <p>This year’s theme, <em>“Cultivating Symbiotic Ecosystems: Agency, Ethics, and Identity in AI-Mediated Worlds,”</em> highlights the complex and emergent human–technology relationships forged at the intersection of Artificial Intelligence, immersive Metaverse environments, and personalized Artificial Companions. As these technologies move from novelty to infrastructure—especially in education and civil society—AI-MetaACES 2026 invites researchers and practitioners to examine how human identity, learning pathways, and ethical governance are being negotiated within these dynamic, intelligent spaces.</p>

            <p>AI-MetaACES 2026 brings together global researchers, educators, policymakers, and industry experts to share and discuss the latest findings and strategic approaches concerning the socio-educational impact and ethical implications of this powerful technological convergence. The conference offers a dedicated space to examine how human and artificial consciousnesses interact, how the Metaverse facilitates new forms of collaborative learning and social organization, and how Artificial Companions influence human cognition and well-being. Rather than focusing solely on the engineering challenges of AI and VR systems, the conference centers on the profound shifts these technologies catalyze in human behavior, learning, and society.</p>
          </section>

          <!-- Topics of Interest -->
          <section class="cfp-section">
            <h4 class="section-title">Themes of Interest</h4>
            <p class="mb-5">We invite submissions that address cutting-edge research, case studies, best practices, and emerging trends in the following topics (but not limited to these): </p>
            <div class="themes-grid">
                
              <article class="theme-card">
                <h6>Immersive Learning &amp; Social Presence in the Metaverse</h6>
                <ul>
                  <li>Design principles for multimodal, embodied interaction and learning in educational Metaverses</li>
                  <li>Metrics and measurement of social presence, collaboration, and engagement in virtual learning spaces</li>
                  <li>Challenges and opportunities for accessibility and equitable access to immersive educational technologies</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>The Evolving Role of Artificial Companions &amp; Social AI</h6>
                <ul>
                  <li>Impact of persistent, personalized AI companions on motivation, emotional regulation, and well-being</li>
                  <li>Designing ethical and transparent mechanisms for Companion-to-Companion or Companion-to-Human interaction in social settings</li>
                  <li>Studies on the development of long-term trust, attachment, and dependency in human-AI companion relationships</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Agency, Identity, and the Digital Self</h6>
                <ul>
                  <li>Theoretical frameworks exploring the negotiation of digital and physical identity in hyper-personalized, AI-mediated environments</li>
                  <li>The role of AI and the Metaverse in shaping user agency and control over data, narratives, and interactions</li>
                  <li>Governance for digital assets, ownership, and the “right to be forgotten” in persistent virtual worlds</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Ethics, Trust, &amp; Governance in Symbiotic Ecosystems</h6>
                <ul>
                  <li>Development of responsible AI frameworks and policy guidelines for deploying generative AI and companions in K-12 and higher education</li>
                  <li>Investigating issues of bias, fairness, and algorithmic discrimination within Metaverse content moderation and companion personalization</li>
                  <li>Auditing and transparency requirements for AI-driven decision-making processes impacting learning pathways or social recommendations</li>
                </ul>
              </article>

              <article class="theme-card">
                <h6>Future Skills &amp; Pedagogies for AI-Mediated Futures</h6>
                <ul>
                  <li>New curricula and instructional strategies using immersive AI and companion technologies</li>
                  <li>The essential literacies and competencies required by students and educators to effectively navigate and critique the AI-Metaverse convergence</li>
                  <li>Case studies on large-scale adoption, scalability, and economic models for integrating these technologies into institutional practice</li>
                </ul>
              </article>
            </div>
          </section>

          <!-- Publication -->
          <section class="cfp-section">
            <h4 class="section-title">Publication</h4>
            <p>Accepted papers in the main conference will be published in the proceedings of the
              <a href="https://library.apsce.net" target="_blank" rel="noopener">APSCE Library</a>.
            </p>
            <p>Authors of accepted distinguished full papers may be invited to submit extended versions for consideration in top-tier journals. Details will be announced later.</p>
          </section>

          <!-- Conference Chairs -->
          
<section class="cfp-section">
  <h4 class="section-title">Conference Chairs</h4>

  <!-- Solo chair row -->
  <div class="org-roles org-roles--center" style="margin-bottom:1.25rem;">
    <article class="org-role-card org-role-card--pc">
      <p class="role-label">Program Chair</p>
      <h5 class="role-name">Xuesong Michael Zhai</h5>
      <p class="role-affil">Zhejiang University, China</p>
    </article>
  </div>

  <!-- 5-up co-chair row -->
  <div class="org-roles org-roles--grid-5">
    <article class="org-role-card org-role-card--pc">
      <p class="role-label">Program Co-Chair</p>
      <h5 class="role-name">Jon Chao Hong</h5>
      <p class="role-affil">National Taiwan Normal University, Taiwan</p>
    </article>

    <article class="org-role-card org-role-card--pc">
      <p class="role-label">Program Co-Chair</p>
      <h5 class="role-name">Longwei Zheng</h5>
      <p class="role-affil">City University of Macau, Macau</p>
    </article>

    <article class="org-role-card org-role-card--pc">
      <p class="role-label">Program Co-Chair</p>
      <h5 class="role-name">Fuzheng ZHAO</h5>
      <p class="role-affil">Jilin University, China</p>
    </article>

    <article class="org-role-card org-role-card--pc">
      <p class="role-label">Program Co-Chair</p>
      <h5 class="role-name">Longkai Wu</h5>
      <p class="role-affil">Central Chinese Normal University, China</p>
    </article>

    <article class="org-role-card org-role-card--pc">
      <p class="role-label">Program Co-Chair</p>
      <h5 class="role-name">Yanjie SONG</h5>
      <p class="role-affil">The Education University of Hong Kong, Hong Kong</p>
    </article>
  </div>
</section>


          <!-- Steering Committee -->
          <section class="cfp-section">
            <h4 class="section-title">Steering Committee</h4>

            <div class="org-roles org-roles--center org-roles--cols-3" style="margin-bottom:1.25rem;">
              <article class="org-role-card">
                <p class="role-label">Chair</p>
                <h5 class="role-name">Maiga Chang</h5>
                <p class="role-affil">Athabasca University, Canada</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Co-Chair</p>
                <h5 class="role-name">Tak-Wai Chan</h5>
                <p class="role-affil">National Central University, Taiwan</p>
              </article>
              <article class="org-role-card">
                <p class="role-label">Co-Chair</p>
                <h5 class="role-name">Siu-Cheung Kong</h5>
                <p class="role-affil">The Education University of Hong Kong</p>
              </article>
            </div>

            <h5 class="org-subtitle">Members</h5>
            <ul class="org-members two-col">
              <li>
                <span class="name">Hiroaki Ogata</span>
                <span class="affil">Kyoto University, Japan</span>
            </li>
              <li>
              <span class="name">Biswas Gautam</span> 
              <span class="affil">Vanderbilt University, USA</span>
            </li>
              <li>
              <span class="name">Chee-Kit Looi</span> 
              <span class="affil">The Education University of Hong Kong, China</span>
              </li>
              <li>
              <span class="name">Ying-Tien Wu</span> 
              <span class="affil">National Central University, Taiwan</span>
            </li>
              <li>
              <span class="name">Antonija Mitrovic</span>
              <span class="affil">University of Canterbury, New Zealand</span>
            </li>
            </ul>
          </section>

          <!-- Contact -->
          <section class="cfp-section <?php echo esc_attr($brand_modifier); ?>" aria-labelledby="contact-title">
            <h4 id="contact-title" class="section-title">Contact</h4>

            <div class="contact-card <?php echo esc_attr($brand_modifier); ?>">
              <div class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="24" height="24" focusable="false" aria-hidden="true">
                  <path fill="currentColor" d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"/>
                </svg>
              </div>

              <div class="contact-copy">
                <p class="eyebrow">Questions about AI-MetaACES 2026?</p>
                <p class="micro">Please contact the organizing committee.</p>

                <p class="contact-actions">
                  <a class="btn-brand <?php echo esc_attr($brand_modifier); ?>"
                     href="mailto:xszhai@zju.edu.cn?subject=AI-MetaACES%202026%20%E2%80%94%20CFP%20Question">
                    xszhai@zju.edu.cn
                  </a>
                </p>
              </div>
            </div>
          </section>

          <!-- Link to global dates -->
          <section class="cfp-section">
            <p class="text-center mb-0">
              See <a href="<?php echo esc_url( home_url('/submission-and-important-dates/') ); ?>">
                Submission &amp; Important Dates
              </a> for deadlines and registration details.
            </p>
          </section>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
