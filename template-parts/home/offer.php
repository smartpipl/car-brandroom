<section class="offer">
    <div class="container">
        <div class="offer__wrapper">
            <div class="offer__description">
                <div class="offer__description-text">
                    <h3><?=get_field('offer_title');?></h3>
                    <p class="body1"><?=get_field('offer_text');?></p>
                    <div>
                        <p class="subtitle1"><?=get_field('offer_subtitle');?></p>
                        <?=get_field('offer_text_2');?>
                    </div>
                    <p class="subtitle1"><?=get_field('offer_text_3');?></p>
                </div>
                <div>
                    <button class="button"><?=get_field('offer_text_4');?></button>
                </div>
            </div>
            <div class="offer__image">
                <picture>
                    <source srcset="<?=get_template_directory_uri();?>/assets/img/photo/kart_1.webp" type="image/webp">
                    <img class="offer__image--img" src="<?=get_template_directory_uri();?>/assets/img/photo/kart_1.png" alt="kart_1" loading="lazy">
                </picture>
            </div>
        </div>
    </div>
</section>