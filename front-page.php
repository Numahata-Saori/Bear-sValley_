<?php get_header(); ?>

<main class="home">
  <div class="home__menu">
    <!-- <ul class="home__menu__list">
      <li class="home__menu__list__item wow animate__animated animate__swing"data-en="Home">
        <a href="<?php echo home_url( '/' ); ?>">
          <span class="ja">ホーム</span>
        </a>
      </li>
      <li class="home__menu__list__item wow animate__animated animate__swing"data-en="Nail">
        <a href="<?php echo home_url( '/nail/home/' ); ?>">
          <span class="ja">ネイル</span>
        </a>
      </li>
      <li class="home__menu__list__item wow animate__animated animate__swing"data-en="Ribbon&Strap">
        <a href="<?php echo home_url( '/handmade/home/' ); ?>">
          <span class="ja">リボン＆ストラップ</span>
        </a>
      </li>
      <li class="home__menu__list__icon">
        <a href="https://www.instagram.com/bear_valley_nail/">
          <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram_2F241B.png" alt="">
        </a>
      </li>
      <li class="home__menu__list__icon">
        <a href="https://www.tiktok.com/@aco_bear_valley">
          <img src="<?php echo get_template_directory_uri(); ?>/img/TikTok_2F241B.png" alt="">
        </a>
      </li>
    </ul> -->

    <ul class="home__menu__list">
      <li>
        <a class="home__menu__list__item" href="<?php echo home_url( '/nail/home/' ); ?>">
          <div class="home__menu__list__item__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon_2F241B.png" alt="">
          </div>
          <div class="home__menu__list__item__text">
            <span>Nail</span>
          </div>
        </a>
      </li>
      <li>
        <a class="home__menu__list__item" href="<?php echo home_url( '/handmade/home/' ); ?>">
          <div class="home__menu__list__item__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ribbon_2F241B.png" alt="">
          </div>
          <div class="home__menu__list__item__text">
            <span>Ribbon&Strap</span>
          </div>
        </a>
      </li>
      <li>
        <a class="home__menu__list__item" href="https://www.instagram.com/bear_valley_nail/">
          <div class="home__menu__list__item__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram_2F241B.png" alt="">
          </div>
          <div class="home__menu__list__item__text">
            <span>Instagram</span>
          </div>
        </a>
      </li>
      <li>
        <a class="home__menu__list__item" href="https://www.tiktok.com/@aco_bear_valley">
          <div class="home__menu__list__item__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/TikTok_2F241B.png" alt="">
          </div>
          <div class="home__menu__list__item__text">
            <span>TikTok</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
</main>

  <?php get_footer(); ?>
