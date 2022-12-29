<section class="testimonial section-padding">
    <div class="container position-relative">
        <div class="section-title-wrapper">
            <p class="section-subtitle">Testimonial</p>
            <h2 class="section-title">Orang Tua</h2>
        </div>
        <div class="swiper testimonial">
            <div class="swiper-wrapper">
                <?php
                $blogs = new WP_Query(array(
                    'posts_per_page' => 5,
                    'post_type' => 'testimonial',
                    'post_status'   => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($blogs->have_posts()) :

                    while ($blogs->have_posts()) :
                        $blogs->the_post();
                        $profesi = get_field('profesi', get_the_ID());
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
                ?>
                        <div class="swiper-slide">
                            <?php
                            get_template_part('template-parts/components/cards/card', 'testimonial', array(
                                'card-testimonial-image' => $ulrImagePost,
                                'card-testimonial-title' => get_the_title(),
                                'card-testimonial-mesage' =>  $postDescription,
                                'card-testimonial-profesi' =>  $profesi,
                            ));
                            ?>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <h3>Data Not Found</h3>
                <?php
                endif;
                ?>
            </div>


            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev testimonial-prev"></div>
            <div class="swiper-button-next testimonial-next"></div> -->
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination testimonial-pagination"></div>
    </div>
</section>