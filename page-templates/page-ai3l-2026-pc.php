<?php
/**
 * Template Name: AI3L 2026 Program Committee
 * Description: Dedicated page for AI3L 2026 Program Committee (PC) members, using AI3L styling.
 */

defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

// Short <title>
add_filter('pre_get_document_title', function($title){
  return 'AI3L 2026 Program Committee';
}, 99);

// Hero background (reuse AI3L hero image; ACF 'hero_background' optional override)
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/09/kumamoto-jo-sakura.jpg';

// Brand modifier for styling hooks
$brand_modifier = 'is-ai3l';

// Optional hero subline (you can set ACF 'hero_lead'; fallback is a simple label)
$hero_lead = get_field('hero_lead') ?: 'Program Committee (PC) members';
?>
<main id="ai3l-pc" class="tbics-page site-main <?php echo esc_attr($brand_modifier); ?>" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner"
           style="background-image:url('<?php echo esc_url($bg_image); ?>'); background-position:center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
      <div class="hero-glass hero-glass--brand">
        <h1 class="hero-split">
          <span class="kicker">AI3L 2026</span>
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
            <h1 class="section-title">AI3L 2026 Program Committee (PC) members</h1>

            <p class="lead">
              The following scholars serve as members of the Program Committee for the
              APSCE 5th International Conference on AI in Language Learning and Literacy (AI3L) 2026.
            </p>

            <h2 class="org-subtitle">Program Committee Members</h2>

            <ul class="org-members two-col">
              <li>
                <span class="name">Vahid Aryadoust</span>
                <span class="affil">Nanyang Technological University, Singapore</span>
              </li>
              <li>
                <span class="name">Barry Bai</span>
                <span class="affil">The Chinese University of Hong Kong, Hong Kong</span>
              </li>
              <li>
                <span class="name">Neil Edward Barrett</span>
                <span class="affil">Southern Taiwan University of Science and Technology, Taiwan</span>
              </li>
              <li>
                <span class="name">Linda Bradley</span>
                <span class="affil">University of Gothenburg, Sweden</span>
              </li>
              <li>
                <span class="name">Wen-Li Chang</span>
                <span class="affil">National Chung Cheng University, Taiwan</span>
              </li>
              <li>
                <span class="name">Mei-Rong Chen</span>
                <span class="affil">Soochow University, Taiwan</span>
              </li>
              <li>
                <span class="name">Te-Lien Chou</span>
                <span class="affil">Fu Jen Catholic University, Taiwan</span>
              </li>
              <li>
                <span class="name">Darmawansah Darmawansah</span>
                <span class="affil">Providence University, Taiwan</span>
              </li>
              <li>
                <span class="name">Ron Darvin</span>
                <span class="affil">University of British Columbia, Canada</span>
              </li>
              <li>
                <span class="name">Liping Deng</span>
                <span class="affil">Hong Kong Baptist University, Hong Kong</span>
              </li>
              <li>
                <span class="name">Sun He</span>
                <span class="affil">Nanyang Technological University, Singapore</span>
              </li>
              <li>
                <span class="name">Hui-Tzu Hsu</span>
                <span class="affil">National Chung Cheng University, Taiwan</span>
              </li>
              <li>
                <span class="name">Hsin-Yi Huang</span>
                <span class="affil">Southern Taiwan University of Science and Technology, Taiwan</span>
              </li>
              <li>
                <span class="name">Hui-Chun Hung</span>
                <span class="affil">National Central University, Taiwan</span>
              </li>
              <li>
                <span class="name">Jiyou Jia</span>
                <span class="affil">Beijing University, China</span>
              </li>
              <li>
                <span class="name">Lianjiang Jiang</span>
                <span class="affil">The University of Hong Kong, Hong Kong</span>
              </li>
              <li>
                <span class="name">Yichao Jiang</span>
                <span class="affil">Shenzhen Technology University, China</span>
              </li>
              <li>
                <span class="name">Chian-Wen Kao</span>
                <span class="affil">Yuan Ze University, Taiwan</span>
              </li>
              <li>
                <span class="name">Gloria Yi-Ming Kao</span>
                <span class="affil">National Taiwan University of Science and Technology, Taiwan</span>
              </li>
              <li>
                <span class="name">Regina Kaplan-Rakowski</span>
                <span class="affil">University of North Texas, USA</span>
              </li>
              <li>
                <span class="name">Chun Lai</span>
                <span class="affil">The University of Hong Kong, Hong Kong</span>
              </li>
              <li>
                <span class="name">Geoff Lawrence</span>
                <span class="affil">York University, Canada</span>
              </li>
              <li>
                <span class="name">Sangmin-Michelle Lee</span>
                <span class="affil">Kyung Hee University, Korea</span>
              </li>
              <li>
                <span class="name">Aubrey Neil Leveridge</span>
                <span class="affil">University of British Columbia, Canada</span>
              </li>
              <li>
                <span class="name">Banban Li</span>
                <span class="affil">University of Science and Technology Beijing, China</span>
              </li>
              <li>
                <span class="name">Ling Li</span>
                <span class="affil">Zhejiang Normal University, China</span>
              </li>
              <li>
                <span class="name">Jingjing Lian</span>
                <span class="affil">Beijing University of Posts and Telecommunications, China</span>
              </li>
              <li>
                <span class="name">Chang-Yen Liao</span>
                <span class="affil">National Central University, Taiwan</span>
              </li>
              <li>
                <span class="name">Ai-En Lin</span>
                <span class="affil">National Changhua University of Education, Taiwan</span>
              </li>
              <li>
                <span class="name">Gi-Zen Liu</span>
                <span class="affil">National Cheng Kung University, Taiwan</span>
              </li>
              <li>
                <span class="name">Pei-Lin Liu</span>
                <span class="affil">National Chiayi University, Taiwan</span>
              </li>
              <li>
                <span class="name">Fang-Ying Lo</span>
                <span class="affil">Asia University, Taiwan</span>
              </li>
              <li>
                <span class="name">Lin Luan</span>
                <span class="affil">Beijing University of Posts and Telecommunications, China</span>
              </li>
              <li>
                <span class="name">Rong Luo</span>
                <span class="affil">Zhejiang University, China</span>
              </li>
              <li>
                <span class="name">Qing Ma</span>
                <span class="affil">The Education University of Hong Kong, Hong Kong</span>
              </li>
              <li>
                <span class="name">Yuichi Ono</span>
                <span class="affil">University of Tsukuba, Japan</span>
              </li>
              <li>
                <span class="name">Grace Yue Qi</span>
                <span class="affil">Massey University, New Zealand</span>
              </li>
              <li>
                <span class="name">You Su</span>
                <span class="affil">Beijing University of Posts and Telecommunications, China</span>
              </li>
              <li>
                <span class="name">Sheng-Shiang Tseng</span>
                <span class="affil">National Chengchi University, Taiwan</span>
              </li>
              <li>
                <span class="name">Jingyun Wang</span>
                <span class="affil">Durham University, UK</span>
              </li>
              <li>
                <span class="name">Yijen Wang</span>
                <span class="affil">Waseda University, Japan</span>
              </li>
              <li>
                <span class="name">Lung-Hsiang Wong</span>
                <span class="affil">Nanyang Technological University, Singapore</span>
              </li>
              <li>
                <span class="name">Junjie Gavin Wu</span>
                <span class="affil">Macao Polytechnic University, Macao SAR</span>
              </li>
              <li>
                <span class="name">Sumei Wu</span>
                <span class="affil">Beijing Normal University, China</span>
              </li>
              <li>
                <span class="name">Yi-Ju Wu</span>
                <span class="affil">University of Taipei, Taiwan</span>
              </li>
              <li>
                <span class="name">Yin Yang</span>
                <span class="affil">The Education University of Hong Kong, Hong Kong</span>
              </li>
              <li>
                <span class="name">Danyang Zhang</span>
                <span class="affil">Shenzhen University, China</span>
              </li>
              <li>
                <span class="name">Limei Zhang</span>
                <span class="affil">Nanyang Technological University, Singapore</span>
              </li>
              <li>
                <span class="name">Shenglan Zhang</span>
                <span class="affil">Iowa State University, USA</span>
              </li>
              <li>
                <span class="name">Di Zou</span>
                <span class="affil">The Hong Kong Polytechnic University, Hong Kong</span>
              </li>
            </ul>

          </section>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
