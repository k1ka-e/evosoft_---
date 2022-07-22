<!-- HEADER -->
<header>
    <div class="container">
        <div class="header__content ">
            <div class="header__item header__left">
                <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '160']) as $main) : ?>
                    <h2 class="header__subtitle"><?= $main['banner'] ?></h2>
                    <h4 class="header__title">
                        <?= $main['text'] ?>
                    </h4>



                    <a href="<?= '/' . $_SESSION['site_lang'] . '/contact' ?>">
                    <button type="button" class="header__btn">
                        <?= $main['button1'] ?> <br />
                        <i class="arrow-long-right"></i>
                    </button>
                    </a>
                <? endforeach ?>
            </div>

            <div class="header__item canvas__item">
                <canvas id="canvasOne" width="550px" height="550px">
                    Your browser does not support HTML5 canvas.
                </canvas>
            </div>
        </div>
        <!-- header__content -->
    </div>
    <!-- container -->
</header>


<!-- ABOUT -->
<article class="about wow animate__animated animate__fadeInUp">
    <div class="container">
        <div class="about__content1">
            <div class="line__top"></div>
            <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '161']) as $about) : ?>
                <h1 class="about__subtitle">
                    <?= $about['title_badge'] ?>
                </h1>
                <div class="line__bottom"></div>
        </div>

        <div class="about__content2">
            <div class="about__left">
                <h1 class="about__title"><?= $about['title_main'] ?></h1>
                <h2>
                    <?= $about['text'] ?>
                </h2>

                <div class="about__link">
                    <h1><?= $about['follow'] ?></h1>
                    <div class="links">
                        <a href="https://t.me/evosoft_solutions" class="link" target="_blank">
                            <i class="uil uil-telegram"></i>
                        </a>

                        <a href="https://www.facebook.com/evosoft.solutions/" class="link" target="_blank">
                            <i class="uil uil-facebook-f"></i>
                        </a>

                        <a href="https://www.instagram.com/evosoft.solutions/" class="link" target="_blank">
                            <i class="uil uil-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="about__right ">
                <a href="<?= '/' . $_SESSION['site_lang'] . '/contact' ?>">
                    <button type="button" class="header__btn about__btn">
                        <?= $about['button1'] ?>
                        <i class="arrow-long-right"></i>
                    </button>
                </a>
            </div>
        <? endforeach ?>
        </div>
        <!-- about__containt2 -->
    </div>
    <!-- container -->
</article>

<!-- REVIEWS -->
<section class="reviews wow animate__animated animate__fadeInUp">
    <div class="container">
        <div class="reviews__content">
            <div class="reviews__head">
                <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '162']) as $reviews) : ?>
                    <h1 class="reviews__title wow animate__animated animate__fadeIn">
                        <?= $reviews['title_dange'] ?>
                    </h1>

                    <div class="reviews__google__logo">
                        <img width="150px" alt="logo google" src="<?= $reviews['img'] ?>" />
                    </div>

                    <h1 class="reviews__exellent"><?= $reviews['title'] ?></h1>
                <? endforeach ?>
                <div class="reviews__star">
                    <i class="fas fa-star star1"></i>
                    <i class="fas fa-star star1"></i>
                    <i class="fas fa-star star1"></i>
                    <i class="fas fa-star star1"></i>
                    <i class="fas fa-star star1"></i>
                </div>
            </div>
            <!-- reviews__head -->
        </div>
        <!-- reviews__content -->
    </div>
    <!-- container -->
</section>

<section class="container reviews__container mySwiper wow animate__animated animate__fadeInUp">
    <div class="swiper-wrapper">
        <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '163']) as $reviewsSlider) : ?>
            <article class="testimonials swiper-slide">

                <div class="testimonials__block">

                    <div class="testimonials__content">
                        <div class="avatar">
                            <img alt="client photo" alt="client photo" src="<?= $reviewsSlider['img'] ?>" />
                        </div>

                        <div class="testimonial__info">
                            <h5><?= $reviewsSlider['user'] ?></h5>
                            <div class="testimonials__stars">
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                                <i class="fas fa-star star1"></i>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial__body">
                        <p>
                            <?= $reviewsSlider['text'] ?>
                        </p>
                    </div>

                </div>

            </article>
        <? endforeach ?>
    </div>
    <div class="swiper-pagination"></div>
</section>


<!-- SERVICES -->
<section class="services wow animate__animated animate__fadeInUp">
    <div class="container">
        <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '164'])  as $services) : ?>
            <h1 class="reviews__title wow animate__animated animate__fadeIn">
                <?= $services['title_badge'] ?>
            </h1>
            <div class="services__content">
                <div class="services__column">
                    <div class="tabs">
                        <button class="tablinks active" onclick="openTab(event, 'Desing')">
                            <?= $services['button1'] ?>
                        </button>

                        <button class="tablinks" onclick="openTab(event, 'Technology')">
                            <?= $services['button2'] ?>
                        </button>

                        <button class="tablinks" onclick="openTab(event, 'Marketing')">
                            <?= $services['button3'] ?>
                        </button>

                        <button class="tablinks" onclick="openTab(event, 'Research')">
                            <?= $services['button4'] ?>
                        </button>
                    </div>
                    <!--tabs -->
                    <a href="<?= '/' . $_SESSION['site_lang'] . '/projects' ?>">
                    <button type="button" class="header__btn about__btn">
                        <?= $services['button5'] ?>
                        <i class="arrow-long-right"></i>
                    </button>
                    </a>
                </div>
            <? endforeach ?>




            <div class="services__column__right">
                <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '165']) as $accardion) : ?>
                    <div id="<?= $accardion['id'] ?>" class="tabcontent">
                        <img alt="services image" src="<?= $accardion['img'] ?>" class="tabcontent__img" />
                        <div class="tabcontant__title">
                            <?= $accardion['title'] ?>
                        </div>
                        <div class="tabcontent__description">
                            <?= $accardion['description'] ?>
                        </div>
                    </div>

                <? endforeach ?>
            </div>

            </div>
    </div>
    <!-- container -->
</section>

<!-- PORTFOLIO -->
<article class="portfolio wow animate__animated animate__fadeInUp">
    <div class="container">
        <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '166']) as $portfolioTitle) : ?>
            <h1 class="reviews__title">
                <?= $portfolioTitle['name'] ?>
            </h1>
        <? endforeach ?>

        <!-- Swiper -->
        <div class="portfolio__content mySwiper2">
            <div class="swiper-wrapper">
                <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '167']) as $portfolioSlider) : ?>
                    <div class="portfolio__boxs swiper-slide">
                        <div class="portfolio__block">
                            <a href="<?= $portfolioSlider['url'] ?>">
                                <img class="portfolio__img" alt="company logo" src="<?= $portfolioSlider['img'] ?>" />
                                <div class="portfolio__name"><?= $portfolioSlider['title'] ?></div>
                                <div class="portfolio__text">
                                    <?= $portfolioSlider['discription'] ?>
                                </div>
                            </a>
                        </div>
                    </div>
                <? endforeach ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- container -->
</article>