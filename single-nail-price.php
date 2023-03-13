<?php
/*
  Template Name: ネイル料金
  Template Post Type: nail
*/
?>

        <div class="sub-title">
          <h4 class="sub-title__item">ソフトジェル or ハードジェル</h4>
        </div>

        <?php
        $args = array(
          'post_type' => 'nail', // 投稿タイプ
          'category_name' => 'nailprice', //カテゴリ
        );
        // データの取得
        $posts = get_posts($args);
        ?>

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

        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>

        <div class="menu__price__terms">
          <p>※チップ長さ出し&ジェルオフ込み</p>
          <p>※持っているパーツは付け放題</p>
          <p>※サービスでハンドクリーム(イソップ)塗布</p>
        </div>
      </div>
