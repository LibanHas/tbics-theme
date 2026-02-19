<?php
/**
 * Template Name: TBICS 2026 – Keynote Detail
 *
 * @package Understrap Child (TBICS)
 */

defined('ABSPATH') || exit;
get_header();

$container = get_theme_mod('understrap_container_type');
$bg_image = get_field('hero_background') ?: '/TBICS2026/wp-content/uploads/2025/12/kumamoto-sunrise.jpg';

/**
 * Conference type
 * meta | cte | ai3l | iclea
 * (hard-coded for now; trivial to make dynamic later)
 */
$conf_class = 'is-meta';
?>

<main id="tbics-keynote-detail"
      class="tbics-page site-main <?php echo esc_attr($conf_class); ?>"
      role="main">

  <!-- HERO -->
<section class="page-hero page-hero-banner"
  style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-position: center 35%;">
  
  <div class="<?php echo esc_attr($container); ?>">
    <div class="hero-glass hero-glass--keynote text-white">

      <p class="hero-event">
        APSCE TBICS Festival of Learning 2026
      </p>

      <h1 class="hero-title">
        AI-MetaACES Keynote Speaker
      </h1>

      <p class="hero-speaker">
        Prof. Sangmin Michelle Lee
      </p>

    </div>
  </div>
</section>


  <!-- BODY -->
  <section class="py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">
      <div class="row justify-content-center">
        <div class="col-lg-10">
        <nav class="breadcrumb">
          <a href="/TBICS2026/keynote/">Keynote Speakers</a>
          <span>›</span>
          <span>Prof. Sangmin Michelle Lee</span>
        </nav>
          <article class="keynote-detail">
          <div class="keynote-card-wrap">
            <!-- HEADER CARD -->
            <header class="keynote-header">
              <span class="conf-tag">AI-MetaACES 2026</span>

              <div class="header-grid--intro">

                <!-- Photo -->
               

                <!-- Main text -->
                <div class="speaker-main">
                <div class="speaker-photo">
                    <img src="/TBICS2026/wp-content/uploads/2026/01/michelle-lee.png" alt="Prof. Sangmin Michelle Lee">
                </div>

                <div class="speaker-text">
                    <h2 class="speaker-name">Prof. Sangmin Michelle Lee</h2>
                    <p class="speaker-affil">Kyung Hee University, South Korea</p>
                    <h3 class="talk-title">
                    From Tool to Partner: Co-evolving with AI in Education
                    </h3>
                </div>
                </div>


                <!-- Sidebar -->
                <!-- <aside class="speaker-sidebar">
                  <h4>About the Speaker</h4>

                  <p>
                    Sangmin-Michelle Lee is a professor in the Department of XR-AI
                    Convergence at Kyung Hee University, Korea.
                  </p>

                  <p>
                    She received her Ph.D. from The Pennsylvania State University, USA.
                  </p>

                  <p>
                    Her research focuses on technology-enhanced learning environments,
                    machine translation, game-based learning, and computational creativity.
                  </p>

                  <p>
                    She currently serves as an associate editor for
                    <em>Language Learning &amp; Technology</em>,
                    <em>Humanities and Social Sciences Communications</em>,
                    and JALT-CALL.
                  </p>
                </aside> -->

              </div>
            </header>

            <!-- CONTENT -->
    <section class="keynote-content">

        <div class="content-grid">

        <!-- MAIN COLUMN -->
        <div class="keynote-main">
        <section class="keynote-abstract">
        <p>
            With the rapid development of artificial intelligence (AI), AI technologies
            have increasingly been integrated into classroom contexts. Accordingly, a
            growing body of research has examined the impacts of AI on human learning,
            reporting mixed and sometimes controversial findings. Despite these debates,
            AI has become unavoidable in education. Rather than questioning whether AI
            should be used, there is an urgent need to explore how educators and learners
            can effectively benefit from AI and co-evolve with it.
        </p>

        <p>
            AI offers a range of pedagogical benefits. It can support learners in acquiring
            new concepts, brainstorming ideas, accessing diverse perspectives, and improving
            work efficiency. Moreover, AI enables personalized learning tailored to
            individual learners’ needs and knowledge levels—an affordance that has long
            been difficult to achieve in traditional classroom settings. Recent studies
            further suggest that AI can foster higher-order thinking skills, including
            creativity, which has traditionally been regarded as a uniquely human trait.
        </p>

        <p>
            From a computational creativity perspective, students can enhance creativity
            with AI by recombining existing ideas in novel ways (<em>combinational creativity</em>),
            exploring conceptual spaces to generate new possibilities
            (<em>exploratory creativity</em>), or producing fundamentally new ideas
            (<em>transformative creativity</em>). In this process, AI can function as a
            <strong>cognitive partner</strong> or creative collaborator, serving as a more
            knowledgeable peer within the learner’s zone of proximal development. This
            presentation introduces research projects that illustrate how students can
            collaborate and co-evolve with AI while maintaining human agency, and it also
            discusses potential limitations and risks associated with AI use in education.
        </p>
        </section>
        </div>

        <!-- SIDEBAR COLUMN -->
        <aside class="speaker-sidebar">
        <h4>About the Speaker</h4>

        <p>
            <strong>Sangmin-Michelle Lee</strong> is a professor in the Department of
            XR-AI Convergence at Kyung Hee University, Korea. She received her Ph.D.
            from The Pennsylvania State University, USA.
        </p>

        <p>
            Her research focuses on technology-enhanced learning environments,
            machine translation, game-based learning, and computational creativity.
            She has published extensively in leading peer-reviewed journals,
            including <em>Computer Assisted Language Learning</em>,
            <em>ReCALL</em>, <em>Language Learning &amp; Technology</em>,
            <em>British Journal of Educational Technology</em>, and
            <em>Education and Information Technologies</em>.
        </p>

        <p>
            She has led numerous R&amp;D projects in technology-enhanced learning,
            including the development of AI-powered digital textbooks,
            explainable AI systems for teachers, and AI risk-management
            frameworks and checklists for educational contexts.
        </p>

        <p>
            She currently serves as an associate editor for
            <em>Language Learning &amp; Technology</em>,
            <em>Humanities and Social Sciences Communications</em>,
            and <em>JALT-CALL</em>.
        </p>

        <p>
            Her recent work explores human–AI collaboration, learner agency,
            and creativity in AI-integrated XR learning environments, with a
            particular focus on how AI can function as a <strong>cognitive
            partner</strong> rather than a mere tool. She is especially interested
            in bridging learning theory, instructional design, and emerging AI
            technologies to support meaningful and equitable learning experiences.
        </p>
        </aside>
        </div>
    </section>
        </div>
    </article>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
