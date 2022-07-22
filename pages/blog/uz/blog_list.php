<div class="blog">
    <div class="container">
        <h1 class="blog__name">
            Blog
        </h1>

        <div class="blog__content">
            <div class="blog__item">
            <? foreach (db::arr("SELECT * FROM `news` WHERE LANG='uz' ORDER BY SORT ASC") as $blog):?>
                <div class="blog__block">
                    <img class="blog__img" width="500px" height="250px" alt="Блог фото" src="<?= $blog['IMG'] ?>">
                    <div class="blog__title">
                    <?= $blog['TITLE_SHORT'] ?>
                    </div>
                    <div class="blog__subtitle">
                    <?= $blog['TEXT_SHORT'] ?>
                    </div>


                    <div class="blog__mini">
                        <a href="/uz/blog/<?=$blog['ID']?>">
                            <button class="blog__read">
                            <?= $blog['READ'] ?>
                            </button>
                        </a>


                        <div class="blog__info"><?= $blog['DATE_CREATED'] ?> | <a href="#"><?= $blog['SECTION'] ?></a> </div>
                    </div>
                </div>
                <?endforeach?>
            </div>

        </div>
    </div>
</div>