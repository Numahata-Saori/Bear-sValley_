
<?php get_header(); ?>

<main class="main">
  <div class="main__mv">
    <div class="main__mv__text">
      <h2 class="main__mv__text__title">Bear's Valley</h2>
      <p class="main__mv__text__concept ja">毎月通える、<br>美容とオシャレのお手伝い</p>
    </div>

    <div class="main__mv__img">
      <ul class="main__mv__img__list mvleft">
        <li class="slide">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv1.jpg" alt=""></div>
        </li>
        <li class="slide">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv2.jpg" alt=""></div>
        </li>
        <li class="slide">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv3.jpg" alt=""></div>
        </li>
      </ul>
      <ul class="main__mv__img__list mvright">
        <li class="slide2">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv4.jpg" alt=""></div>
        </li>
        <li class="slide2">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv5.jpg" alt=""></div>
        </li>
        <li class="slide2">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv6.jpg" alt=""></div>
        </li>
      </ul>
      <ul class="main__mv__img__list mvleft">
        <li class="slide">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv7.jpg" alt=""></div>
        </li>
        <li class="slide">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv8.jpg" alt=""></div>
        </li>
        <li class="slide">
          <div class="shadow fadeIn"><img class="mv" src="<?php echo get_template_directory_uri(); ?>/img/mv/nail-mv9.jpg" alt=""></div>
        </li>
      </ul>
    </div>

  </div>

  <article class="ly-cont">
    <section class="menu ly-sec " id="menu">
      <div class="sec-title wow animate__animated animate__swing">
        <h3 class="sec-title__item" data-en="Nail&nbsp;&nbsp;Menu"><span class="ja">ネイルメニュー</span></h3>
      </div>

      <div class="menu__price ly-group ja">
        <div class="sub-title">
          <h4 class="sub-title__item">ソフトジェル or ハードジェル</h4>
        </div>

        <?php
        $args = array(
          'post_type' => 'nail', // 投稿タイプ
          'category_name' => 'nail-price', //カテゴリ
        );
        // データの取得
        $posts = get_posts($args);
        // カスタムフィールドを取得
        $cat_posts = new WP_Query($args);
        ?>

        <?php if(have_posts()) :?>
        <?php while (have_posts()) : the_post() ; ?>

        <div class="menu__price__item">
          <h5 class="menu__price__item__title">デザインネイル</h5>
          <table class="menu__price__item__table">
            <tr>
              <td  class="teble-left" rowspan="2">10本</td>
              <!-- <td>初回一律￥3500(税込み)</td> -->
              <td>初回一律￥<?php echo post_custom('nailprice_design_first'); ?>(税込み)</td>
            </tr>
            <tr>
              <!-- <td>次回以降予約で一律￥3000(税込み)<br>（※リピート様限定）</td> -->
              <td>次回以降予約で一律￥<?php echo post_custom('nailprice_design_second'); ?>(税込み)<br>（※リピート様限定）</td>
            </tr>
          </table>
        </div>

        <div class="menu__price__item">
          <h5 class="menu__price__item__title">シンプルネイル</h5>
          <table class="menu__price__item__table">
            <tr>
              <td class="teble-left">10本</td>
              <!-- <td>一律￥2000(税込み)</td> -->
              <td>一律￥<?php echo post_custom('nailprice_simple'); ?></td>
            </tr>
          </table>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>

        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>

        <div class="menu__price__terms">
          <p>※チップ長さ出し&ジェルオフ込み</p>
          <p>※持っているパーツは付け放題</p>
          <p>※サービスでハンドクリーム(イソップ)塗布</p>
        </div>
      </div>

      <div class="menu__caution ly-group ja">
        <div class="sub-title">
          <h4 class="sub-title__item">ご予約時のご注意</h4>
        </div>

        <ul class="menu__caution__list">
          <li class="check-mark accent"><span class="emphasis">ノンライセンス</span><br>ノンライセンスのため、クオリティをお求めの方はご遠慮ください。</li>

          <li class="check-mark">水仕事など生活スタイルによっては、ネイルが取れやすくなる可能性がございますので、ご注意ください。</li>

          <li class="check-mark">自宅で施術のため、お気にされる方はご遠慮ください。<br>
          （生活感あふれるリビングルームで施術致します）</li>

          <li class="check-mark">料金設定は物価状況に応じて変動する可能性がございます。</li>

          <li class="check-mark">無断キャンセル不可</li>

          <li class="check-mark">施術時にはアルコール消毒致します。</li>

          <li class="check-mark">施術に2〜3時間ほど要しますので、お時間に余裕のある方のみご予約お願い致します。</li>
        </ul>
      </div>
    </section>

    <section class="design ly-sec" id="design">
      <div class="sec-title wow animate__animated animate__swing">
        <h3 class="sec-title__item" data-en="Design"><span class="ja">デザイン</span></h3>
      </div>

      <ul class="design__caution ja">
        <li>デザインのメニューはございませんので、持ち込みネイルを推奨しております。</li>
        <li>スカルプチュア可（チップ有り）</li>
      </ul>

      <div class="design__sample ja">
        <div class="sub-title">
          <h4 class="sub-title__item">デザインサンプル</h4>
        </div>

        <div class="design__sample__lay">

          <ul class="design__sample__lay__list list-left ja">
            <?php
            // sample-imgを取得
            $args = array(
              'post_type' => 'nail', // 投稿タイプ
              'category_name' => 'sample-img', //カテゴリ
              'orderby' => 'date', // 表示順の基準
              'order' => 'ASC' // 昇順・降順
            );
            // データの取得
            // $posts = get_posts($args);
            // カスタムフィールドを取得
            $cat_posts = new WP_Query($args);
            ?>

            <!-- ネイルサンプルが1件以上存在するかどうか -->
            <?php if($cat_posts->have_posts()) : ?>
              <?php
                // naildesignが存在するだけループ
                while($cat_posts->have_posts()) :
                  $cat_posts->the_post();
              ?>

            <!-- ループはじめ -->
            <li class="design__sample__lay__list__item sample-left">
              <?php
              // サンプル画像ページで設定した画像を取得
              $sampleimg = get_field('sample-img-left');
              $size = 'thumbnail';
              // medium, large, fullなども指定可能

              if( $sampleimg ) {
                  echo wp_get_attachment_image( $sampleimg, $size );
              }
              ?>
            </li>
            <!-- ループおわり -->

            <?php
            // 投稿のループ終了
            endwhile;
            // 投稿の条件分岐を終了
            endif;
            ?>

            <!-- 使用した投稿データをリセット -->
            <?php wp_reset_postdata(); ?>
          </ul>

          <ul class="design__sample__lay__list list-right ja">
            <?php
            // sample-imgを取得
            $args = array(
              'post_type' => 'nail', // 投稿タイプ
              'category_name' => 'sample-img', //カテゴリ
              'orderby' => 'date', // 表示順の基準
              'order' => 'ASC' // 昇順・降順
            );
            // カスタムフィールドを取得
            $cat_posts = new WP_Query($args);
            ?>

            <!-- ネイルサンプルが1件以上存在するかどうか -->
            <?php if($cat_posts->have_posts()) : ?>
              <?php
                // naildesignが存在するだけループ
                while($cat_posts->have_posts()) :
                  $cat_posts->the_post();
              ?>

            <!-- ループはじめ -->
            <li class="design__sample__lay__list__item sample-right">
              <?php
              // サンプル画像ページで設定した画像を取得
              $sampleimg = get_field('sample-img-right');
              $size = 'thumbnail';
              // medium, large, fullなども指定可能

              if( $sampleimg ) {
                  echo wp_get_attachment_image( $sampleimg, $size );
              }
              ?>
            </li>
            <!-- ループおわり -->

            <?php
            // 投稿のループ終了
            endwhile;
            // 投稿の条件分岐を終了
            endif;
            ?>

            <!-- 使用した投稿データをリセット -->
            <?php wp_reset_postdata(); ?>
          </ul>

        </div>
      </div>

      <div class="design__movie ja">
        <?php
          // sample-imgを取得
          $args = array(
            'post_type' => 'nail', // 投稿タイプ
            'category_name' => 'nail-movie', //カテゴリ
            'orderby' => 'date', // 表示順の基準
            'order' => 'ASC' // 昇順・降順
          );
          // カスタムフィールドを取得
          $cat_posts = new WP_Query($args);
          ?>

          <!-- sample-imgが1件以上存在するかどうか -->
          <?php if($cat_posts->have_posts()) : ?>
            <?php
              // workが存在するだけループ
              while($cat_posts->have_posts()) :
                $cat_posts->the_post();
            ?>
        <div class="design__movie__item">
          <?php echo post_custom('movie-instagram'); ?>
        </div>
        <div class="design__movie__item">
          <?php echo post_custom('movie-ticktok'); ?>
        </div>
        <?php
        // 投稿のループ終了
        endwhile;
        // 投稿の条件分岐を終了
        endif;
        ?>

        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
      </div>
    </section>

    <section class="contact ly-sec" id="contact">
      <div class="sec-title wow animate__animated animate__swing">
        <h3 class="sec-title__item" data-en="Contact"><span class="ja">お問い合わせ</span></h3>
      </div>

      <div class="contact__info ja">
        <p class="contact__info__text">ご予約、お問い合わせなどはこちら</p>
        <a href="#"><img class="contact__info__line" src="<?php echo get_template_directory_uri(); ?>/img/LINE_AAABAB.png" alt=""></a>
        <p>ご予約の方は名前・住所・電話番号をLINEでご連絡の際にお伝え下さい。</p>
      </div>
    </section>
  </article>
</main>

<?php get_footer(); ?>
