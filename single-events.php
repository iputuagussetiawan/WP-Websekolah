<?php
get_header();
$postDate = get_the_date('F d, Y');
$pageEventsID = get_field('event_link', 'page_link')->ID;
$pageEventsLink = get_permalink($pageEventsID);
?>
<main>
    <section class="single-news section-padding">
        <div class="container">
            <a class="single-news__bredcrumb" href="<?= $pageEventsLink; ?>">
                <iconify-icon class="single-news__bredcrumb-icon" icon="ion:chevron-back-sharp" style="color: #00c2cb;"></iconify-icon> News & Events
            </a>
            <div class="single-news__grid" data-aos="fade-up">
                <div class="single-news__inner">
                    <?php
                    if (have_posts()) :

                        while (have_posts()) : the_post();
                            wpb_set_post_views(get_the_ID());

                            $articleImage = get_field('page_header_post_image', get_the_ID());
                            $event_address = get_field('event_address', get_the_ID());
                            if ($articleImage) :
                                // Image variables.
                                $urlArticleImage = $articleImage['url'];
                                $altArticleImage = $articleImage['alt'];
                            else :
                                $urlArticleImage = get_template_directory_uri() . '/src/images/blank-image.svg';
                            endif;

                            $event_date_start = get_field('event_date_start', get_the_ID());
                            $event_date_end = get_field('event_date_end', get_the_ID());

                            $event_date_start_timestamp = strtotime($event_date_start);
                            $event_date_end_timestamp = strtotime($event_date_end);

                            $event_date_start_month = date_i18n("M", $event_date_start_timestamp);
                            $event_date_start_day = date_i18n("d", $event_date_start_timestamp);
                            $event_date_start_year = date_i18n("Y", $event_date_start_timestamp);
                            $event_date_start_g = date_i18n("H", $event_date_start_timestamp);
                            $event_date_start_i = date_i18n("i", $event_date_start_timestamp);
                            $event_date_start_a = date_i18n("s", $event_date_start_timestamp);

                            $event_date_end_month = date_i18n("M", $event_date_end_timestamp);
                            $event_date_end_day = date_i18n("d", $event_date_end_timestamp);
                            $event_date_end_year = date_i18n("Y", $event_date_end_timestamp);
                            $event_date_end_g = date_i18n("H", $event_date_end_timestamp);
                            $event_date_end_i = date_i18n("i", $event_date_end_timestamp);
                            $event_date_end_a = date_i18n("s", $event_date_end_timestamp);

                            if ($event_date_start_month == $event_date_end_month) {
                                $eventDate = $event_date_start_day . '-' . $event_date_end_day . ' ' . $event_date_start_month . ' ' . $event_date_start_g . ':' . $event_date_start_i . '-' . $event_date_end_g . ':' . $event_date_end_i;
                            } else {
                                $eventDate = $event_date_start_day . ' ' . $event_date_start_month . ' ' . $event_date_start_year . '-' . $event_date_end_day . ' ' . $event_date_end_month . ' ' . $event_date_end_year . ' ' . $event_date_start_g . ':' . $event_date_start_i  . '-' . $event_date_end_g . ':' . $event_date_end_i;
                            }
                    ?>
                            <div class="section-title-wrapper">
                                <h1 class="section-title"><?php the_title() ?></h1>
                                <!-- <p class="section-title__description"><?php echo $postDate; ?> </p> -->
                            </div>
                            <?php
                            ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="single-news__image-container">
                                    <img class="single-news__image" src="<?php echo $urlArticleImage ?>" alt="<?php the_title() ?>">
                                </div>
                            <?php endif; ?>

                            <p class="single-news__credit">Credit [<?php the_author(); ?>]</p>

                            <div class="single-news__content-container">
                                <div class="single-news__left-sidebar">
                                    <ul class="single-news__author-list">
                                        <?php
                                        $cardPostDate = get_the_date('d M Y'); ?>
                                        <li class="single-news__author-item">
                                            <svg class="single-news__author-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 9H6V11H4V9ZM18 4V18C18 19.1 17.1 20 16 20H2C0.89 20 0 19.1 0 18L0.00999999 4C0.00999999 2.9 0.89 2 2 2H3V0H5V2H13V0H15V2H16C17.1 2 18 2.9 18 4ZM2 6H16V4H2V6ZM16 18V8H2V18H16ZM12 11H14V9H12V11ZM8 11H10V9H8V11Z" fill="#00C2CB" />
                                            </svg>

                                            <?php
                                            echo  $eventDate
                                            ?>
                                        </li>

                                        <li class="single-news__author-item">
                                            <svg class="single-news__author-icon" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 10C6.9 10 6 9.1 6 8C6 6.9 6.9 6 8 6C9.1 6 10 6.9 10 8C10 9.1 9.1 10 8 10ZM14 8.2C14 4.57 11.35 2 8 2C4.65 2 2 4.57 2 8.2C2 10.54 3.95 13.64 8 17.34C12.05 13.64 14 10.54 14 8.2ZM8 0C12.2 0 16 3.22 16 8.2C16 11.52 13.33 15.45 8 20C2.67 15.45 0 11.52 0 8.2C0 3.22 3.8 0 8 0Z" fill="#00C2CB" />
                                            </svg>

                                            <?php
                                            echo $event_address;
                                            ?>
                                        </li>

                                    </ul>
                                    <?php
                                    $location = get_field('event_map');
                                    if ($location) : ?>
                                        <div class="acf-map" data-zoom="16">
                                            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="single-news__content">
                                    <?php
                                    the_content()
                                    ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>