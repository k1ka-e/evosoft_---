<? $blog = db::arr_s("SELECT * FROM `news` WHERE ID='$_GET[item_id]'"); ?>

<? if ($blog == 'empty') {
    LocalRedirect('/uz/blog');
} ?>










<section class="detail">
    <div class="container">
        <div class="detail__block">
            <div class="detail__img">
                <img src="<?= $blog['IMG'] ?>" alt="">
                <div class="detail__header">
                    <div class="content">
                        <h1><?= $blog['TITLE_SHORT'] ?></h1>
                        <div class="detail__info"><?= $blog['DATE_CREATED'] ?> | <a href="#"><?= $blog['SECTION'] ?></a> </div>
                    </div>

                </div>

            </div>

            <div class="detail__content">
                <div class="detail__article">
                    <h2><?= $blog['TITLE'] ?></h2>
                    <br />
                    <p><?= $blog['TEXT'] ?></p>
                    <br />
                    <p><?= $blog['TEXT2'] ?></p>
                    <br />
                    <p><?= $blog['TEXT3'] ?></p>
                </div>
            </div>


        </div>
    </div>
</section>