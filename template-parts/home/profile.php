<section id="profile" class="profile">
    <div class="container">
        <div class="profile__wrapper">
            <div class="profile__item--title">
                <p class="overline--32 color-yellow"><?=get_field('profile_title');?></p>
                <h3><?=get_field('profile_subtitle');?></h3>
            </div>
            <div class="profile__item--description">
                <div class="profile__item--text">
                    <p class="body1"><?=get_field('profile_text1');?></p>
                    <p class="body1"><?=get_field('profile_text2');?></p>
                    <p class="body1"><?=get_field('profile_text3');?></p>
                </div>
                <div class="profile__item--photo">
                    <video class="img-responsive" src="<?=get_template_directory_uri();?>/assets/img/video/video_2025-02-17_10-44-25.mp4" autoplay loop muted></video>
                </div>
            </div>
            <div class="profile__item--description">
                <div class="profile__item--photo">
                    <picture>
                        <source srcset="<?=get_template_directory_uri();?>/assets/img/photo/profile_1.webp" type="image/webp">
                        <img class="img-responsive" src="<?=get_template_directory_uri();?>/assets/img/photo/profile_1.png" alt="profile photo" loading="lazy">
                    </picture>
                </div>

                <div class="profile__item--text">
                    <p class="body1"><?=get_field('profile_text4');?></p>
                    <p class="body1"><?=get_field('profile_text5');?></p>
                    <p class="body1"><?=get_field('profile_text6');?></p>
                </div>

            </div>
        </div>
    </div>
</section>