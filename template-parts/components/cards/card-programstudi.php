<?php
if ($args['card-programstudi-image']) {
    $cardPostImage = $args['card-programstudi-image'];
}
if ($args['card-programstudi-title']) {
    $cardPostTitle = $args['card-programstudi-title'];
}
if ($args['card-programstudi-description']) {
    $cardPostDescription = $args['card-programstudi-description'];
}
?>
<div class="card-programstudi">
    <a href="<?php the_permalink() ?>" class="card-programstudi__image-container">
        <img src="<?php echo  $cardPostImage ?>" alt="<?php echo $cardPostTitle; ?>" class="card-programstudi__image">
    </a>
    <div class="card-programstudi__info-container">
        <a href="<?php the_permalink() ?>">
            <h4 class="card-programstudi__title"><?php echo $cardPostTitle ?></h4>
        </a>
        <?php
        if ($cardPostDescription) :
        ?>
            <div class="card-programstudi__content">
                <?php echo $cardPostDescription ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>