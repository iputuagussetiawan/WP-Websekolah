<?php
$pageHomeID = get_field('home_link', 'page_link')->ID;
$homeLink = get_permalink($pageHomeID);
$welcomeTitle = get_field('home_welcome_title', $pageHomeID);
$welcomeSubTitle = get_field('home_welcome_subtitle', $pageHomeID);
$welcomeSortdescription = get_field('home_welcome_sort_description', $pageHomeID);
$homeWelcomeImage = get_field('home_welcome_image', $pageHomeID);
$welcomeVideoUrl = get_field('home_welcome_video_url', $pageHomeID);
$isShowVideo = get_field('show_video', $pageHomeID);
$homeWelcomeImageALT = '';

if ($homeWelcomeImage) {
    $homeWelcomeImageUrl = $homeWelcomeImage['url'];
    $homeWelcomeImageALT = $homeWelcomeImage['alt'];
} else {
    $homeWelcomeImageUrl = get_template_directory_uri() . '/src/images/blank-image.svg';
    $homeWelcomeImageALT = 'welcome image thumbnail';
}
?>
<section class="welcome section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6">
                <div class="section-title-wrapper text-center">
                    <p class="section-subtitle"><?php echo $welcomeSubTitle ?></p>
                    <h2 class="section-title"><?php echo $welcomeTitle ?></h2>

                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php
                if ($isShowVideo) :
                ?>
                    <div class="welcome__media">
                        <div class="welcome__media-container ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/<?php echo GetYouTubeId($welcomeVideoUrl); ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                <?php
                else :
                ?>
                    <div class="welcome__media">
                        <div class="welcome__media-container">
                            <div class="welcome__image-container">
                                <img class="welcome__image" src="<?php echo esc_url($homeWelcomeImageUrl); ?>" alt="<?php echo esc_attr($homeWelcomeImageALT); ?>">
                            </div>
                        </div>
                    </div>
                <?php
                endif;
                ?>

                <p class="section-description text-center">
                    <?php echo $welcomeSortdescription ?>
                </p>

            </div>

        </div>
    </div>
</section>