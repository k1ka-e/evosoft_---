<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Meta Teg -->

    <? $url = $_SERVER['REQUEST_URI'] ?>

    <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '191']) as $meta) : ?>
        <? if ($url == $meta['url']) : ?>
            <meta name="description" content="<?= $meta['description'] ?>">
            <meta name="keywords" content="<?= $meta['keywords'] ?>">
        <? endif; ?>
    <? endforeach ?>

    <meta name="author" content="Evosoft Solutions">

    
   <!-- Facebook Meta teg -->
   <meta property="og:type" content="profile" />
    <meta property="profile:first_name" content="First Name" />
    <meta property="profile:last_name" content="Last Name" />
    <meta property="profile:username" content="" />
    <meta property="og:title" content="Website Name" />
    <meta property="og:description" content="Website  Description" />
    <meta property="og:image" content="https://website.com/image250X250.png" />
    <meta property="og:url" content="http://www.thewallscript.com" />
    <meta property="og:site_name" content="Website Name" />
    <meta property="og:see_also" content="http://www.website.com" />
    <meta property="fb:admins" content="Facebook_ID" />

    <!-- Twitter meta teg -->
    <meta name="twitter:site" content="9lessons" />
    <meta name="twitter:title" content="The Wall Script">
    <meta name="twitter:description" content="PHP Social Networking Script" />
    <meta name="twitter:creator" content="9lessons" />
    <meta name="twitter:image:src" content="https://website.com/image250X250.png" />
    <meta name="twitter:domain" content="website.com" />

    <!-- favicon -->
    <link type="image/x-icon" id="favicon" rel="shortcut icon" href="<?php echo $template_path ?>img/favicon.svg" />

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo $template_path ?>/js/jquery.js"></script>
    <script src="<?php echo $template_path ?>/js/jquery-confirm.min.js"></script>

    <!-- ICONSCOUTN CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css" />

    <!-- ANIMATE -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="<?php echo $template_path ?>animate/animate.min.css" />


    <script src="<?php echo $template_path ?>animate/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- GOOGLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/0ca3153d0b.js" crossorigin="anonymous" defer></script>

    <!-- Swiper -->
    <!-- <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $template_path ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo $template_path ?>css/media.css" />

    <!-- theme -->
    <!-- Добавляем в head пустой тег link -->
    <link rel="stylesheet" type="text/css" title="theme" href="#" />

    <!-- Script -->
    <script src="<?php echo $template_path ?>js/app.js" defer></script>
    <script src="<?php echo $template_path ?>js/particles.js" defer></script>

    <title>Evosoft Solutions</title>
</head>

<body>
    <div class="cursor"></div>
    <div class="cursor__follower"></div>

    <!-- /////////// -->

    <div class="overlay">


        <!-- NAV -->
        <nav class="header">

            <div class="container nav_container">
                <div class="nav__content">
                    <div class="nav__left">
                        <div class="nav__logo">
                            <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '142']) as $navcontent) : ?>
                                <a href="<?= '/' . $_SESSION['site_lang'] . '/main' ?>"><img alt="logo" src="<?= $navcontent['img-logo'] ?>" /></a>
                            <? endforeach ?>
                        </div>

                        <select class="form-control" name="site_lang" onchange="change_lang()">
                            <option class="custom-option" value="uz" <? if ($_GET['lang'] == 'uz') {
                                                                            echo 'selected';
                                                                        } ?>>UZ</option>
                            <option class="custom-option" value="ru" <? if ($_GET['lang'] == 'ru') {
                                                                            echo 'selected';
                                                                        } ?>>RU</option>
                            <option class="custom-option" value="en" <? if ($_GET['lang'] == 'en') {
                                                                            echo 'selected';
                                                                        } ?>>EN</option>
                        </select>
                    </div>
                    <!-- nav__left -->

                    <div class="nav__right">
                        <ul class="nav_menu">

                            <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '141'])  as $navbar) : ?>
                                <li class="nav_link">

                                    <a class="menu__link  <? if ($_GET['page'] == $navbar['page_name']) {
                                                                echo 'active';
                                                            } ?> add" href="<?= $navbar['url'] ?>">
                                        <?= $navbar['name'] ?></a>

                                </li>

                            <? endforeach ?>
                        </ul>

                        <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '142']) as $navcontent) : ?>
                            <a href="<?= '/' . $_SESSION['site_lang'] . '/contact' ?>" class="nav__play">
                                <?= $navcontent['button'] ?>
                                <i class="uil uil-play"></i>
                            </a>
                        <? endforeach ?>

                        <div class="mobile-nav">
                            <div class="b-nav">

                                <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '141'])  as $navbar) : ?>
                                    <ul>
                                        <li>
                                            <a class="b-link b-link--active" href="<?= $navbar['url'] ?>">
                                                <?= $navbar['name'] ?></a>
                                        </li>
                                    <? endforeach ?>
                                    </ul>

                                    <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '142']) as $navcontent) : ?>
                                        <input type="text" class="mobile-search" placeholder="<?= $navcontent['placeholder'] ?>" name="" />
                                        <input type="submit" class="mobile-search-btn" value="<?= $navcontent['search'] ?>" />
                                    <? endforeach ?>
                            </div>

                            <!-- Burger-Icon -->
                            <div class="b-container">
                                <div class="b-menu">
                                    <div class="b-bun b-bun--top"></div>
                                    <div class="b-bun b-bun--mid"></div>
                                    <div class="b-bun b-bun--bottom"></div>
                                </div>

                                <!-- Burger-Brand -->
                                <a href="#" class="b-brand"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- nav__content -->
            </div>
            <!-- container -->
        </nav>


        <script>
            $(document).ready(function() {

                change_lang = function() {
                    val = $('[name=site_lang]').val();
                    location.href = '/' + val + '/<?= $_GET['page'] ?>';
                }

            });
        </script>