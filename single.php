<?php
get_header();
$postDate = get_the_date('F d, Y');
$pageArticleID = get_field('blogs_link', 'page_link')->ID;
$pageAboutLink = get_permalink($pageArticleID);
?>
<main>
    <section class="single-news section-padding">
        <div class="container">
            <a class="single-news__bredcrumb" href="<?= $pageAboutLink; ?>">
                <iconify-icon class="single-news__bredcrumb-icon" icon="ion:chevron-back-sharp" style="color: #00c2cb;"></iconify-icon> Articles
            </a>
            <div class="single-news__grid" data-aos="fade-up">
                <div class="single-news__inner">
                    <?php
                    if (have_posts()) :

                        while (have_posts()) : the_post();
                            wpb_set_post_views(get_the_ID());

                            $articleImage = get_field('page_header_post_image', get_the_ID());
                            if ($articleImage) :
                                // Image variables.
                                $urlArticleImage = $articleImage['url'];
                                $altArticleImage = $articleImage['alt'];
                            else :
                                $urlArticleImage = get_template_directory_uri() . '/src/images/blank-image.svg';
                            endif;
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
                                            echo $cardPostDate
                                            ?>
                                        </li>

                                        <li class="single-news__author-item">
                                            <svg class="single-news__author-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.55999 6.02L9.47999 6.94L2.91999 13.5H1.99999V12.58L8.55999 6.02ZM12.16 0C11.91 0 11.65 0.1 11.46 0.29L9.62999 2.12L13.38 5.87L15.21 4.04C15.6 3.65 15.6 3.02 15.21 2.63L12.87 0.29C12.67 0.09 12.42 0 12.16 0ZM8.55999 3.19L-7.62939e-06 11.75V15.5H3.74999L12.31 6.94L8.55999 3.19Z" fill="#00C2CB" />
                                            </svg>
                                            <?php
                                            the_author();
                                            ?>
                                        </li>

                                        <li class="single-news__author-item">
                                            <svg class="single-news__author-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.99 0C4.47 0 0 4.48 0 10C0 15.52 4.47 20 9.99 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 9.99 0ZM10 18C5.58 18 2 14.42 2 10C2 5.58 5.58 2 10 2C14.42 2 18 5.58 18 10C18 14.42 14.42 18 10 18ZM10.5 5H9V11L14.25 14.15L15 12.92L10.5 10.25V5Z" fill="#00C2CB" />
                                            </svg>

                                            <?php
                                            echo $timeToRead = get_field('time_to_read', get_the_ID());

                                            ?>
                                            Mins
                                        </li>
                                    </ul>
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