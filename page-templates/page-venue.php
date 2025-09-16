<?php
/**
 * Template Name: Venue (no ACF)
 */

defined('ABSPATH') || exit;
get_header();

$container  = get_theme_mod('understrap_container_type');
$bg_image   = get_the_post_thumbnail_url(null, 'full') ?: '/TBICS2026/wp-content/uploads/2025/09/venue-hero.jpg'; // hero fallback
$main_img   = get_the_post_thumbnail_url(null, 'large')?: '/TBICS2026/wp-content/uploads/2025/09/Parea-Hall.jpg';
$icon_plane = get_theme_file_uri('img/plane-takeoff.svg');
$icon_train = get_theme_file_uri('img/train-front.svg');
$icon_bus   = get_theme_file_uri('img/bus.svg');
$map_url    = get_theme_file_uri('img/Map.png');
$mascot_url = get_field('mascot_image');
?>

<main id="venue" class="tbics-page site-main" role="main">

  <!-- Hero -->
  <section class="page-hero page-hero-banner" style="background-image: url('<?php echo esc_url($bg_image); ?>'); background-position: center 35%;">
    <div class="<?php echo esc_attr($container); ?> text-center text-white">
    <div class="hero-glass">
      <h1 class="mb-2"><?php the_title(); ?></h1>
      <p class="lead mb-0">APSCE TBICS 2026 — Venue Information</p>
    </div>
    </div>
  </section>

  <section class="py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">

      <h2 class="section-title text-center mb-2">Venue Overview</h2>
      <p class="text-center lead font-italic mb-5">
        Join us at the Parea Hall, in the heart of Kumamoto
      </p>

      <div class="row align-items-center mb-5">
        <div class="col-md-5 mb-4 mb-md-0">
          <?php if ($main_img): ?>
            <img class="img-fluid rounded shadow-sm" src="<?php echo esc_url($main_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
          <?php endif; ?>
        </div>
        <div class="col-md-7">
          <h3 class="h4 mb-3">
            Kumamoto Prefectural Exchange Center – “Parea Hall”<br>
            <small class="text-muted">(9th–10th Floor)</small>
          </h3>

          <p class="mb-1 d-flex align-items-start">
            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 16 16" class="mr-2 mt-1" focusable="false">
              <path fill="#013f87" d="M8 0a5.53 5.53 0 00-5.5 5.5C2.5 9 8 16 8 16s5.5-7 5.5-10.5A5.53 5.53 0 008 0zm0 7.5A2 2 0 118 3.5a2 2 0 010 4z"/>
            </svg>
            <span>8-9 Tetorihoncho, Chuo Ward, Kumamoto, 860-0808</span>
          </p>
          <p class="mb-0">
            <a class="btn btn-outline-primary btn-sm"
               href="<?php echo esc_url('https://www.google.com/maps/search/?api=1&query=' . rawurlencode('〒860-8554　熊本市中央区手取本町8番9号')); ?>"
               target="_blank" rel="noopener">View on Google Maps</a>
          </p>
        </div>
      </div>

      <p class="text-center mb-4">
        <em>Spacious meeting rooms: flexible layouts accommodate keynote talks, panel discussions, and breakout sessions.</em>
      </p>

      <!-- Gallery (from Gutenberg) -->
      <div class="wp-content">
        <?php
        // Render only the Venue Overview gallery (class "venue-gallery")
        $post_id = get_queried_object_id();
        $blocks  = parse_blocks( get_post_field( 'post_content', $post_id ) );

        function render_gallery_by_class(array $blocks, string $class, int $limit = 1): int {
          $printed = 0;
          $walk = function(array $nodes) use (&$walk, $class, $limit, &$printed) {
            foreach ($nodes as $b) {
              if ($printed >= $limit) return;
              if (($b['blockName'] ?? '') === 'core/gallery') {
                $cn = $b['attrs']['className'] ?? '';
                if (strpos($cn, $class) !== false) {
                  echo render_block($b);
                  $printed++;
                }
              }
              if (!empty($b['innerBlocks'])) $walk($b['innerBlocks']);
            }
          };
          $walk($blocks);
          return $printed;
        }

        // Prefer a gallery explicitly marked "venue-gallery"
        $printed = render_gallery_by_class($blocks, 'venue-gallery', 1);

        // Fallback: first gallery that is NOT a dk-gallery
        if (!$printed) {
          $printed = 0;
          $walk = function(array $nodes) use (&$walk, &$printed) {
            foreach ($nodes as $b) {
              if ($printed >= 1) return;
              if (($b['blockName'] ?? '') === 'core/gallery') {
                $cn = $b['attrs']['className'] ?? '';
                if (strpos($cn, 'dk-gallery') === false) {
                  echo render_block($b);
                  $printed++;
                }
              }
              if (!empty($b['innerBlocks'])) $walk($b['innerBlocks']);
            }
          };
          $walk($blocks);
        }
        ?>
      </div>

    </div>
  </section>

  <!-- Getting Here -->
  <section class="py-5 getting-here" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">

      <h2 class="section-title text-center mb-4">Getting Here</h2>

      <div class="row align-items-start">
        <!-- Left: Steps -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h3 class="h4 mb-4">Getting to Parea Hall is simple:</h3>

          <ul class="gh-list">
            <li>
              <span class="gh-icon" aria-hidden="true">
                <img src="<?php echo esc_url($icon_plane); ?>" alt="">
              </span>
              <span><strong>From Kumamoto airport:</strong> Shuttle bus to Toricho-suji, then 3 min walk</span>
            </li>
            <li>
              <span class="gh-icon" aria-hidden="true">
                <img src="<?php echo esc_url($icon_train); ?>" alt="">
              </span>
              <span><strong>From Kumamoto Station:</strong> Tram to Suidocho, then 1 min walk</span>
            </li>
            <li>
              <span class="gh-icon" aria-hidden="true">
                <img src="<?php echo esc_url($icon_bus); ?>" alt="">
              </span>
              <span><strong>From Fukuoka:</strong> Direct bus to Toricho-suji bus stop</span>
            </li>
          </ul>

          <p class="mt-4">
            See the sections below for detailed international and domestic travel options.
          </p>
        </div>

        <!-- Right: Map + Kumamon -->
        <div class="col-lg-6">
          <figure class="map-card">
            <?php if (!empty($map_url)) : ?>
              <img class="img-fluid rounded shadow-sm" src="<?php echo esc_url($map_url); ?>" alt="Map to Parea Hall">
            <?php else : ?>
              <div class="map-placeholder rounded">
                <span>Map image coming soon</span>
              </div>
            <?php endif; ?>

            <?php if (!empty($mascot_url)) : ?>
              <img class="mascot" src="<?php echo esc_url($mascot_url); ?>" alt="Kumamon">
            <?php endif; ?>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <?php
    // Flag image paths
    $flags = [
      'kr' => get_theme_file_uri('img/flags/kr.png'),
      'tw' => get_theme_file_uri('img/flags/tw.png'),
      'hk' => get_theme_file_uri('img/flags/hk.png'),
    ];

    // Table rows
    $connections = [
      ['cc' => 'kr', 'country' => 'South Korea', 'city' => 'Seoul',      'airport' => 'Incheon International Airport',         'duration' => '1 hr 30 mins'],
      ['cc' => 'tw', 'country' => 'Taiwan',       'city' => 'Taipei',     'airport' => 'Taiwan Taoyuan International Airport',  'duration' => '2 hrs 15 mins'],
      ['cc' => 'tw', 'country' => 'Taiwan',       'city' => 'Kaohsiung',  'airport' => 'Kaohsiung International Airport',       'duration' => '2 hrs 40 mins'],
      ['cc' => 'hk', 'country' => 'Hong Kong',    'city' => 'Hong Kong',  'airport' => 'Hong Kong International Airport',       'duration' => '3 hrs 30 mins'],
      ['cc' => 'kr', 'country' => 'South Korea',  'city' => 'Busan',      'airport' => 'Gimhae International Airport',          'duration' => '1 hr 30 mins'],
    ];
  ?>
  <section class="py-5 intl-connections" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">

      <h2 class="section-title text-center mb-1">International Connections</h2>
      <p class="text-center font-italic mb-4">(to Kumamoto Airport)</p>

      <div class="intl-table table-responsive">
        <table class="table mb-0">
          <thead>
            <tr>
              <th scope="col" style="width:26%;">Country</th>
              <th scope="col" style="width:18%;">City</th>
              <th scope="col">Airport</th>
              <th scope="col" style="width:18%;">Duration</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($connections as $row): ?>
              <tr>
                <td data-label="Country">
                  <span class="flag">
                    <?php if (!empty($flags[$row['cc']])): ?>
                      <img src="<?php echo esc_url($flags[$row['cc']]); ?>" alt="">
                    <?php else: ?>
                      <span class="flag-emoji">
                        <?php echo $row['cc']==='kr'?'🇰🇷':($row['cc']==='tw'?'🇹🇼':($row['cc']==='hk'?'🇭🇰':'')); ?>
                      </span>
                    <?php endif; ?>
                  </span>
                  <span class="country-name"><?php echo esc_html($row['country']); ?></span>
                </td>

                <td data-label="City"><?php echo esc_html($row['city']); ?></td>
                <td data-label="Airport"><?php echo esc_html($row['airport']); ?></td>

                <td class="duration" data-label="Duration">
                  <img src="<?php echo esc_url($icon_plane); ?>" alt="" aria-hidden="true">
                  <span><?php echo esc_html($row['duration']); ?></span>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Domestic Access with Mobile Tabs -->
  <section class="py-5 domestic-access v2" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">

      <h2 class="section-title text-center mb-4">Domestic Access</h2>

      <!-- Mobile tabs (shown under ~992px) -->
      <div class="da-tabbar" role="tablist" aria-label="Domestic Access">
        <button id="tab-air"   class="da-tab is-active" role="tab" aria-selected="true"  data-da-tab="air">By Air</button>
        <button id="tab-train" class="da-tab"           role="tab" aria-selected="false" data-da-tab="train">By Train</button>
        <button id="tab-bus"   class="da-tab"           role="tab" aria-selected="false" data-da-tab="bus">By Bus</button>
      </div>

      <!-- ===== Lane: AIR ===== -->
      <div class="lane air is-active" id="lane-air" role="tabpanel" aria-labelledby="tab-air">
        <div class="lane-label">
          <div class="label-line">
            <span class="pill pill-air">By Air</span>
            <em class="label-sub">(to Kumamoto Airport)</em>
          </div>
          <ul class="origins">
            <li class="origins-head" role="presentation">
              <span class="origins-head-title">Depart from:</span>
              <span class="origins-head-title">Journey time</span>
            </li>
            <li><span>Tokyo</span><span class="time">1 hr 40 min</span></li>
            <li><span>Osaka</span><span class="time">1 hr 05 min</span></li>
            <li><span>Nagoya</span><span class="time">1 hr 15 min</span></li>
          </ul>
        </div>

        <div class="lane-track">
          <div class="step step-air">Kumamoto<br>Airport</div>

          <div class="leg">
            <span class="lane-arrow" style="--lane-color: var(--air);"></span>
            <span class="arrow-badge"><span aria-hidden="true">🚌</span> Shuttlebus <strong>40 min</strong></span>
          </div>

          <div class="step step-air">Toricho-suji<br>Bus stop</div>

          <div class="leg short">
            <span class="lane-arrow" style="--lane-color: var(--air);"></span>
            <span class="arrow-badge"><span aria-hidden="true">🚶</span> <strong>3 min</strong></span>
          </div>
        </div>

        <div class="lane-dest dest">Parea Hall</div>
      </div>

      <!-- ===== Lane: TRAIN ===== -->
      <div class="lane train" id="lane-train" role="tabpanel" aria-labelledby="tab-train">
        <div class="lane-label">
          <div class="label-line">
            <span class="pill pill-train">By Train</span>
            <em class="label-sub">(to Kumamoto Station)</em>
          </div>
          <ul class="origins">
            <li class="origins-head" role="presentation">
              <span class="origins-head-title">Depart from:</span>
              <span class="origins-head-title">Journey time</span>
            </li>
            <li><span>Shin-Osaka</span><span class="time">2 hr 59 min</span></li>
            <li><span>Hakata Station (Fukuoka)</span><span class="time">33 min</span></li>
            <li><span>Kagoshima-Chuo</span><span class="time">44 min</span></li>
          </ul>
        </div>

        <div class="lane-track">
          <div class="step step-train">Kumamoto<br>Station</div>

          <div class="leg">
            <span class="lane-arrow" style="--lane-color: var(--train);"></span>
            <span class="arrow-badge"><span aria-hidden="true">🚋</span> Tram <strong>6 min</strong></span>
          </div>

          <div class="step step-train">Suidocho<br>Stop</div>

          <div class="leg short">
            <span class="lane-arrow" style="--lane-color: var(--train);"></span>
            <span class="arrow-badge"><span aria-hidden="true">🚶</span> <strong>1 min</strong></span>
          </div>
        </div>

        <div class="lane-dest dest">Parea Hall</div>
      </div>

      <!-- ===== Lane: BUS ===== -->
      <div class="lane bus" id="lane-bus" role="tabpanel" aria-labelledby="tab-bus">
        <div class="lane-label">
          <div class="label-line">
            <span class="pill pill-bus">By Bus</span>
            <em class="label-sub">(to Kumamoto City Center)</em>
          </div>
          <ul class="origins">
            <li class="origins-head" role="presentation">
              <span class="origins-head-title">Depart from:</span>
              <span class="origins-head-title">Journey time</span>
            </li>
            <li><span>Fukuoka Airport</span><span class="time">2 hr 03 min</span></li>
            <li><span>Hakata Bus Terminal</span><span class="time">2 hr 12 min</span></li>
          </ul>
        </div>

        <div class="lane-track">
          <div class="step step-bus">Toricho-suji<br>Bus stop</div>

          <div class="leg to-dest">
            <span class="lane-arrow" style="--lane-color: var(--bus);"></span>
            <span class="arrow-badge"><span aria-hidden="true">🚶</span> <strong>3 min</strong></span>
          </div>
        </div>

        <div class="lane-dest dest">Parea Hall</div>
      </div>

    </div>

    <!-- Inline CSS for tabs (keeps working even before SCSS build) -->
    <style>
      .domestic-access.v2 .da-tabbar{
        display:none; gap:8px; justify-content:center; margin:0 0 12px;
      }
      .domestic-access.v2 .da-tab{
        appearance:none; border:1px solid #cbd5e1; background:#fff; color:#1f2d3d;
        font-weight:600; border-radius:9999px; padding:.45rem 1rem; cursor:pointer;
      }
      .domestic-access.v2 .da-tab.is-active{
        background:#013f87; color:#fff; border-color:#013f87;
      }
      @media (max-width: 991.98px){
        .domestic-access.v2 .da-tabbar{ display:flex; }
        .domestic-access.v2.has-tabs .lane{ display:none; }
        .domestic-access.v2.has-tabs .lane.is-active{ display:grid; }
      }
    </style>

    <!-- Tiny tabs script -->
    <script>
      (function(){
        var section = document.querySelector('.domestic-access.v2');
        if(!section) return;

        var tabs = Array.prototype.slice.call(section.querySelectorAll('.da-tab'));
        var panels = {
          air:   section.querySelector('#lane-air'),
          train: section.querySelector('#lane-train'),
          bus:   section.querySelector('#lane-bus')
        };
        var mq = window.matchMedia('(max-width: 991.98px)');

        function applyMode(){
          if(mq.matches){
            section.classList.add('has-tabs');
            var active = (section.querySelector('.da-tab.is-active') || tabs[0]).getAttribute('data-da-tab');
            Object.keys(panels).forEach(function(k){
              if(panels[k]) panels[k].classList.toggle('is-active', k===active);
            });
            tabs.forEach(function(t){
              t.setAttribute('aria-selected', t.getAttribute('data-da-tab')===active ? 'true' : 'false');
            });
          }else{
            section.classList.remove('has-tabs');
            Object.keys(panels).forEach(function(k){
              if(panels[k]) panels[k].classList.remove('is-active');
            });
            tabs.forEach(function(t){ t.setAttribute('aria-selected','false'); });
          }
        }

        applyMode();
        if(mq.addEventListener){ mq.addEventListener('change', applyMode); }
        else { mq.addListener(applyMode); } // older Safari

        tabs.forEach(function(tab){
          tab.addEventListener('click', function(){
            tabs.forEach(function(t){ t.classList.toggle('is-active', t===tab); });
            var key = tab.getAttribute('data-da-tab');
            Object.keys(panels).forEach(function(k){
              if(panels[k]) panels[k].classList.toggle('is-active', k===key);
            });
            tabs.forEach(function(t){
              t.setAttribute('aria-selected', t===tab ? 'true' : 'false');
            });
          });
        });
      })();
    </script>

  </section>

  <section class="discover-kumamoto py-5" style="background-color:#DDEBF7;">
    <div class="<?php echo esc_attr($container); ?>">

    <div class="paws-title mb-3">
  <span class="rule"></span>
  <img class="kumamon" 
       src="/TBICS2026/wp-content/themes/tbics-upload/img/kumamon-sdgs.png"
       alt="" aria-hidden="true" loading="lazy" decoding="async" />
  <span class="rule rule--short"></span>
  <h2 class="mb-0">Discover Kumamoto</h2>
  <span class="rule"></span>
