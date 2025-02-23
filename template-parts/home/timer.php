<section class="timer">
    <div class="container">
        <div class="timer__header">
            <p class="overline--32 color-yellow"><?=get_field('timer_title');?></p>
            <div class="timer__header--title">
                <h3><?=get_field('timer_subtitle');?></h3>
            </div>
            <p class="body1">25 april 2024</p>
            <p class="body1">🇺🇸 United States, New Castle Motorsports Park</p>
        </div>
        <div class="timer__image">
            <picture>
                <source srcset="<?=get_template_directory_uri();?>/assets/img/photo/timer_1.webp" type="image/webp">
                <img class="img-responsive" src="img/photo/timer_1.png" alt="timer" loading="lazy">
            </picture>
        </div>
        <div class="timer__countdown">
            <div class="timer__timer-block">
                <span class="subtitle1 color-gray">Month</span>
                <h2 class="color-red" id="months"></h2>
            </div>
            <span class="timer__separator color-red">:</span>
            <div class="timer__timer-block">
                <span class="subtitle1 color-gray">Day</span>
                <h2 class="color-red" id="days"></h2>
            </div>
            <span class="timer__separator color-red">:</span>
            <div class="timer__timer-block">
                <span class="subtitle1 color-gray">Hours</span>
                <h2 class="color-red" id="hours"></h2>
            </div>
            <span class="timer__separator color-red">:</span>
            <div class="timer__timer-block">
                <span class="subtitle1 color-gray">Minutes</span>
                <h2 class="color-red" id="minutes"></h2>
            </div>
            <span class="timer__separator color-red">:</span>
            <div class="timer__timer-block seconds-block">
                <span class="subtitle1 color-gray">Seconds</span>
                <h2 class="color-red" id="seconds"></h2>
            </div>
        </div>
        <div class="timer__buttons">
            <button class="button">Add to calendar</button>
        </div>
    </div>
</section>