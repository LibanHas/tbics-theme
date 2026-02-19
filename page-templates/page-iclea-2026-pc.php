<?php
/**
 * Template Name: ICLEA 2026 Program Committee
 * Description: Dedicated page for ICLEA 2026 Program Committee (PC) members, using ICLEA styling.
 */

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

// Short <title>
add_filter('pre_get_document_title', function($title){
  return 'ICLEA 2026 Program Committee';
}, 99);

// Hero background (reuse ICLEA hero image; ACF 'hero_background' optional override)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';

// Brand modifier for styling hooks (reuse .is-iclea from your CFP template)
$brand_modifier = 'is-iclea';

// Optional hero subline (not currently shown, but available if needed)
$hero_lead = get_field('hero_lead') ?: 'Program Committee (PC) members';
?>
<main id="iclea-pc" class="tbics-page site-main <?php echo esc_attr($brand_modifier); ?>" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner"
           style="background-image:url('<?php echo esc_url($bg_image); ?>'); background-position:center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass hero-glass--brand">
        <h1 class="hero-split">
          <span class="kicker">ICLEA 2026</span>
          <span class="title">Program Committee</span>
        </h1>
        <?php /*
        <?php if ($hero_lead): ?>
          <p class="lead mb-0"><?php echo esc_html($hero_lead); ?></p>
        <?php endif; ?>
        */ ?>
      </div>
    </div>
  </section>

  <!-- Body -->
  <section class="cfp-body py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <section class="cfp-section">
            <h1 class="section-title">ICLEA 2026 Program Committee (PC) members</h1>

            <p class="lead">
              The following scholars serve as members of the Program Committee for the
              APSCE 2nd International Conference on Learning Evidence and Analytics (ICLEA) 2026.
            </p>

            <h2 class="org-subtitle">Program Committee Members</h2>

            <ul class="org-members two-col">
              <li>
                <span class="name">Darmawansah DARMAWANSAH</span>
                <span class="affil">Providence University</span>
              </li>
              <li>
                <span class="name">Soumya NARAYANA</span>
                <span class="affil">KLE Technological University</span>
              </li>
              <li>
                <span class="name">Chia-Yu HSU</span>
                <span class="affil">Kyoto University</span>
              </li>
              <li>
                <span class="name">Kohei NAKAMURA</span>
                <span class="affil">Osaka Kyoiku University</span>
              </li>
              <li>
                <span class="name">Cheng-Huan CHEN</span>
                <span class="affil">National Tsing Hua University</span>
              </li>
              <li>
                <span class="name">Huiyong LI</span>
                <span class="affil">Kyushu University</span>
              </li>
              <li>
                <span class="name">Eran HADAS</span>
                <span class="affil">Tel-Aviv University</span>
              </li>
              <li>
                <span class="name">Takahiko MENDORI</span>
                <span class="affil">Kochi University of Technology</span>
              </li>
              <li>
                <span class="name">Masako FURUKAWA</span>
                <span class="affil">National Institute of Informatics</span>
              </li>
              <li>
                <span class="name">Boxuan MA</span>
                <span class="affil">Kyushu University</span>
              </li>
              <li>
                <span class="name">Kento KOIKE</span>
                <span class="affil">Tokyo University of Science</span>
              </li>
              <li>
                <span class="name">Guangji YUAN</span>
                <span class="affil">National Institute of Education, Nanyang Technological University</span>
              </li>
              <li>
                <span class="name">Ean Teng KHOR</span>
                <span class="affil">National Institute of Education, Nanyang Technological University</span>
              </li>
              <li>
                <span class="name">Oscar DEHO</span>
                <span class="affil">Charles Sturt University</span>
              </li>
              <li>
                <span class="name">Masashi TODA</span>
                <span class="affil">Kumamoto University</span>
              </li>
              <li>
                <span class="name">Ivica BOTIČKI</span>
                <span class="affil">University of Zagreb</span>
              </li>
              <li>
                <span class="name">Toshihiro KITA</span>
                <span class="affil">Kumamoto University</span>
              </li>
              <li>
                <span class="name">Gökhan AKÇAPINAR</span>
                <span class="affil">Hacettepe University</span>
              </li>
              <li>
                <span class="name">Alwyn Vwen Yen LEE</span>
                <span class="affil">National Institute of Education, Nanyang Technological University</span>
              </li>
              <li>
                <span class="name">Gwo-Jen HWANG</span>
                <span class="affil">National Taiwan University of Science and Technology</span>
              </li>
              <li>
                <span class="name">Aditi KOTHIYAL</span>
                <span class="affil">Indian Institute of Technology Gandhinagar</span>
              </li>
              <li>
                <span class="name">Young Hoan CHO</span>
                <span class="affil">Seoul National University</span>
              </li>
              <li>
                <span class="name">Anita DIWAKAR</span>
                <span class="affil">Indian Institute of Technology Bombay</span>
              </li>
              <li>
                <span class="name">Stephen J.H. YANG</span>
                <span class="affil">National Central University</span>
              </li>
              <li>
                <span class="name">Ramkumar RAJENDRAN</span>
                <span class="affil">Indian Institute of Technology Bombay</span>
              </li>
              <li>
                <span class="name">Abhinava BARTHAKUR</span>
                <span class="affil">University of South Australia</span>
              </li>
              <li>
                <span class="name">Tatsunori MATSUI</span>
                <span class="affil">Waseda University</span>
              </li>
              <li>
                <span class="name">Si Na KEW</span>
                <span class="affil">Universiti Teknologi Malaysia</span>
              </li>
              <li>
                <span class="name">Maria VIEIRA</span>
                <span class="affil">University of South Australia</span>
              </li>
              <li>
                <span class="name">Masanori SUGIMOTO</span>
                <span class="affil">Hokkaido University</span>
              </li>
              <li>
                <span class="name">Rebecca MARRONE</span>
                <span class="affil">University of South Australia</span>
              </li>
              <li>
                <span class="name">Maria Mercedes T. RODRIGO</span>
                <span class="affil">Ateneo de Manila University</span>
              </li>
              <li>
                <span class="name">Xuewang GENG</span>
                <span class="affil">Kyushu University</span>
              </li>
              <li>
                <span class="name">Yiling DAI</span>
                <span class="affil">Hiroshima University</span>
              </li>
              <li>
                <span class="name">Emmanuel AYEDOUN</span>
                <span class="affil">Kansai University</span>
              </li>
              <li>
                <span class="name">Li CHEN</span>
                <span class="affil">Osaka Kyoiku University</span>
              </li>
              <li>
                <span class="name">Yoshiko GODA</span>
                <span class="affil">Kumamoto University</span>
              </li>
              <li>
                <span class="name">Weiqin CHEN</span>
                <span class="affil">Oslo Metropolitan University</span>
              </li>
              <li>
                <span class="name">Brendan FLANAGAN</span>
                <span class="affil">Kyoto University</span>
              </li>
              <li>
                <span class="name">Masayuki MURAKAMI</span>
                <span class="affil">Kyoto University of Foreign Studies</span>
              </li>
              <li>
                <span class="name">Andrew ZAMECNIK</span>
                <span class="affil">University of South Australia</span>
              </li>
              <li>
                <span class="name">Farhan ALI</span>
                <span class="affil">National Institute of Education, Nanyang Technological University</span>
              </li>
              <li>
                <span class="name">Yuanyuan YANG</span>
                <span class="affil">Jiangsu Normal University</span>
              </li>
              <li>
                <span class="name">Yuko TOYOKAWA</span>
                <span class="affil">Kyoto University</span>
              </li>
              <li>
                <span class="name">Mei-Rong Alice CHEN</span>
                <span class="affil">Soochow University</span>
              </li>
              <li>
                <span class="name">Carol CHU</span>
                <span class="affil">Soochow University</span>
              </li>
              <li>
                <span class="name">Hiroshi NAKANO</span>
                <span class="affil">Kumamoto University</span>
              </li>
              <li>
                <span class="name">Shin-Ichiro KUBOTA</span>
                <span class="affil">Kumamoto University</span>
              </li>
              <li>
                <span class="name">Hiroshi UEDA</span>
                <span class="affil">Hosei University</span>
              </li>
              <li>
                <span class="name">Jiayu OUYANG</span>
                <span class="affil">Beijing Institute of Technology</span>
              </li>
            </ul>

          </section>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
