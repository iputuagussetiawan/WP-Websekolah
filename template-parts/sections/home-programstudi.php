<?php
// $pageHomeID = get_field('home_link', 'page_link')->ID;
// $homeLink = get_permalink($pageHomeID);
// $welcomeTitle = get_field('home_welcome_title', $pageHomeID);
// $welcomeSubTitle = get_field('home_welcome_subtitle', $pageHomeID);
// $welcomeSortdescription = get_field('home_welcome_sort_description', $pageHomeID);
// $homeWelcomeImage = get_field('home_welcome_image', $pageHomeID);
// $welcomeVideoUrl = get_field('home_welcome_video_url', $pageHomeID);
// $isShowVideo = get_field('show_video', $pageHomeID);
// $homeWelcomeImageALT = '';

// if ($homeWelcomeImage) {
//     $homeWelcomeImageUrl = $homeWelcomeImage['url'];
//     $homeWelcomeImageALT = $homeWelcomeImage['alt'];
// } else {
//     $homeWelcomeImageUrl = get_template_directory_uri() . '/src/images/blank-image.svg';
//     $homeWelcomeImageALT = 'welcome image thumbnail';
// }
?>
<section class="programstudi section-padding--top">
    <div class="container">
        <div class="section-title-wrapper text-center">
            <p class="section-subtitle"> Program Studi</p>
            <h2 class="section-title">
                Jurusan/Program studi <br>Yang Dapat di pilih oleh siswa
            </h2>
        </div>
    </div>
    <div class="programstudi__grid">
        <?php
        $postPerPage = 4;
        $args = array(
            'posts_per_page' =>  $postPerPage,
            'post_type' => 'programstudy',
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
                get_template_part('template-parts/components/cards/card', 'programstudi', array(
                    'card-programstudi-image' => $ulrImagePost,
                    'card-programstudi-title' => get_the_title(),
                    'card-programstudi-description' =>  $postDescription,
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
</section>