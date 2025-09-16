<?php
/**
 * Template Name: Call for Papers (Main)
 * Description: Overview of the three conference Calls for Papers with links to sub-pages.
 *
 * @package Understrap Child (TBICS)
 */

defined('ABSPATH') || exit;
get_header();
$container = get_theme_mod('understrap_container_type');

$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';
?>

<main id="cfp-overview" class="tbics-page site-main" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-position: center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <h1 class="mb-2"><?php the_title(); ?></h1>
      <p class="lead mb-0">Explore Calls for Papers for TBICS 2026, AI3L 2026, and CTE-STEM 2026</p>
    </div>
  </section>

  <!-- CFP Overview Body -->
  <section class="cfp-body py-5" style="background-color: #DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <!-- Overview -->
          <h2 class="h4 mb-3">Overview</h2>
          <p>TBICS 2026 is a theme-based meta-conference that brings together five interrelated conferences under one roof: <strong>TBICS 2026</strong>, <strong>CTE-STEM 2026</strong>, <strong>ICFULL 2026</strong>, <strong>MetaACES 2026</strong>, and <strong>ICLEA 2026</strong>. Each invites high-quality contributions that advance research and practice in technology-enhanced learning, language education, STEM, metaverse and AI companions, and learning analytics.</p>
          <p>Accepted papers will be published in the <a href="https://library.apsce.net" target="_blank" rel="noopener">APSCE Library</a> and submitted for indexing. Researchers, educators, designers, policymakers, and graduate students are warmly invited to participate.</p>

          <!-- Tracks -->
          <h2 class="h5 mt-5">Conference Tracks</h2>
            <ul>
            <li><strong><a href="<?php echo esc_url( home_url('/tbics-2026/') ); ?>">TBICS 2026:</a></strong> Technology-Enhanced Learning Conference in Kumamoto, Japan.</li>
            <li><strong><a href="<?php echo esc_url( home_url('/cte-stem-2026/') ); ?>">CTE-STEM 2026:</a></strong> Computational Thinking & STEM Education — 10th APSCE edition.</li>
            <li><strong><a href="<?php echo esc_url( home_url('/icfull-2026/') ); ?>">ICFULL 2026:</a></strong> Future Language Learning — Innovations in AI and literacy education.</li>
            <li><strong><a href="<?php echo esc_url( home_url('/metaaces-2026/') ); ?>">MetaACES 2026:</a></strong> Metaverse and Artificial Companions in Education and Society.</li>
            <li><strong><a href="<?php echo esc_url( home_url('/iclea-2026/') ); ?>">ICLEA 2026:</a></strong> Learning Evidence and Analytics — Data-informed teaching and learning.</li>
            </ul>


          <!-- Submission Categories -->
          <h2 class="h5 mt-5">Submission Categories</h2>
          <div class="table-responsive mb-3">
            <table class="table align-middle table-bordered">
              <thead>
                <tr>
                  <th scope="col">Category</th>
                  <th scope="col">Length</th>
                  <th scope="col">Presentation</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Full Paper</td>
                  <td>6 pages</td>
                  <td>Oral or Poster</td>
                </tr>
                <tr>
                  <td>Short Paper</td>
                  <td>4 pages</td>
                  <td>Oral or Poster</td>
                </tr>
                <tr>
                  <td>Poster</td>
                  <td>3 pages</td>
                  <td>Poster only</td>
                </tr>
                <tr>
                  <td>Extended Abstract<br><small class="text-muted">(AI3L 2026 only)</small></td>
                  <td>500 words</td>
                  <td>Oral or Poster</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Submission Guidelines -->
          <h2 class="h5 mt-5">Submission Guidelines</h2>
          <p>Please see the <a href="<?php echo esc_url( home_url('/submission-and-important-dates/') ); ?>">Submission &amp; Important Dates</a> page for instructions, templates, and deadlines.</p>

          <!-- Review Process -->
          <h2 class="h5 mt-5">Review Process</h2>
          <p>All submissions will undergo a <strong>single-blind</strong> peer review. Authors should include their names and affiliations. Anonymization is not required.</p>

        
          <!-- Important Dates -->
          <h2 class="h5 mt-5">Important Dates</h2>
          <p>All key dates are listed on the <a href="<?php echo esc_url( home_url('/submission-and-important-dates/') ); ?>">Submission and Important Dates</a> page.</p>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
