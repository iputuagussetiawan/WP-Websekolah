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
        <?php
        if ($cardPostAddress != '' &&  $cardPostEventDate != '') :
        ?>
            <ul class="card-post__detail">
                <li class="card-post__detail-item">
                    <svg class="card-post__detail-icon" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 9H6V11H4V9ZM18 4V18C18 19.1 17.1 20 16 20H2C0.89 20 0 19.1 0 18L0.00999999 4C0.00999999 2.9 0.89 2 2 2H3V0H5V2H13V0H15V2H16C17.1 2 18 2.9 18 4ZM2 6H16V4H2V6ZM16 18V8H2V18H16ZM12 11H14V9H12V11ZM8 11H10V9H8V11Z" fill="#00C2CB" />
                    </svg>
                    <?= $cardPostEventDate; ?>
                </li>
                <li class="card-post__detail-item">
                    <svg class="card-post__detail-icon" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10C6.9 10 6 9.1 6 8C6 6.9 6.9 6 8 6C9.1 6 10 6.9 10 8C10 9.1 9.1 10 8 10ZM14 8.2C14 4.57 11.35 2 8 2C4.65 2 2 4.57 2 8.2C2 10.54 3.95 13.64 8 17.34C12.05 13.64 14 10.54 14 8.2ZM8 0C12.2 0 16 3.22 16 8.2C16 11.52 13.33 15.45 8 20C2.67 15.45 0 11.52 0 8.2C0 3.22 3.8 0 8 0Z" fill="#00C2CB" />
                    </svg>
                    <?= $cardPostAddress; ?>
                </li>
            </ul>
        <?php
        endif;
        ?>
    </div>
</div>