    <?php if ( !is_home() && !is_front_page() ) : ?>
    <footer class="footer ly-sec ja">
      <!-- scroll -->
      <p class="js-scroll scroll-top scrollview"><a href="#design">Scroll</a></p>
      <p class="js-pagetop scroll-top"><a href="#">Page Top</a></p>

      <ul class="footer__list">
        <li><a href="#">特定商取引法</a></li>
        <li><a href="#">プライバシーポリシー</a></li>
      </ul>
      <p class="copyright">&copy; Bear's Valley</p>
    </footer>
    <?php endif; ?>
  </div>

  <!-- loading -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/loading.js"></script>
  <!-- scroll -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

<?php wp_footer(); ?>

</body>
</html>
