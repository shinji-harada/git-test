<!-- footer__start -->
<footer class="footer">
    <div class="footer__inner">

      <div class="footer__menu">
        <div class="footer__title">Pages</div>
        <ul class="footer__ul">
          <li class="footer__ul-li"><a href="<?php echo esc_url( home_url('operation') ); ?>">運営元について</a></li>
          <li class="footer__ul-li"><a href="<?php echo esc_url( home_url('articleList') ); ?>">ブログについて</a></li>
          <li class="footer__ul-li"><a href="<?php echo esc_url( home_url('contact') ); ?>">お問い合わせ</a></li>
        </ul>
      </div>

      <div class="footer__menu">
        <div class="footer__title">SNS</div>
        <ul class="footer__ul">
          <li class="footer__ul-li footer__ul-twitter"><a href="#">Twitter</a></li>
          <li class="footer__ul-li footer__ul-youtube"><a href="#">YouTube</a></li>
          <li class="footer__ul-li footer__ul-line"><a href="#">LINE</a></li>
        </ul>
      </div>

      <div class="footer__menu">
        <div class="footer__title">その他</div>
        <ul class="footer__ul">
          <li class="footer__ul-li"><a href="<?php echo esc_url( home_url('rule') ); ?>">利用規約</a></li>
          <li class="footer__ul-li"><a href="<?php echo esc_url( home_url('commercial-code') ); ?>">特定商取引に基づく表記</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__copyright">©copyright 2022.blog</div>
  </footer>
  <!-- /footer -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>