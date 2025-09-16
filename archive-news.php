<?php
/**
 * Archive Template for News
 *
 * Displays a list of news posts with ACF fields.
 *
 * @package Understrap (child theme TBICS)
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<main id="news-archive" class="site-main">
    <!-- Hero Section -->
    <section class="news-hero">
        <div class="container text-center">
            <h1 class="news-title">NEWS</h1>
            <p class="news-subtitle">The latest updates and announcements for TBICS 2026</p>
        </div>
    </section>

    <!-- News List -->
    <div class="container my-5">
        <div class="content">
            <?php if ( have_posts() ) : ?>
                <ul class="list-news">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php
                        // Get ACF fields
                        $headline = get_field('headline');
                        $summary = get_field('summary');
                        $featured_image = get_field('featured_image');
                        $external_link = get_field('external_link');
                        $external_url = get_field('external_url');
                        $publication_date = get_field('publication_date');

                        // Set fallback values
                        $title = $headline ? $headline : get_the_title();
                        $date = $publication_date ? date_i18n('Y/m/d', strtotime($publication_date)) : get_the_date('Y/m/d');
                        $link = ($external_link && $external_url) ? esc_url($external_url) : get_permalink();
                        $target = ($external_link && $external_url) ? ' target="_blank" rel="noopener noreferrer"' : '';
                        ?>
                        <li class="news-item">
                            <a href="<?php echo $link; ?>"<?php echo $target; ?>>
                                <?php if ($featured_image) : ?>
                                    <div class="news-thumb">
                                        <img src="<?php echo esc_url($featured_image['url']); ?>" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="news-content">
                                    <p class="news-date"><?php echo esc_html($date); ?></p>
                                    <p class="news-title"><?php echo esc_html($title); ?></p>
                                    <?php if ($summary) : ?>
                                        <p class="news-summary"><?php echo esc_html($summary); ?></p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>

                <!-- Pagination -->
                <div class="pagination">
                    <?php
                    if ( function_exists( 'wp_pagenavi' ) ) {
                        wp_pagenavi();
                    } else {
                        the_posts_navigation();
                    }
                    ?>
                </div>

            <?php else : ?>
                <p>No news articles found.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
