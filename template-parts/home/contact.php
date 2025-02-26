<section id="contact" class="contact">
    <div class="container">
        <div class="contact__wrapper">
            <div class="contact__description">
                <p class="overline--32 color-yellow"><?=get_field('contact_title');?></p>
                <h3><?=get_field('contact_subtitle');?></h3>
                <h6 class="color-green"><?=get_field('contact_subtitle_2');?></h6>
                <p class="body1"><?=get_field('contact_text');?></p>
                <p style="font-weight: 700;"><?=get_field('contact_text_2');?></p>
                <div class="buttons-group-icon">
                    <a class="button secondary secondary__icon" href="#">
                        <?=get_template_part('assets/svg/whatsapp-btn');?>
                    </a>
                    <a class="button secondary secondary__icon" href="#">
                        <?=get_template_part('assets/svg/viber-btn');?>
                    </a>
                    <a class="button secondary secondary__icon" href="#">
                        <?=get_template_part('assets/svg/telegram-btn');?>
                    </a>
                </div>
                <div class="contact__support">
                    <div>
                        <h6 class="color-red"><?=get_field('contact_text_3');?></h6>
                        <p class="body1"><?=get_field('contact_text_4');?></p>
                        <p class="body1--700"><?=get_field('contact_text_5');?></p>
                    </div>
                    <a href="https://contribee.com/silkunasracing" target="_blank" class="contact__support-img">
                        <img class="img-responsive" src="<?=get_field('contact_qr_code');?>" alt="QR Code" loading="lazy">
                    </a>

                </div>
            </div>

            <div class="contact__form-wrapper">
                <h6><?=get_field('contact_form_title');?></h6>
                <?=do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');?>
            </div>
        </div>
    </div>
</section>