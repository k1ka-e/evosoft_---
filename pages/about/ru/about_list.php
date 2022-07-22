<article class="about__help">
    <div class="container">
    <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'181']) as $aboutHelp) : ?>
            <h1 class="about__help__title">
                <?= $aboutHelp['title1'] ?>
                <br class="dn-m" />
                <?= $aboutHelp['title2'] ?>
            </h1>

            <div class="about__help__content">
                <div class="about__help__left">
                    <div class="about__help__column">
                        <div class="column__discription">
                            <?= $aboutHelp['text1'] ?>
                        </div>

                        <div class="column__discription">
                            <?= $aboutHelp['text2'] ?>
                        </div>
                    </div>
                </div> <!-- about__help__left -->

                <div class="about__help__right">
                <a href="<?= '/' . $_SESSION['site_lang'] . '/contact' ?>">
                    <button type="button" class="header__btn">
                        <?= $aboutHelp['button'] ?>
                        <i class="arrow-long-right"></i>
                    </button>
                </a>
                </div>

            </div> <!-- about__help__content -->
    </div> <!-- container -->
</article>


<article class="about__advantages  wow animate__animated animate__fadeInUp">
    <div class="container">
        <h1 class="advantages__title">
        <?= $aboutHelp['title3'] ?> <br />
        <?= $aboutHelp['title4'] ?>
        </h1>

        <div class="advantages__columns">
            <div class="advantages__left">
                <div class="advantages__list">
                    <div class="advantages__list__item">
                        <div class="advantages__list__body">
                        <?= $aboutHelp['text3'] ?>
                        </div>
                    </div>
                    <div class="advantages__list__item">
                        <div class="advantages__list__body">
                        <?= $aboutHelp['text3'] ?>
                        </div>
                    </div>
                    <div class="advantages__list__item">
                        <div class="advantages__list__body">
                        <?= $aboutHelp['text3'] ?>
                        </div>
                    </div>
                    <div class="advantages__list__item">
                        <div class="advantages__list__body">
                        <?= $aboutHelp['text3'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advantages__right">
            <a href="<?= '/' . $_SESSION['site_lang'] . '/contact' ?>">
                <button type="button" class="header__btn">
                <?= $aboutHelp['button'] ?>
                    <i class="arrow-long-right"></i>
                </button>
            </a>
            </div>
        </div>

        <?endforeach?>
    </div>
</article>