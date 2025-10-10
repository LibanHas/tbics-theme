<?php
/**
 * Template Name: AI3L 2026 — Call for Symposia
 * Description: Full text for the AI3L 2026 Call for Symposia (ICLEA-styled).
 */

defined('ABSPATH') || exit;
get_header();

$container    = get_theme_mod('understrap_container_type');
$brand        = 'is-ai3l';
$bg_image     = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';
$hero_subline = 'Formerly ICFULL';
?>
<main id="ai3l-symposia" class="tbics-page site-main <?php echo esc_attr($brand); ?>" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner" style="background-image:url('<?php echo esc_url($bg_image); ?>'); background-position:center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass hero-glass--brand">
        <h1 class="hero-split">
          <span class="kicker">Call for Symposia</span>
          <span class="title">AI3L 2026</span>
        </h1>
        <p class="lead mb-0"><?php echo esc_html($hero_subline); ?></p>
      </div>
    </div>
  </section>

  <!-- Body -->
  <section class="cfp-body py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <section class="cfp-section">
            <h4 class="section-title">Overview</h4>
            <p><strong>AI3L 2026 invites submissions for symposium proposals.</strong> Symposia bring together a set of completed research papers that collectively convey broader ideas, insights, or results on a specific theme or issue of importance. Proposals should address significant issues for the AI3L community and align with the overall conference theme; they must not merely group related papers from a single research team.</p>
            <p>Each symposium must have one chair and may optionally include one or two co-chairs. Sessions should feature <strong>3–5 speakers</strong>, each offering a distinct perspective. A typical format includes individual paper presentations followed by a moderated discussion with the chair/co-chairs, speakers, participants, and audience. (An individual may serve as both chair/co-chair and presenter.)</p>
          </section>

          <section class="cfp-section">
            <h4 class="section-title">Required Proposal Content</h4>
            <ul>
              <li><strong>Title</strong> of the symposium</li>
              <li><strong>Abstract</strong> (max. 500 words): A concise summary of the symposium's theme and goals. Clearly state the scientific purpose, novelty, and international significance of the proposal, and explain how the included papers collectively address different aspects of the theme.</li>
              <li><strong>Chair and co-chairs</strong>: names, affiliations, and email addresses</li>
              <li><strong>Papers</strong>: For each paper, provide title; author name(s); affiliation(s); email address(es). Each presentation may include co-authors. Ensure contact information is complete for all authors.</li>
            </ul>
          </section>

          <section class="cfp-section">
            <h4 class="section-title">Submission &amp; Key Dates</h4>
            <ul class="topics-list no-bullets">
              <li><strong>Submission deadline:</strong> January 5, 2026</li>
              <li><strong>How to submit:</strong> Proposals should be compiled into a single Word file and sent to the Program Chair at
                <a href="mailto:yang@cl.ncu.edu.tw?subject=AI3L%202026%20—%20Symposium%20Proposal">yang@cl.ncu.edu.tw</a>
              </li>
              <li><strong>Notification:</strong> January 15, 2026</li>
              <li><strong>Upon acceptance:</strong> The Chair(s) and all symposium speakers must submit an <strong>extended abstract (max. 500 words)</strong> for each presentation by <strong>February 15, 2026</strong> via the conference submission system.</li>
              <li><strong>Registration:</strong> Each accepted paper must have at least one registered author by <strong>April 15, 2026</strong>, otherwise it cannot be included in the final conference program.</li>
            </ul>
          </section>

        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
