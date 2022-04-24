<?php get_header(); ?>

<!-- main_ -->
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
    </div>
  </section>
  <!-- /pickup -->

  <!-- article -->
  <?php
  $category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
  ?>

  <section class="article">
    <div class="article__inner inner">
      <div class="article__main">
        <h2 class="article__title articleList__article-title page__main-title"><?php echo $cat_name; ?></h2>

        <div class="common__article-wrapper">
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
        </div>

        <!-- articleList__btn-wrapper -->
        <div class="articleList__btn-wrapper">
          <a class="articleList__btn-item articleList__btn-black" href="#">1</a>
          <a class="articleList__btn-item articleList__btn-white" href="#">2</a>
          <a class="articleList__btn-item articleList__btn-white" href="#">3</a>
        </div>
        <!-- /articleList__btn-wrapper -->

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

          <!-- articleList__btn-wrapper -->
          <div class="articleList__btn-wrapper articleList__sp-btn">
            <a class="articleList__btn-item articleList__btn-black" href="#">1</a>
            <a class="articleList__btn-item articleList__btn-white" href="#">2</a>
            <a class="articleList__btn-item articleList__btn-bgNone" href="#">……</a>
            <a class="articleList__btn-item articleList__btn-white" href="#">6</a>
          </div>
          <!-- /articleList__btn-wrapper-->
        </div>
      </div>

      <div class="aside">
        <div class="author">
          <a href=""><img class="author__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt=""></a>
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
  </section>
  <!-- /article -->
</main>
<!-- /main -->
<?php get_footer(); ?>