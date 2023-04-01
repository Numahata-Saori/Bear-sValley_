<?php
add_action( 'wp_body_open', function() {
?>
<div id="splash">
  <div id="splash_logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="fadeUp">
  </div>
</div>
<?php
});
?>

<?php
/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support( 'menus' );

// function my_custom_main_color() {
//     global $post;
//     $main_color = get_post_meta($post->ID, 'main_color', true);
//     if (!empty($main_color)) {
//         echo '<style>
//         /* 以下のセレクターは、対象となる要素を指定してください。 */
//         .main .menu__price__item__table td {
//           border: 2px solid ' . $main_color . ';
//         }
//         body {
//           background-color: ' . $main_color . ';
//         }
//         </style>';
//     }
// }
// add_action('wp_head', 'my_custom_main_color');
