<? $data = db::arr_s("SELECT * FROM `projects` WHERE ID='$_GET[item_id]'"); ?>

<? if ($data == 'empty') {
    LocalRedirect('/en/projects');
} ?>


<section class="page__medagent">
    <div class="container">
        <div class="page__content">
            <div class="page__left">
                <div class="page__dadge"><?=$data['TITLE_TYPE']?></div>

                <h2><?= $data['TITLE_COMPANY'] ?><br /><?=$data['TITLE_LONG']?></h2>
                <div class="page__text">
                    <?= $data['TEXT'] ?>
                </div>

                <ul class="page__list">
                    <li>
                        <i class="uil uil-check"></i>
                        <?= $data['LIST1'] ?>
                    </li>
                    <li>
                        <i class="uil uil-check"></i>
                        <?= $data['LIST2'] ?>
                    </li>
                    <li>
                        <i class="uil uil-check"></i>
                        <?= $data['LIST3'] ?>
                    </li>
                </ul>

                <div class="page__link">
                    <a target="_blank" href="https://t.me/uybozoruz_bot">
                    <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'166']) as $portfolioTitle):?>
                        <button class="btn-primary page" id="send_page">
                        <?= $portfolioTitle['button'] ?>
                        </button>
                        <?endforeach?>
                    </a>
                </div>
            </div>
            <div class="page__right">
                <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="page__img">
                                <img alt="project photo" src="<?=$data['SCREENSHOT1']?>" alt="" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="page__img">
                                <img alt="project photo" src="<?=$data['SCREENSHOT2']?>" alt="" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="page__img">
                                <img alt="project photo" src="<?=$data['SCREENSHOT3']?>" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- page__content -->
    </div>
    <!-- container -->
</section>