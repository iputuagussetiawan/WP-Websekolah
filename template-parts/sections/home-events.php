<section class="homevents section-padding">
    <div class="container">
        <div class="section-title-wrapper">
            <p class="section-subtitle">Upcoming Events</p>
            <h2 class="section-title">
                Event Yang Akan Deselenggarakan di <br>SMK P Margarana Tabanan
            </h2>
        </div>
        <div class="homevents__grid">
            <?php
            $postPerPage = 4;
            $args = array(
                'posts_per_page' =>  $postPerPage,
                'post_type' => 'events',
                'post_status'   => 'publish',
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
                    get_template_part('template-parts/components/cards/card', 'events', array(
                        'card-event-image' => $ulrImagePost,
                        'card-event-title' => get_the_title(),
                        'card-event-description' =>  $postDescription,
                        'card-event-date' => $eventDate,
                        'card-address' => $event_address,
                        'card-event-day' =>  $event_date_start_day,
                        'card-event-month' =>  $event_date_start_month,
                        'card-event-year' =>  $event_date_start_year,
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
        <div class="btn-wrapper text-center">
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
    </div>
</section>