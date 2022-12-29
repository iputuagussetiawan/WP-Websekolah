<?php


if ($args['card-event-date']) {
    $cardeventDate = $args['card-event-date'];
}
if ($args['card-event-image']) {
    $cardeventImage = $args['card-event-image'];
}
if ($args['card-event-title']) {
    $cardeventTitle = $args['card-event-title'];
}
if ($args['card-event-description']) {
    $cardeventDescription = $args['card-event-description'];
}
if ($args['card-event-date']) {
    $cardeventEventDate = $args['card-event-date'];
}
if ($args['card-event-address']) {
    $cardeventAddress = $args['card-event-address'];
}
if ($args['card-event-day']) {
    $cardPostEventDay = $args['card-event-day'];
}
if ($args['card-event-month']) {
    $cardPostEventMonth = $args['card-event-month'];
}
if ($args['card-event-year']) {
    $cardPostEventYear = $args['card-event-year'];
}

?>
<a href="<?= the_permalink(); ?>" class="card-events">
    <div class="card-events__date-container">
        <span class="card-events__day"><?= $cardPostEventDay; ?></span>
        <span class="card-events__month"><?= $cardPostEventMonth; ?></span>
    </div>
    <div class="card-events__info-container">
        <h3 class="card-events__title"><?= $cardeventTitle; ?></h3>
        <p class="card-events__description">
            <?= $cardeventDescription; ?></p>
        <ul class="card-events__author">
            <li class="card-events__author-item">
                <div class="card-events__author-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                    </svg>
                    <?php echo get_the_author(); ?>
                </div>
            </li>
            <li class="card-events__author-item">
                <div class="card-events__author-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                    </svg>
                    <?= $cardeventEventDate; ?>
                </div>
            </li>
        </ul>
    </div>
    <div class="card-events__image-container">
        <img class="card-events__image" src="<?= $cardeventImage; ?>" alt="<?= $cardeventTitle; ?>">
    </div>
</a>