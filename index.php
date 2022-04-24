<?php get_header(); ?>

<!-- main -->
<main class="main">
  <!-- pickup -->
  <section class="pickup">
    <div class="pickup__inner inner">

      <!-- カテゴリーが増えるごとにpickupメニューにカテゴリーを取得する -->
      <ul class="pickup__ul">
        <?php
        $categories = get_categories();
        foreach ($categories as $category) {
          echo '
        <li class="pickup__ul-li"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
        ?>
      </ul>

      <h2 class="pickup__main-title">新着記事</h2>

      <!-- 管理画面のデフォルトの投稿タイプである"投稿"から出力 -->
      <div class="pickup__article-wrapper">
        <?php query_posts('posts_per_page=3'); ?>
        <?php if (have_posts()) {
          while (have_posts()) {
            the_post(); ?>
            <article class="pickup__article">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/glay-bg.png" alt="">
                <?php } ?>
                <span class="common__article-title _yellow">
                  <?php
                  $categories = get_the_category();
                  if ($categories) {
                    foreach ($categories as $category) {
                      echo $category->name . '';
                    }
                  }; ?>
                </span>
              </a>
            </article>
        <?php
          }
        }
        ?>
      </div>

      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper pickup__article">
          <!-- Slides -->
          <?php query_posts('posts_per_page=3'); ?>
          <?php if (have_posts()) {
            while (have_posts()) {
              the_post(); ?>
              <article class="swiper-slide">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/glay-bg.png" alt="">
                  <?php } ?>
                  <span class="common__article-title _yellow">
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                      foreach ($categories as $category) {
                        echo $category->name . '';
                      }
                    }; ?>
                  </span>
                </a>
              </article>
          <?php
            }
          }
          ?>
        </div>
        <!-- If we need pagination -->
      </div>
      <!--sp__mark -->
      <!-- <div class="sp__mark">
          <span class="sp__mark-black"></span>
          <span class="sp__mark-gray01"></span>
          <span class="sp__mark-gray02"></span>
        </div> -->
      <!-- /sp__mark -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- /pickup -->

  <!-- article -->
  <section class="article">
    <div class="article__inner inner">
      <div class="article__main">
        <h2 class="article__title">よく読まれている記事</h2>

        <!-- メインクエリーを一旦変更し、カテゴリー『よく読まれている記事』をループで呼びだしている -->

        <div class="common__article-wrapper">
          <?php query_posts($args = array('post_type' => 'post', 'posts_per_page' => 4, 'cat' => 12)); ?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article class="common__article">
                <div class="common__article-img">
                  <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail('medium'); ?>
                    <?php } else { ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/glay-bg.png" alt="">
                    <?php } ?>
                    <span class="common__article-title _yellow">
                      <?php
                      $categories = get_the_category();
                      if ($categories) {
                        foreach ($categories as $category) {
                          echo $category->name . '';
                        }
                      }; ?>
                    </span>
                  </a>
                </div>
                <div class="common__article-textbox">
                  <a href="<?php the_permalink(); ?>">
                    <p class="common__article-date"><?php the_time('Y.m.d'); ?></p>
                    <h3 class="common__article-subtitle"><?php the_title(); ?></h3>
                    <p class="common__article-text">
                      <?php
                      if (mb_strlen($post->post_content, 'UTF-8') > 60) {
                        $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 60, 'UTF-8'));
                        echo $content . '……';
                      } else {
                        echo str_replace('\n', '', strip_tags($post->post_content));
                      }
                      ?></p>
                  </a>
                </div>
              </article>
            <?php endwhile; ?>
          <?php else : ?>
            <p>現在表示する記事はありません</p>
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </div>

        <div class="common__sp-card-wrapper">
          <?php if (have_posts()) {
            while (have_posts()) {
              the_post(); ?>
              <article class="common__sp-card">
                <a href="<?php get_permalink(); ?>">
                  <div class="common__sp-card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/glay-bg.png" alt="">
                    <span class="common__sp-card-subtitle _yellow">
                      <?php
                      $categories = get_the_category();
                      if ($categories) {
                        foreach ($categories as $category) {
                          echo $category->name . '';
                        }
                      }; ?>
                    </span>
                  </div>
                  <div class="common__sp-card-textbox">
                    <p class="common__sp-card-date"><?php the_time('Y.m.d'); ?></p>
                    <h3 class="common__sp-card-title"><?php the_title(); ?></h3>
                    <p class="common__sp-card-text">
                      <?php
                      if (mb_strlen($post->post_content, 'UTF-8') > 60) {
                        $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 60, 'UTF-8'));
                        echo $content . '……';
                      } else {
                        echo str_replace('\n', '', strip_tags($post->post_content));
                      }
                      ?></p>
              </article>
          <?php
            }
          }
          ?>
        </div>
        </a>
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
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube-logo.png" alt=""></a>
            </div>
            <div class="author__sns-common">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/line-logo.png" alt=""></a>
            </div>
          </div>
        </div>

        <h3 class="aside__main-title">学習コンテンツ</h3>

        <div class="common__card-wrapper">
          <?php query_posts('posts_per_page=3'); ?>
          <?php if (have_posts()) {
            while (have_posts()) {
              the_post(); ?>
              <article class="common__card">
                <a href="<?php the_permalink(); ?>">
                  <div class="common__card-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/glay-bg.png" alt="">
                    <span class="common__card-subtitle _yellow">
                      <?php
                      $categories = get_the_category();
                      if ($categories) {
                        foreach ($categories as $category) {
                          echo $category->name . '';
                        }
                      }; ?>
                    </span>
                  </div>
                  <p class="common__card-date"><?php the_time('Y.m.d'); ?></p>
                  <h3 class="common__card-title"><?php the_title(); ?></h3>
                  <p class="common__sp-card-text">
                    <?php
                    if (mb_strlen($post->post_content, 'UTF-8') > 60) {
                      $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 60, 'UTF-8'));
                      echo $content . '……';
                    } else {
                      echo str_replace('\n', '', strip_tags($post->post_content));
                    }
                    ?></p>
                </a>
              </article>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- /article -->
</main>
<!-- /main -->
<?php get_footer(); ?>