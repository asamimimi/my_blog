<?php
// cssの読み込み
function add_link_files()
{
  //GoogleFont 
  wp_enqueue_style(
    'zenmaru',
    'https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500;700&display=swap',false
  );
  wp_enqueue_style('my-resetstyle', get_template_directory_uri() . '/assets/css/reset.css');
  wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css');

  if ( !is_admin() ) {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '1.11.1');
    }
  // 自作JSの読み込み（jQuery非依存・deferで非ブロッキング化）
  wp_enqueue_script(
    'my-script',
    get_template_directory_uri() . '/assets/js/script.js',
    array(),
    filemtime(get_template_directory() . '/assets/js/script.js'),
    array('in_footer' => true, 'strategy' => 'defer')
  );
}
add_action('wp_enqueue_scripts', 'add_link_files');


// フロントページのLCP画像を先読み（WebP対応ブラウザ向け）
function preload_lcp_images()
{
  if (!is_front_page()) {
    return;
  }
  $uri = get_template_directory_uri();
  echo '<link rel="preload" as="image" href="' . esc_url($uri . '/assets/img/image_mv.webp') . '" type="image/webp" fetchpriority="high">' . "\n";
  echo '<link rel="preload" as="image" href="' . esc_url($uri . '/assets/img/fv_bg.webp') . '" type="image/webp">' . "\n";
}
add_action('wp_head', 'preload_lcp_images', 1);


function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //スラッグになる
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');


// メインクエリの変更
function change_set_post($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_archive()) {
    $query->set('posts_per_page', '12');
    return;
  }
}
add_action('pre_get_posts', 'change_set_post');


// 前後のページリンクの文字数制限
function twpp_adjacent_post_link($previous = true, $max_length = 12, $trim_marker = '...')
{
  $html = '';
  $post = get_adjacent_post(false, '', $previous);

  if (!empty($post)) {
    $title = apply_filters('the_title', $post->post_title);

    if (mb_strlen($title) > $max_length) {
      $title = mb_substr($title, 0, $max_length) . $trim_marker;
    }

    $html .= sprintf(
      '<a href="%s">%s</a>',
      esc_url(get_permalink($post->ID)),
      $title
    );

    echo $html;
  }
}
