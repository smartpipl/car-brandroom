<section id="partners" class="partners">
    <div class="container">
        <div class="container-header">
            <p class="overline--32 color-yellow"><?=get_field('partners_title');?></p>
            <h3><?=get_field('partners_title_2');?></h3>
        </div>
        <div class="container-unfolding">
            <div class="opening-container" id="partners-container" style="--max-height: 364px;"><?php
                $partners = get_field('partners_list');
                foreach($partners as $partner){
                    echo '<div class="partners__item">
                        <div class="partners__item--logo"><img src="'.$partner['image'].'"></div>
                        <div class="partners__item--description">
                            <p class="body2">'.get_field('partners_your_promo').'</p>
                            <div class="copy-wrapper w-100">
                                <label class="w-100" style="position: relative;">
                                    <input class="input" type="text" value="'.$partner['title'].'" readonly>';
                                    echo get_template_part('assets/svg/copy-btn');
                                echo '</label>
                            </div>
                        </div>
                    </div>';
                }
                ?><div class="partners__item">
                    <div class="partners__item--logo">
                        <?=get_template_part('assets/svg/partner-logo1');?>
                    </div>
                    <div class="partners__item--description">
                        <p class="body2"><?=get_field('partners_your_promo');?></p>
                        <div class="copy-wrapper w-100">
                            <label class="w-100" style="position: relative;">
                                <input class="input" type="text" value="PromoCode10" readonly>
                                <?=get_template_part('assets/svg/copy-btn');?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__item--logo">
                        <?=get_template_part('assets/svg/partner-logo2');?>
                    </div>
                    <div class="partners__item--description">
                        <p class="body2"><?=get_field('partners_your_promo');?></p>
                        <div class="copy-wrapper w-100">
                            <label class="w-100" style="position: relative;">
                                <input class="input" type="text" value="PromoCode10" readonly>
                                <?=get_template_part('assets/svg/copy-btn');?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__item--logo">
                        <?=get_template_part('assets/svg/partner-logo3');?>
                    </div>
                    <div class="partners__item--description">
                        <p class="body2"><?=get_field('partners_your_promo');?></p>
                        <div class="copy-wrapper w-100">
                            <label class="w-100" style="position: relative;">
                                <input class="input" type="text" value="PromoCode10" readonly>
                                <?=get_template_part('assets/svg/copy-btn');?>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__item--logo">
                        <?=get_template_part('assets/svg/partner-logo4');?>
                    </div>
                    <div class="partners__item--description">
                        <p class="body2"><?=get_field('partners_your_promo');?></p>
                        <div class="copy-wrapper w-100">
                            <label class="w-100" style="position: relative;">
                                <input class="input" type="text" value="PromoCode10" readonly>
                                <?=get_template_part('assets/svg/copy-btn');?>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button id="view-partner" class="button secondary"><?=get_field('partners_more_discounts');?></button>
            </div>
        </div>
    </div>
</section>