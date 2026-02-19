<?php
/**
 * Template Name: AI-CTE-STEM 2026 Program Committee
 * Description: Dedicated page for AI-CTE-STEM 2026 Program Committee (PC) members, using CTE-STEM styling.
 */

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

// Short <title>
add_filter('pre_get_document_title', function($title){
  return 'AI-CTE-STEM 2026 Program Committee';
}, 99);

// Hero background (reuse CTE-STEM hero image; ACF 'hero_background' optional override)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';

// Brand modifier for styling hooks
$brand_modifier = 'is-cte';

// Optional hero subline
$hero_lead = get_field('hero_lead') ?: 'Program Committee (PC) members';
?>
<main id="cte-stem-pc" class="tbics-page site-main <?php echo esc_attr($brand_modifier); ?>" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner"
           style="background-image:url('<?php echo esc_url($bg_image); ?>'); background-position:center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass hero-glass--brand">
        <h1 class="hero-split">
          <span class="kicker">AI-CTE-STEM 2026</span>
          <span class="title">Program Committee</span>
        </h1>
        <!-- <?php if ($hero_lead): ?>
          <p class="lead mb-0"><?php echo esc_html($hero_lead); ?></p>
        <?php endif; ?> -->
      </div>
    </div>
  </section>

  <!-- Body -->
  <section class="cfp-body py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <section class="cfp-section">
            <h1 class="section-title">AI-CTE-STEM 2026 Program Committee (PC) members</h1>

            <p class="lead">
              The following scholars serve as members of the Program Committee for the
              APSCE 10th International Conference on Artificial Intelligence,
              Computational Thinking and STEM Education (AI-CTE-STEM) 2026.
            </p>

            <h2 class="org-subtitle">Program Committee Members</h2>

            <ul class="org-members two-col">
              <li>
                <span class="name">Ankur BIST</span>
                <span class="affil">Graphic Era Hill University</span>
              </li>
              <li>
                <span class="name">Shao-Chen CHANG</span>
                <span class="affil">Yuan Ze University</span>
              </li>
              <li>
                <span class="name">Chih-Hung CHEN</span>
                <span class="affil">National Taichung University of Education</span>
              </li>
              <li>
                <span class="name">Guang CHEN</span>
                <span class="affil">Beijing Normal University</span>
              </li>
              <li>
                <span class="name">Jun-Ming CHEN</span>
                <span class="affil">Soochow University</span>
              </li>
              <li>
                <span class="name">Ming-Puu CHEN</span>
                <span class="affil">National Taiwan Normal University</span>
              </li>
              <li>
                <span class="name">WeiDong CHEN</span>
                <span class="affil">Suzhou University of Science and Technology</span>
              </li>
              <li>
                <span class="name">Yen-Lin CHIU</span>
                <span class="affil">National Taiwan University of Science and Technology</span>
              </li>
              <li>
                <span class="name">Chih-Ming CHU</span>
                <span class="affil">National Ilan University</span>
              </li>
              <li>
                <span class="name">Sungwan HAN</span>
                <span class="affil">Gyeong-in National University of Education</span>
              </li>
              <li>
                <span class="name">Marc JANSEN</span>
                <span class="affil">University of Applied Sciences Ruhr West</span>
              </li>
              <li>
                <span class="name">Chia-Pin KAO</span>
                <span class="affil">Southern Taiwan University of Science and Technology</span>
              </li>
              <li>
                <span class="name">Zuheir N. Khlaif</span>
                <span class="affil">An Najah National University</span>
              </li>
              <li>
                <span class="name">ChangYen LIAO</span>
                <span class="affil">National Central University</span>
              </li>
              <li>
                <span class="name">Chang-Hsin LIN</span>
                <span class="affil">National University of Tainan</span>
              </li>
              <li>
                <span class="name">Hao-Chiang Koong LIN</span>
                <span class="affil">National University of Tainan</span>
              </li>
              <li>
                <span class="name">Jia-Jiunn LO</span>
                <span class="affil">Chung-Hwa University</span>
              </li>
              <li>
                <span class="name">Maria José MARCELINO</span>
                <span class="affil">University of Coimbra</span>
              </li>
              <li>
                <span class="name">Marcelo MILRAD</span>
                <span class="affil">Linnaeus University</span>
              </li>
              <li>
                <span class="name">Kuo-Liang OU</span>
                <span class="affil">National Hsinchu University of Education</span>
              </li>
              <li>
                <span class="name">Meng-Ping TSUEI</span>
                <span class="affil">National Taipei University of Education</span>
              </li>
              <li>
                <span class="name">Haipeng WAN</span>
                <span class="affil">Capital Normal University</span>
              </li>
              <li>
                <span class="name">Chun-Wang WEI</span>
                <span class="affil">Far East University</span>
              </li>
              <li>
                <span class="name">Wan-Hsuan YEN</span>
                <span class="affil">National Taiwan Normal University</span>
              </li>
              <li>
                <span class="name">Oka KURNIAWAN</span>
                <span class="affil">Singapore University of Technology and Design</span>
              </li>
              <li>
                <span class="name">Daranee Lehtonen</span>
                <span class="affil">University of Turku</span>
              </li>
              <li>
                <span class="name">Pei-Shan TSAI</span>
                <span class="affil">National Taipei University of Technology</span>
              </li>
              <li>
                <span class="name">Sheing-Yi WU</span>
                <span class="affil">National Tsing-Hua University</span>
              </li>
              <li>
                <span class="name">Hi-Lian Jeng</span>
                <span class="affil">National Taiwan University of Science and Technology</span>
              </li>
              <li>
                <span class="name">Sally WAN</span>
                <span class="affil">The Chinese University of Hong Kong</span>
              </li>
              <li>
                <span class="name">Hüseyin ÖZÇINAR</span>
                <span class="affil">Pamukkale University</span>
              </li>
              <li>
                <span class="name">Tai-Chien KAO</span>
                <span class="affil">National Dong Hwa University</span>
              </li>
              <li>
                <span class="name">Chiu Pin LIN</span>
                <span class="affil">National Hsinchu University of Education</span>
              </li>
              <li>
                <span class="name">Niwat SRISAWASDI</span>
                <span class="affil">Khon Kaen University</span>
              </li>
              <li>
                <span class="name">Mi Song KIM</span>
                <span class="affil">Western University</span>
              </li>
            </ul>

          </section>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
