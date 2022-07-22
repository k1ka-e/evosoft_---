<!-- CONTACT -->
<footer class="contact">
  <div class="container">
    <div class="contact__body">

    <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'156']) as $contact) : ?>
        <h3 class="contact__title"><?= $contact['title'] ?></h3>
        <h4 class="contact__subtitle">
          <?= $contact['subtitle'] ?>
        </h4>


        <div class="contact__content">
          <div class="contact__left">
            <form action="" method="post" id="contact_form">
              <div class="form-group">
                <label for="fullname"><?= $contact['fullname'] ?></label>
                <input type="text" name="fullname" placeholder="<?= $contact['plac-fullname'] ?>" id="fullname" />
              </div>
              <div class="form-group">
                <label for="email"><?= $contact['email'] ?></label>
                <input type="email" name="email" placeholder="<?= $contact['plac-email'] ?>" id="email" />
              </div>
              <div class="form-group">
                <label for="message"><?= $contact['message'] ?></label>
                <textarea name="message" placeholder="<?= $contact['plac-message'] ?>" id="message"></textarea>
              </div>
              <div id="form_result" class="resultform"></div>
              <input type="hidden" name="send_contactform" value="1" />
              <button class="btn-primary" id="send_contactform" name="contact_button">
                <?= $contact['button'] ?>
              </button>
            </form>
          </div>
        <? endforeach ?>


        <div class="contact__right">
        <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'157']) as $contactForm) : ?>
            <div class="info__head">
              <div class="info__info phone">
                <i class="uil uil-phone-alt"></i>
                <a href="tel:<?= $contactForm['phone_number1'] ?>"><?= $contactForm['phone_number1'] ?></a>
              </div>

              <div class="info__info phone">
                <i class="uil uil-phone-alt"></i>
                <a href="tel:<?= $contactForm['phone_number2'] ?>"><?= $contactForm['phone_number2'] ?></a>
              </div>

              <div class="info__info email">
                <i class="uil uil-envelope"></i>
                <a href="mailto:<?= $contactForm['email'] ?>"><?= $contactForm['email'] ?></a>
              </div>

              <div class="info__info adress">
                <i class="uil uil-map-marker"></i>
                <a target="_blank" href=""><?= $contactForm['adress'] ?></a>
              </div>
            </div>
            <!-- info__head  -->

            <div class="contact__btn">
              <div class="info__column">
                <div class="info__block">
                  <div class="info__title"><?= $contactForm['button1'] ?></div>
                  <a href="mailto:<?= $contactForm['email'] ?>" class="info__link"><?= $contactForm['email'] ?></a>
                  <i class="arrow-long-right"></i>
                </div>
              </div>

              <div class="info__column">
                <div class="about__link info__follow">
                  <h1><?= $contactForm['follow'] ?></h1>
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

              <div class="info__column">
                <div class="info__block black">
                  <div class="info__title"><?= $contactForm['button2'] ?></div>
                  <a href="mailto:<?= $contactForm['email'] ?>" class="info__link"><?= $contactForm['email'] ?> </a>
                  <i class="arrow-long-right"></i>
                </div>
              </div>

              <div class="info__column">
                <div class="info__block">
                  <div class="info__title"><?= $contactForm['button3'] ?></div>
                  <a href="mailto:<?= $contactForm['email'] ?>" class="info__link"><?= $contactForm['email'] ?></a>
                  <i class="arrow-long-right"></i>
                </div>
              </div>
            </div>

          <? endforeach ?>
        </div><!-- contact__right  -->


        </div>
    </div>
  </div>
</footer>
</div>
<!-- overlay -->

<!-- !jQuary -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js" defer></script>


<!-- Swiper -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>

<!-- Библиотеки, скрипты из CDN... -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
</body>

</html>