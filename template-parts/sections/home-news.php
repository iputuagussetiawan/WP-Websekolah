<section class="homenews section-padding">
    <div class="container">
        <div class="section-title-wrapper">
            <p class="section-subtitle">Berita Terkini</p>
            <h2 class="section-title">
                Berita Terbaru dari <br>SMK P Margarana Tabanan
            </h2>
        </div>
        <div class="homenews__grid">
            <?php
            $postPerPage = 4;
            $args = array(
                'posts_per_page' =>  $postPerPage,
                'post_type' => 'post',
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
                    get_template_part('template-parts/components/cards/card', 'post', array(
                        'card-post-image' => $ulrImagePost,
                        'card-post-title' => get_the_title(),
                        'card-post-description' =>  $postDescription,
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