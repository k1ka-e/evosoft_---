<section class="portfolio__html">
<div class="container">
    <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'166']) as $portfolioTitle):?>
        <h1 class="reviews__title">
        <?= $portfolioTitle['name'] ?>
        </h1>
        <?endforeach?>

        <!-- Swiper -->
        <div class="portfolio__content mySwiper2">
            <div class="swiper-wrapper">
            <? foreach (db::arr("SELECT * FROM `projects` WHERE LANG='en' ORDER BY SORT ASC") as $info):?>
                <div class="portfolio__boxs swiper-slide">
                    <div class="portfolio__block">
                    <a href="/en/projects/<?=$info['ID']?>">
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
</section>


