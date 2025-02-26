<?php
/**
 * The template for Completed Track pages
 */

get_header(); ?>

<style>
    .page-content{
        color: #7f7f7f;
        font-size: 1rem;
        line-height: 1.5rem;
        font-weight: 400;
    }
</style>

<main>
    <section class="track-page">
        <div class="container">
            <div class="track-page__description">
                <div>
                    <p class="overline--32 color-yellow">Championships</p>
                    <h3><?=get_the_title();?></h3>
                </div>
                <div class="page-content">
                    <?=get_the_content();?>
                </div>
                <div class="track-page__info">
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Driver:
                            </p>
                            <p class="body1--700">
                                <?=get_field('race_driver');?>
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Track:
                            </p>
                            <p class="body1--700">
                                <?=get_field('race_track');?>
                            </p>
                        </div>
                    </div>
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Country:
                            </p>
                            <p class="body1--700">
                                <?=get_field('race_country');?>
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Track:
                            </p>
                            <p class="body1--700">
                                <?=get_field('race_track_2');?>
                            </p>
                        </div>
                    </div>
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Best time:
                            </p>
                            <p class="body1--700">
                                <?=get_field('race_best_time');?>
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Awards:
                            </p>
                            <p class="body1--700">
                                <?=get_field('race_awards');?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="completed-track__content">
                <img class="img-responsive" src="<?=get_field('race_image');?>" alt="track" loading="lazy">
                <a href="<?=get_permalink(get_field('race_track_link'));?>" class=" button">About track</a>
            </div>
        </div>
        <div class="container">
            <div class="container-header">
                <p class="overline--32 color-yellow">Media content</p>
                <h3>Gallery of the best moments</h3>
            </div>
            <div class="media-container"><?php
                $race_images = get_field('race_images');
                foreach($race_images as $img){
                    echo ' <div class="media-container__item">
                        <img src="'.$img.'" alt="photo" loading="lazy">
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer();