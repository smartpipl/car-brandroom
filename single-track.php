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
                    <p class="overline--32 color-yellow">Track</p>
                    <h3><?=get_the_title();?></h3>
                </div>
                <div>
                    <?=get_the_content();?>
                </div>
                <div class="track-page__info">
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Web Site:
                            </p>
                            <p class="body1--700">
                                <a href="<?=get_field('track_web_site');?>" target="_blank">
                                    <?=get_field('track_web_site');?>
                                </a>
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Addres:
                            </p>
                            <p class="body1--700">
                                <?=get_field('track_address');?>
                            </p>
                        </div>
                    </div>
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Circuit Length:
                            </p>
                            <p class="body1--700">
                                <?=get_field('track_circuit_length');?>
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Circuit Direction:
                            </p>
                            <p class="body1--700">
                                <?=get_field('track_circuit_direction');?>
                            </p>
                        </div>
                    </div>
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Pole Direction:
                            </p>
                            <p class="body1--700">
                                <?=get_field('track_pole_direction');?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="track-page__gallery">
                <div class="track-page__gallery--img">
                    <img class="img-responsive" src="<?=get_field('track_image');?>" alt="track" loading="lazy">
                </div>
                <div class="track-page__gallery--next-track"><?php
                    $track_races = get_field('track_completed_races');
                    foreach($track_races as $race){
                        $race_id = $race['race'];
                        echo '<div class="race-card">
                            <div class="race-card__header">
                                <h6>'.get_the_title($race_id).'</h6>
                                <p class="body1">'.get_field('race_country',$race_id).'</p>
                            </div>
                            <div class="race-card__content">
                                <div>
                                    <p class="body1">Driver:</p>
                                    <p class="subtitle1">'.get_field('race_driver',$race_id).'</p>
                                </div>
                                <span class="race-card__separator"></span>
                                <div>
                                    <p class="body1">Track:</p>
                                    <p class="subtitle1">'.get_field('race_track',$race_id).'</p>
                                </div>
                                <a href="'.get_permalink($race_id).'" class="race-card__button button secondary secondary__icon">
                                    <img src="'.get_template_directory_uri().'/assets/img/icons/action_icon/arrow-right.svg" alt="arrow" loading="lazy">
                                </a>
                            </div>
                        </div>';
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>  
</main>

<?php get_footer();