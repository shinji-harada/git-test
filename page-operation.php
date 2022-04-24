<?php get_header(); ?>

<!-- main -->
<main class="main">
  <!-- pickup -->
  <section class="pickup">
    <div class="pickup__inner inner">
      <ul class="pickup__ul">
        <li class="pickup__ul-li"><a href="<?php echo esc_url(get_category_link(6)); ?>">カテゴリー1</a></li>
        <li class="pickup__ul-li pickup__ul-li-border"><a href="<?php echo esc_url(get_category_link(7)); ?>">カテゴリー2</a></li>
        <li class="pickup__ul-li"><a href="<?php echo esc_url(get_category_link(8)); ?>">カテゴリー3</a></li>
      </ul>
    </div>
  </section>
  <!-- /pickup -->

  <!-- article -->
  <section class="article">
    <div class="article__inner inner">
      <div class="article__main">
        <div class="page__operation-operation">
          <h2 class="article__title articleList__article-title page__main-title page__operation-title">運営について</h2>
          <div class="page__operation-info">
            <p class="page__operation-name">運営元<span>運営元を書く</span></p>
            <p class="page__operation-date">開始日<span>2022.03.24</span></p>
          </div>
        </div>

        <div class="page__operation-blog">
          <h2 class="article__title articleList__article-title page__operation-blogTitle">ブログについて</h2>
          <p class="page__operation-blogText">
            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          </p>
        </div>
      </div>

      <div class="aside">
        <div class="author">
          <a href="#"><img class="author__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt=""></a>
          <p class="author__name">name</p>
          <p class="author__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          <div class="author__sns">
            <div class="author__sns-common">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Twitter-logo.png" alt=""></a>
            </div>
            <div class="author__sns-common sns__margin">
              <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/youtube-logo.png" alt=""></a>
            </div>
            <div class="author__sns-common">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/line-logo.png" alt=""></a>
            </div>
          </div>
        </div>

        <h3 class="aside__main-title">学習コンテンツ</h3>

        <div class="common__card-wrapper">
          <article class="common__card">
            <a href="./articleDetail.html">
              <div class="common__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/glay-bg.png" alt="">
                <span class="common__card-subtitle _yellow">カテゴリー1</span>
              </div>
              <div class="common__card-textbox">
                <p class="common__card-date">2021.4.30</p>
                <h3 class="common__card-title">タイトルタイトルタイトルタイトル</h3>
              </div>
            </a>
          </article>

          <article class="common__card">
            <a href="./articleDetail.html">
              <div class="common__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/glay-bg.png" alt="">
                <span class="common__card-subtitle _yellow">カテゴリー1</span>
              </div>
              <div class="common__card-textbox">
                <p class="common__card-date">2021.4.30</p>
                <h3 class="common__card-title">タイトルタイトルタイトルタイトル</h3>
              </div>
            </a>
          </article>

          <article class="common__card">
            <a href="./articleDetail.html">
              <div class="common__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/glay-bg.png" alt="">
                <span class="common__card-subtitle _blue">カテゴリー1</span>
              </div>
              <div class="common__card-textbox">
                <p class="common__card-date">2021.4.30</p>
                <h3 class="common__card-title">タイトルタイトルタイトルタイトル</h3>
              </div>
            </a>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- /article -->
</main>
<!-- /main -->
<?php get_footer(); ?>