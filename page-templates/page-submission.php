<?php
/**
 * Template Name: Submission and Important Dates
 * Description: TBICS 2026 — structured page for submission categories, rules, and deadlines.
 *
 * @package Understrap Child (TBICS)
 */

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

// ACF hero background image (fallback fixed: removed stray semicolon)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/aso-hero.jpg';
?>

<main id="submission-dates" class="tbics-page site-main" role="main">
<!-- Urgent Deadline Banner -->


  <!-- Hero -->
  <section class="page-hero page-hero-banner" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="text-center text-white">
        <div class="hero-glass">
          <h1 class="mb-2"><?php the_title(); ?></h1>
          <p class="lead mb-0">Please read the submission categories and deadlines carefully before uploading your paper.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="py-5">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-9">
        <?php
  // Use WordPress timezone (Asia/Tokyo from admin)
  $tz = wp_timezone();

  // Deadline date (end of day JST)
  $deadline = new DateTime('2026-02-27 23:59:59', $tz);
  $now = new DateTime('now', $tz);

  // Count full days remaining (date-based, not seconds-based)
  $today = new DateTime('today', $tz);
  $deadline_day = new DateTime('2026-02-27', $tz);
  $days_left = max(0, $today->diff($deadline_day)->days);

  // Only show if deadline hasn't passed
  if ($now < $deadline):
?>
  <div class="deadline-alert-banner" role="alert" aria-live="polite">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="alert alert-warning mb-0 py-3 text-center border-0 rounded-0"
           style="background-color: #fff3cd; border-left: 4px solid #ff9800 !important;">
        <strong style="font-size: 1.1em;">
          ⚠️ Paper Submission Deadline: 27 February 2026, 23:59 (JST)
        </strong>
        <span class="ms-2" style="font-size: 1em;">
          <?php if ($days_left > 1): ?>
            (<?php echo $days_left; ?> days remaining)
          <?php elseif ($days_left === 1): ?>
            (Final day!)
          <?php else: ?>
            (Deadline today!)
          <?php endif; ?>
        </span>
      </div>
    </div>
  </div>
<?php endif; ?>


  <!-- 3) Formatting -->
  <section aria-labelledby="sec-formatting" class="mb-5">
        <h2 id="sec-formatting" class="section-title">Formatting &amp; Template</h2>
        <p>Please format your submission using the official paper template.</p><br>
        <div class="text-center">
        <a class="btn btn-outline-primary me-2 mb-2"
            href="https://eds.let.media.kyoto-u.ac.jp/TBICS2026/wp-content/uploads/2025/10/TBICS2026-PaperTemplate_.docx"
            target="_blank"
            rel="noopener">
          Download Paper Template (Word)
        </a>
          </div>
      </section>
         <!-- 4) Submission System -->
         <section aria-labelledby="sec-submission" class="mb-5">
              <p class="mb-2">
              Submit your paper via the online system:
              
              <a class="inline-url"
                href="https://easychair.org/conferences/?conf=tbics2026"
                target="_blank" rel="noopener">
                https://easychair.org/conferences/?conf=tbics2026
              </a>.
              
            </p>
            <br>
            <div class="submission-cta mt-2 justify-content-center">
            <div class="text-center">
              <a class="btn btn-primary"
                href="https://easychair.org/conferences/?conf=tbics2026"
                target="_blank" rel="noopener"
                aria-label="Open the TBICS 2026 EasyChair submission system (opens in a new tab)">
                Open Submission System
              </a>
              </div>
            </div>
              <ul class="mt-4">
              <li>
                Questions about submissions should be emailed to the PC Chair of the relevant track.
              </li>
              <li>
              Other questions related to local information should be emailed to <a href="mailto:tbics2026@gmail.com?subject=TBICS%202026%20Local%20Info%20Inquiry">tbics2026@gmail.com</a>
              </li>
              </ul>
          </section>

          <!-- 1) Submission Paper Types -->
          <section aria-labelledby="sec-types" class="mb-5">
            <h2 id="sec-types" class="section-title">Submission Paper Types</h2>

            <div class="table-responsive">
              <table class="table align-middle tbics-table">
                <thead>
                  <tr>
                    <th scope="col">Paper Type</th>
                    <th scope="col">Limit</th>
                    <th scope="col">Presentation</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Full paper</strong></td>
                    <td>6 pages</td>
                    <td>Oral only</td>
                  </tr>
                  <tr>
                    <td><strong>Short paper</strong></td>
                    <td>4 pages</td>
                    <td>Oral only</td>
                  </tr>
                  <tr>
                    <td><strong>Poster</strong></td>
                    <td>3 pages</td>
                    <td>Poster only</td>
                  </tr>
                  <tr>
                    <td><strong>Extended abstract (AI3L 2026 only)</strong></td>
                    <td>500 words</td>
                    <td>Oral or Poster</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <p class="small text-muted mb-0"><em>The page limit includes the references and appendix.</em></p>
          </section>

          <!-- AI3L Note -->
          <section aria-labelledby="sec-ai3l" class="mb-5">
            <div class="alert alert-info mb-0" role="note">
              <h3 id="sec-ai3l" class="h6 mb-2">AI3L 2026 specific rule</h3>
              <p class="mb-2">For the AI3L 2026 sub-conference, submissions must be <strong>extended abstracts (500 words)</strong> only.</p>
              <ul class="mb-0">
                <li><strong>Oral presentation:</strong> 20 minutes including Q&amp;A.</li>
                <li><strong>Poster presentation:</strong> Presenters should be present during their scheduled poster session.</li>
              </ul>
            </div>
          </section>

          <!-- 2) Review Process -->
          <section aria-labelledby="sec-review" class="mb-5">
            <h2 id="sec-review" class="section-title">Review Process</h2>
            <p class="mb-0">All submissions will undergo a <strong>single-blind</strong> review process, as in ICCE conferences.</p>
          </section>

          

 

          <!-- 5) Publication -->
          <section aria-labelledby="sec-publication" class="mb-5">
            <h2 id="sec-publication" class="section-title">Publication</h2>
            <p class="mb-0">
              All accepted papers in the main conference will be published in the
              <a href="https://library.apsce.net" target="_blank" rel="noopener">APSCE Library</a>.
            </p>
          </section>

          <!-- 6) Important Dates -->
          <section aria-labelledby="sec-dates" class="mb-5">
            <h2 id="sec-dates" class="section-title">Important Dates</h2>
            <ul class="tbics-dates-list">
              <li><strong>Submission deadline:</strong> February 27, 2026, 23:59 (JST)</li>
              <li><strong>Notification to authors:</strong> March 27, 2026</li>
              <li><strong>Camera-ready submission deadline:</strong> April 30, 2026, 23:59 (JST)</li>
              <li><strong>Author registration deadline:</strong> April 30, 2026, 23:59 (JST)</li>
              <li><strong>Early-bird registration deadline:</strong> April 30, 2026, 23:59 (JST)</li>
              <li><strong>Conference date:</strong> June 25–27, 2026</li>
            </ul>
          </section>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
