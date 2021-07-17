<?php
/*
Template Name: Наша история
*/
?>

<?php
    get_header();
?>
<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('our_history-mainTitle') ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle"><?php the_field('our_history-title1') ?></div>
                <div class="aboutus__text"><?php the_field('our_history-descr1') ?></div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('our_history-foto1') ?>" alt="мир детства">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('our_history-foto2') ?>" alt="мир детства">
            </div>
            <div class="col-lg-6">
                <div class="subtitle"><?php the_field('our_history-title2') ?></div>
                <div class="aboutus__text"><?php the_field('our_history-descr2') ?></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle"><?php the_field('our_history-title3') ?></div>
                <div class="aboutus__text"><?php the_field('our_history-descr3') ?></div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('our_history-foto3') ?>" alt="мир детства">
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>