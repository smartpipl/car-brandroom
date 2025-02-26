<?php
/**
 * The template for Completed Track pages
 */

get_header(); ?>

<main>
    <section class="track-page">
        <div class="container">
            <div class="track-page__description">
                <div>
                    <p class="overline--32 color-yellow">Championships</p>
                    <h3><?=get_the_title();?></h3>
                </div>
                <div>
                    <p class="body1 color-gray">One of the most anticipated events of the season, bringing together the world's best kart racers at the legendary British track. This track, known for its high-speed sections and technical cornering, is a real test for drivers' skills.</p>
                    <p class="body1 color-gray">In 2024, the competition will be fiercely contested, as the participants will compete not only for victory in a single race, but also for important points in the overall standings. Race fans will be able to watch spectacular overtaking, strategic decisions and unpredictable turns of events.</p>
                </div>
                <div class="track-page__info">
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Driver:
                            </p>
                            <p class="body1--700">
                                Markas Silkunas
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Track:
                            </p>
                            <p class="body1--700">
                                New Castle Motorsports Park
                            </p>
                        </div>
                    </div>
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Country:
                            </p>
                            <p class="body1--700">
                                🇱🇹 Lithuania
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Track:
                            </p>
                            <p class="body1--700">
                                New Castle Motorsports Park
                            </p>
                        </div>
                    </div>
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Best time:
                            </p>
                            <p class="body1--700">
                                00:12:11
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Awards:
                            </p>
                            <p class="body1--700">
                                🥇’24 1st place
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="completed-track__content">
                <img class="img-responsive" src="<?=get_template_directory_uri();?>/assets/img/photo/race-track-1.png" alt="track" loading="lazy">
                <a  href="/pages/tracks.html" class=" button">About track</a>
            </div>
        </div>
        <div class="container">
            <div class="container-header">
                <p class="overline--32 color-yellow">Media content</p>
                <h3>Gallery of the best moments</h3>
            </div>
            <div class="media-container">
                <div class="media-container__item">
                    <img src="<?=get_template_directory_uri();?>/assets/img/social_photo/img_1.png" alt="photo" loading="lazy">
                </div>
                <div class="media-container__item">
                    <img src="<?=get_template_directory_uri();?>/assets/img/social_photo/img_2.png" alt="photo" loading="lazy">
                </div>
                <div class="media-container__item">
                    <img src="<?=get_template_directory_uri();?>/assets/img/social_photo/img_3.png" alt="photo" loading="lazy">
                </div>
                <div class="media-container__item">
                    <img src="<?=get_template_directory_uri();?>/assets/img/social_photo/img_4.png" alt="photo" loading="lazy">
                </div>
                <div class="media-container__item">
                    <img src="<?=get_template_directory_uri();?>/assets/img/social_photo/img_5.png" alt="photo" loading="lazy">
                </div>
                <div class="media-container__item">
                    <img src="<?=get_template_directory_uri();?>/assets/img/social_photo/img_6.png" alt="photo" loading="lazy">
                </div>
                <div class="media-container__item">
                    <img src="<?=get_template_directory_uri();?>/assets/img/social_photo/img_7.png" alt="photo" loading="lazy">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();