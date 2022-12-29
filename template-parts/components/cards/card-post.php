<?php


if ($args['card-post-date']) {
    $cardPostDate = $args['card-post-date'];
}
if ($args['card-post-image']) {
    $cardPostImage = $args['card-post-image'];
}
if ($args['card-post-title']) {
    $cardPostTitle = $args['card-post-title'];
}
if ($args['card-post-description']) {
    $cardPostDescription = $args['card-post-description'];
}
if ($args['card-post-timetoread']) {
    $cardPostTimetoread = $args['card-post-timetoread'];
}

if ($args['card-post-event-date']) {
    $cardPostEventDate = $args['card-post-event-date'];
}

if ($args['card-post-address']) {
    $cardPostAddress = $args['card-post-address'];
}

?>
<div class="card-post">
    <a href="<?php the_permalink() ?>" class="card-post__image-container">
        <img src="<?php echo  $cardPostImage ?>" alt="<?php echo $cardPostTitle; ?>" class="card-post__image">
    </a>
    <div class="card-post__info-container">
        <?php
        if ($cardPostDate) :
        ?>
            <div class="card-post__item-container">

                <p class="card-post__date"><?php echo $cardPostDate; ?></p>

                <?php
                if ($cardPostTimetoread) :
                ?>
                    <p class="card-post__read-duration"><?php echo $cardPostTimetoread ?> Mins</p>
                <?php
                endif;
                ?>
            </div>
        <?php
        endif;
        ?>
        <a href="<?php the_permalink() ?>">
            <h4 class="card-post__title"><?php echo $cardPostTitle ?></h4>
        </a>
        <?php
        if ($cardPostDescription) :
        ?>
            <div class="card-post__content">
                <?php echo $cardPostDescription ?>
            </div>
        <?php
        endif;
        ?>

        <ul class="card-post__author">
            <li class="card-post__author-item">
                <div class="card-post__author-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <?php echo get_the_author(); ?>
                </div>
            </li>
            <li class="card-post__author-item">
                <div class="card-post__author-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>
                    <?php echo get_the_date('d M Y'); ?>
                </div>
            </li>
            <li class="card-post__author-item">
                <a href="#" class="card-post__author-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                    <?php echo wpb_get_post_views(get_the_ID()); ?>
                </a>
            </li>
        </ul>
    </div>

</div>