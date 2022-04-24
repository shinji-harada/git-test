<!--  author 情報を非表示に -->



<!--  投稿にサムネイル出現させる -->
<?php
function practice_setup() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus'); 
}
add_action( 'after_setup_theme', 'practice_setup' ); 


//functions.phpに定義する関数
function get_index() {
  //グローバル変数を使う為の宣言
  global $post;
  //マッチングで<h>タグを取得する
  preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);
  //取得した<h>タグの個数をカウント
  $matches_count = count($matches[0]);
  if(empty($matches)){
      //<h>タグがない場合の出力
      echo '<span>Sorry no index</span>';
  }else{
      //<h>タグが存在する場合に<h>タグを出力
      for ($i = 0; $i < $matches_count; $i++){
          echo  $matches[0][$i];
      }
  }     
}

  