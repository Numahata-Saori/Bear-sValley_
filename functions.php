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
