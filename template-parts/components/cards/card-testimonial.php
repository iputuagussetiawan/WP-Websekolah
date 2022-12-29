<?php
if ($args['card-testimonial-image']) {
    $cardPostImage = $args['card-testimonial-image'];
}
if ($args['card-testimonial-title']) {
    $cardPostTitle = $args['card-testimonial-title'];
}
if ($args['card-testimonial-mesage']) {
    $cardPostDescription = $args['card-testimonial-mesage'];
}

if ($args['card-testimonial-profesi']) {
    $cardPostProfesi = $args['card-testimonial-profesi'];
}
?>
<div class="card-testimonial">
    <svg class="card-testimonial__icon" xmlns="http://www.w3.org/2000/svg" width="91.955" height="79.441" viewBox="0 0 91.955 79.441">
        <g transform="translate(0 -34.571)" opacity="0.2">
            <g transform="translate(0 34.571)">
                <path d="M.02,92.122a21.948,21.948,0,1,0,14.8-20.693c4.926-28.252,26.957-46.472,6.534-31.477C-1.292,56.58,0,91.453.021,92.092.021,92.1.02,92.111.02,92.122Z" transform="translate(0 -34.571)" fill="#8496b0" />
                <path d="M266.08,92.122a21.948,21.948,0,1,0,14.8-20.693c4.926-28.252,26.957-46.472,6.534-31.477-22.646,16.628-21.359,51.5-21.333,52.14C266.081,92.1,266.08,92.111,266.08,92.122Z" transform="translate(-217.904 -34.571)" fill="#8496b0" />
            </g>
        </g>
    </svg>
    <div class="card-testimonial__msg-container">
        <?= $cardPostDescription; ?>
    </div>
    <div class="card-testimonial__info-container">
        <div class="card-testimonial__user-image-container">
            <img class="card-testimonial__user-image" src="<?= $cardPostImage; ?>" alt="<?= $cardPostTitle; ?>">
        </div>
        <div class="card-testimonial__user-info">
            <h4 class="card-testimonial__user-name">
                <?= $cardPostTitle; ?>
            </h4>
            <p class="card-testimonial__position">
                <?= $cardPostProfesi; ?>
            </p>
        </div>
    </div>
</div>