</div>


      <p class="lead intro mx-auto">
        While you're here for the conference, take some time to enjoy Kumamoto’s rich culture,
        stunning nature, and delicious local cuisine.
      </p>
      <p class="intro mx-auto">
        <a class="more-link" href="https://kumamoto-guide.jp/en/" target="_blank" rel="noopener">Click here for more information on activities in Kumamoto.</a>
      </p>

      <div class="dk-content">
        <?php
        // Render only Gallery blocks with class "dk-gallery"
        $post_id = get_queried_object_id();
        $blocks  = parse_blocks( get_post_field( 'post_content', $post_id ) );

        function render_dk_galleries(array $blocks): bool {
          $found = false;
          foreach ($blocks as $b) {
            if (
              ($b['blockName'] ?? '') === 'core/gallery' &&
              strpos($b['attrs']['className'] ?? '', 'dk-gallery') !== false
            ) {
              echo render_block($b);
              $found = true;
            }
            if (!empty($b['innerBlocks'])) {
              $found = render_dk_galleries($b['innerBlocks']) || $found;
            }
          }
          return $found;
        }

        if (!render_dk_galleries($blocks)) {
          echo '<p class="text-muted">Add two Gallery blocks with the class <code>dk-gallery</code> to show items here.</p>';
        }
        ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
