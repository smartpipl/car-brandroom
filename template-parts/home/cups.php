<section class="cups">
    <div class="container flex__center">
        <div class="container-header">
            <p class="overline--32 color-yellow"><?=get_field('cups_title');?></p>
            <h3><?=get_field('cups_title_2');?></h3>
        </div>
        <div class="container-unfolding">
            <div class="opening-container" id="cups-container" style="--max-height: 492px;"><?php
                $cups = get_field('cups_list');
                foreach($cups as $cup){
                    echo '<div class="cups__cup-item">
                        <img src="'.$cup['img_1'].'" alt="">
                        <div class="cups__cup-item--content">
                            <img src="'.$cup['img_2'].'" alt="">
                            <p class="subtitle1">'.$cup['title'].'</p>
                            <p class="body1">'.$cup['cup_year'].'</p>
                        </div>
                    </div>';
                }
            ?></div>
            <?php if(count($cups)>5) { ?>
                <div>
                    <button id="view-cup" class="button secondary"><?=get_field('cups_view_all_btn');?></button>
                </div>
            <?php } ?>
        </div>
    </div>
</section>