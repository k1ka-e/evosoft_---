<!-- PORTFOLIO -->
<article class="portfolio wow animate__animated animate__fadeInUp">
    <div class="container">
    <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'151']) as $portfolioTitle):?>
        <h1 class="reviews__title">
        <?= $portfolioTitle['title'] ?>
        </h1>
        <?endforeach?>


<? //print_r($data)?>

        <!-- Swiper -->
        <div class="portfolio__content mySwiper2">
            <div class="swiper-wrapper">
            <? foreach (db::arr("SELECT * FROM `projects` WHERE LANG='uz' ORDER BY SORT ASC") as $info):?>
                <div class="portfolio__boxs swiper-slide">
                    <div class="portfolio__block">
                    <a href="/uz/projects/<?=$info['ID']?>">
                            <img class="portfolio__img" src="<?= $info['LOGO'] ?>" />
                            <div class="portfolio__name"><?= $info['TITLE_SHORT'] ?></div>
                            <div class="portfolio__text">
                            <?= $info['TEXT_SHORT'] ?>
                            </div>
                        </a>
                    </div>
                </div>
                <?endforeach?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- container -->
</article>