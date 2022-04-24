 <!-- カスタム投稿タイプである"よく読まれている記事"から出力 -->
        <!-- ループの掛け方Try -->

        <?php
         $args = array(
          'post_type' => 'news',
          'posts_per_page' => '5',
          'paged' => $paged
         );
         $the_query = newWP_Query($args);if($the_query->have_posts()):
        ?>

        <div class="common__article-wrapper">
          <?php while($the_query->have_posts()):$the_query->the_post();?>

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
              <a href="<?php get_permalink(); ?>">
                <p class="common__article-date"><?php the_time('Y.m.d'); ?></p>
                <h3 class="common__article-subtitle"><?php the_title(); ?></h3>
                <p class="common__article-text"><?php the_content(); ?></p>
              </a>
            </div>
          </article>
          <?php endwhile;?>
        </div>