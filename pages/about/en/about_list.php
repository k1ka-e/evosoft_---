<article class="about__help">
    <div class="container">
        <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '176']) as $aboutHelp) : ?>
            <h1 class="about__help__title">
                <?= $aboutHelp['title'] ?>
                <br class="dn-m" />
                <?= $aboutHelp['title2'] ?>
            </h1>

            <div class="about__help__content">
                <div class="about__help__left">
                    <div class="about__help__column">
                        <div class="column__discription">
                            <?= $aboutHelp['discription1'] ?>
                        </div>

                        <div class="column__discription">
                            <?= $aboutHelp['discription2'] ?>
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
        <? endforeach ?>

    </div> <!-- container -->
</article>


<article class="about__advantages  wow animate__animated animate__fadeInUp">
    <div class="container">
        <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '177']) as $aboutAdvantages) : ?>
            <h1 class="advantages__title">
                <?= $aboutAdvantages['title'] ?> <br />
                <?= $aboutAdvantages['title1'] ?>
            </h1>

            <div class="advantages__columns">
                <div class="advantages__left">
                    <div class="advantages__list">
                        <div class="advantages__list__item">
                            <div class="advantages__list__body">
                                <?= $aboutAdvantages['text'] ?>
                            </div>
                        </div>
                        <div class="advantages__list__item">
                            <div class="advantages__list__body">
                                <?= $aboutAdvantages['text'] ?>
                            </div>
                        </div>
                        <div class="advantages__list__item">
                            <div class="advantages__list__body">
                                <?= $aboutAdvantages['text'] ?>
                            </div>
                        </div>
                        <div class="advantages__list__item">
                            <div class="advantages__list__body">
                                <?= $aboutAdvantages['text'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advantages__right">
                <a href="<?= '/' . $_SESSION['site_lang'] . '/contact' ?>">
                    <button type="button" class="header__btn">
                        <?= $aboutAdvantages['button'] ?>
                        <i class="arrow-long-right"></i>
                    </button>
                </a>
                </div>
            </div>

        <? endforeach ?>
    </div>
</article>