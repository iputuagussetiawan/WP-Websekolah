<div class="swiper-slide">
    <div class="banner__grid">
        <div class="banner__info-container">
            <ul class="banner__categories element">
                <?php
                $icategories = 1;
                $categories = get_the_category($post->ID);
                foreach ($categories as $cat) :
                    if ($icategories <= 5) :
                ?>
                        <li class="banner__categories-item">
                            <a href="<?php echo get_category_link($cat->term_id); ?>" class="banner__categories-link"><?php echo $cat->name; ?></a>
                        </li>
                <?php
                    endif;
                    $icategories++;
                endforeach;
                ?>
            </ul>
            <h2 class="banner__title element"><?php echo wp_trim_words(get_the_title(), 10); ?></h2>
            <ul class="banner__post-author element">
                <li class="banner__post-author-item">
                    <div class="banner__post-author-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <?php echo get_the_author(); ?>
                    </div>
                </li>
                <li class="banner__post-author-item">
                    <div class="banner__post-author-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        <?php echo get_the_date('d/j/Y'); ?>
                    </div>
                </li>
                <li class="banner__post-author-item">
                    <a href="#" class="banner__post-author-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>

                        <?php echo wpb_get_post_views(get_the_ID()); ?>
                    </a>
                </li>
            </ul>
            <p class="banner__description element">
                <?php if (has_excerpt()) {
                    echo get_the_excerpt();
                } else {
                    echo wp_trim_words(get_the_content(), 25);
                } ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="banner__read-more element">Read More</a>
        </div>
        <div class="banner__image-container">
            <?php if (has_post_thumbnail()) : ?>
                <img class="banner__image" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
            <?php else : ?>
                <img class="banner__image" src="<?php echo get_template_directory_uri() . '/src/images/posts/blank-post.svg'; ?>" alt="<?php the_title() ?>">
            <?php endif; ?>
        </div>
    </div>
</div>