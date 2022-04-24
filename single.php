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
    </div>
  </section>
  <!-- /pickup -->

  <!-- article -->
  <section class="article">
    <div class="article__inner inner">

      <?php if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>
          <div class="article__main">
            <h2 class="article__title articleDetail__article-title page__main-title"><?php echo the_title(); ?></h2>
            <a class=" articleDetail__btn _yellow" href="#">JS-Lesson5</a>
            <div class="articleDetail__main-item">
              <div class="articleDetail__main-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/black-bg.png" alt="">
              </div>
              <p class="articleDetail__main-item-text"><?php echo the_content(); ?></p>
              <p class="articleDetail__main-item-text02"><?php echo the_content(); ?></p>
            </div>
            <div class="articleDetail__h2Heading">
              <h2> <?php echo the_title(); ?></h2>
              <p><?php echo the_content(); ?></p>
            </div>
            <div class="articleDetail__h3Heading">
              <h3><?php echo the_title(); ?></h3>
              <p><?php echo the_content(); ?></p>
            </div>
            <div class="articleDetail__h4Heading">
              <h4><?php echo the_title(); ?></h4>
              <p><?php echo the_content(); ?> </p>
            </div>
          </div>

      <?php
        }
      }
      ?>

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
  </section>
  <!-- /article -->
</main>
<!-- /main -->
<?php get_header(); ?>