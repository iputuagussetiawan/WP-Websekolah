<?php
/*
    Template Name: Events
*/
?>
<?php get_header(); ?>

<main>
    <section class="articles section-padding">
        <img class="articles__bg" src="<?php echo get_template_directory_uri() . '/src/images/BG2.png' ?>" alt="live aman bg">
        <div class="container">
            <div class="row justify-content-between" data-aos="fade-up">
                <div class="col-md-8">
                    <div class="section-title-wrapper">
                        <h1 class="section-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <div class="articles__grid" data-aos="fade-up" data-aos-delay="100">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $postPerPage = 8;
                $args = array(
                    'posts_per_page' =>  $postPerPage,
                    'post_type' => 'events',
                    'post_status'   => 'publish',
                    'paged'   => $paged
                );
                $events = new WP_Query($args);
                if ($events->have_posts()) :
                    while ($events->have_posts()) :
                        $events->the_post();
                        if (has_post_thumbnail()) :
                            $ulrImagePost = get_the_post_thumbnail_url();
                        else :
                            $ulrImagePost = get_template_directory_uri() . '/src/images/blank-image.svg';
                        endif;
                        if (has_excerpt()) :
                            $postDescription = get_the_excerpt();
                        else :
                            $postDescription = wp_trim_words(get_the_content(), 18);
                        endif;
                        $event_date_start = get_field('event_date_start', get_the_ID());
                        $event_date_end = get_field('event_date_end', get_the_ID());
                        $event_address = get_field('event_address', get_the_ID());

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
                        get_template_part('template-parts/components/cards/card', 'post', array(
                            'card-post-image' => $ulrImagePost,
                            'card-post-title' => get_the_title(),
                            'card-post-event-date' => $eventDate,
                            'card-post-address' => $event_address,
                        ));
                ?>

                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    get_template_part('template-parts/data', 'not-found');
                endif;
                ?>

            </div>
            <?php
            $pagination = paginate_links(array(
                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $news->max_num_pages,
                'prev_text' => '<iconify-icon icon="ion:chevron-back-sharp" style="color: #c1c1c1;"></iconify-icon>',
                'next_text' => '<iconify-icon icon="ion:chevron-forward-sharp" style="color: #c1c1c1;"></iconify-icon>',
                'type' => 'array',
                'show_all' => true
            ));
            ?>
            <?php if (!empty($pagination)) : ?>
                <nav class="navigation mt-5">
                    <ul class="pagination post-pagination d-flex justify-content-end align-items-center">
                        <li class="pagination__detail"> View <?php echo ($postPerPage * ($paged - 1) + 1) ?> - <?php echo (($paged - 1) * $postPerPage) + count($news->posts)  ?> Of <?php echo $news->found_posts; ?></li>
                        <?php foreach ($pagination as $key => $page_link) : ?>
                            <li class="page-item
                        <?php
                            $link = htmlspecialchars($page_link);
                            $link = str_replace(' current', '', $link);
                            if (strpos($page_link, 'current') !== false) {
                                echo ' active';
                            }
                        ?>">
                                <?php
                                if ($link) {
                                    $link = str_replace('page-numbers', 'page-link', $link);
                                }
                                echo htmlspecialchars_decode($link);
                                ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </nav>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>