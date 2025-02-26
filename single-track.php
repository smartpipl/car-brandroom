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
                    <p class="overline--32 color-yellow">Track</p>
                    <h3>Kartódromo Internacional Ciudad de Buenos Aires</h3>
                </div>
                <div>
                    <p class="body1 color-gray">One of the key tracks in South America, part of the Autódromo Juan y Oscar Gálvez.
                        With a length of 1.1 km,
                        the track combines fast straights and technical turns, which makes it a challenge for pilots.</p>
                    <p class="body1 color-gray">This karting circuit has trained many Argentine champions and hosts the Rotax Max
                        Challenge and Campeonato
                        Argentino de Karting competitions. Its proximity to Buenos Aires makes it popular among fans. Future
                        champions are born here, and every race is a real battle for victory.</p>
                </div>
                <div class="track-page__info">
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Web Site:
                            </p>
                            <p class="body1--700">
                                clubargentinodekart.com.ar
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Addres:
                            </p>
                            <p class="body1--700">
                                Av. Gral. Paz 17400, B1439 Buenos Aires, Argentina,
                            </p>
                        </div>
                    </div>
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Circuit Length:
                            </p>
                            <p class="body1--700">
                                900m mt
                            </p>
                        </div>
                        <div>
                            <p class="body1 color-gray">
                                Circuit Direction:
                            </p>
                            <p class="body1--700">
                                Clockwise
                            </p>
                        </div>
                    </div>
                    <div class="track-page__info--item">
                        <div>
                            <p class="body1 color-gray">
                                Pole Direction:
                            </p>
                            <p class="body1--700">
                                Right
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="track-page__gallery">
                <div class="track-page__gallery--img">
                    <img class="img-responsive" src="<?=get_template_directory_uri();?>/assets/img/photo/race-track-1.png" alt="track" loading="lazy">
                </div>
                <div class="track-page__gallery--next-track">
                    <div class="race-card">
                        <div class="race-card__header">
                            <h6>IAME Warrior final Championship 2025</h6>
                            <p class="body1">🇮🇹 Italy</p>
                        </div>
                        <div class="race-card__content">
                            <div>
                                <p class="body1">Driver:</p>
                                <p class="subtitle1">Vanesa Silkunaite</p>
                            </div>
                            <span class="race-card__separator"></span>
                            <div>
                                <p class="body1">Track:</p>
                                <p class="subtitle1">New Castle Motorsports Park</p>
                            </div>
                            <a href="tracks.html" class="race-card__button button secondary secondary__icon">
                                <img src="<?=get_template_directory_uri();?>/assets/img/icons/action_icon/arrow-right.svg" alt="arrow" loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="race-card">
                        <div class="race-card__header">
                            <h6>IAME Warrior final Championship 2025</h6>
                            <p class="body1">🇮🇹 Italy</p>
                        </div>
                        <div class="race-card__content">
                            <div>
                                <p class="body1">Driver:</p>
                                <p class="subtitle1">Vanesa Silkunaite</p>
                            </div>
                            <span class="race-card__separator"></span>
                            <div>
                                <p class="body1">Track:</p>
                                <p class="subtitle1">New Castle Motorsports Park</p>
                            </div>
                            <a href="tracks.html" class="race-card__button button secondary secondary__icon">
                                <img src="<?=get_template_directory_uri();?>/assets/img/icons/action_icon/arrow-right.svg" alt="arrow" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>  
</main>

<?php get_footer();