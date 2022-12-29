<?php
/*
    Template Name: Home
*/
?>
<?php get_header(); ?>
<main>
    <section class="banner">
        <!-- Slider main container -->
        <div class="swiper banner-slider">
            <div class="swiper-wrapper">
                <?php
                $blogs = new WP_Query(array(
                    'posts_per_page' => 5,
                    'post_type' => 'post',
                    'post_status'   => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($blogs->have_posts()) :
                    while ($blogs->have_posts()) :
                        $blogs->the_post();
                        if (get_field('tranding_post')) :
                            get_template_part('template-parts/components/cards/card', 'banner');
                        endif;
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <h3>Data Not Found</h3>
                <?php
                endif;
                ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination banner-slider-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev banner-slider-prev"></div>
            <div class="swiper-button-next banner-slider-next"></div>
        </div>
    </section>

    <?php
    get_template_part('template-parts/sections/home', 'welcome');
    get_template_part('template-parts/sections/home', 'programstudi');
    get_template_part('template-parts/sections/home', 'testimonial');
    ?>

    <!-- <section class="home-welcome section-padding">
        <div class="container">
            <div class="section-title-wrapper text-center">
                <p class="section-subtitle">Selamat Datang di Website</p>
                <h2 class="section-title">
                    SMK P Margana
                </h2>
            </div>
        </div>
    </section> -->
</main>
<?php get_footer(); ?>