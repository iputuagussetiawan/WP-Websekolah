<?php
/*
    Template Name: Profile
*/
?>
<?php get_header(); ?>
<main>
    <section class="page-header d-flex align-items-end justify-content-center">
        <img src="<?php echo get_template_directory_uri() . '/src/images/about-us-banner.jpg' ?> " alt="profile" class="page-header__image parallax" />
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1 class="page-header__title" data-aos="fade-up" data-aos-duration="1000">
                        Tentang Kami
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us">
        <div class="container">
            <div class="row g-0 box-shadow about-us__inner">
                <div class="col-md-5 bg-grey">
                    <div class="about-us__info-container">
                        <h2 class="about-us__title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            Empower people to change the world
                        </h2>
                        <div class="about-us__info-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                            <p class="about-us__info">
                                We are a global firm of approximately 27,600
                                diverse, passionate, and exceptional people
                                driven to excel, do right, and realize positive
                                change in everything we do.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-us__description-container">
                        <p class="about-us__description aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            We bring bold thinking and a desire to be the best
                            in our work in consulting, analytics, digital
                            solutions, engineering, and cyber, and with
                            industries ranging from defense to health to energy
                            to international development.
                        </p>
                        <p class="about-us__description aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                            We celebrate and value diversity in all its forms;
                            it’s something we truly value as a multicultural
                            community of problem solvers. We believe in
                            corporate and individual citizenship that make our
                            communities better places for all.
                        </p>
                        <p class="about-us__description aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                            We have one guiding purpose—to empower people to
                            change the world. Our founder, Edwin Booz said it
                            best: “Start with character… and fear not the
                            future.” We bring a ferocious integrity to not only
                            train our clients to tackle the problems they face
                            today, but to help them change the status quo for
                            tomorrow. Each day, we imagine, invent, and deliver
                            new ways to better serve our employees, our clients,
                            and the world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    get_template_part('template-parts/sections/home', 'programstudi');
    get_template_part('template-parts/sections/home', 'testimonial');
    ?>
    <section class="guru section-padding">
        <div class="container">
            <div class="section-title-wrapper">
                <p class="section-subtitle">Data Guru</p>
                <h2 class="section-title">Guru Profesional Kami</h2>
            </div>
            <div class="guru__grid">

                <?php
                for ($i = 0; $i < 8; $i++) {
                ?>
                    <div class="card-people">
                        <div class="card-people__image-container">
                            <img class="card-people__image" src="<?php echo get_template_directory_uri() . '/src/images/people-1.jpg' ?>" alt="Ralph W. Shrader, Ph.D.">
                        </div>
                        <div class="card-people__info-container">
                            <h4 class="card-people__name">Ralph W. Shrader, Ph.D.</h4>
                            <p class="card-people__position">Chairman of the Board</p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>