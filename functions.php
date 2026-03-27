<?php

/* ================================= */
/* ========== Theme SetUp ========== */
/* ================================= */
if (!function_exists('katsucode_setup')) :
  function katsucode_setup()
  {
    // Make theme available for translation.
    load_theme_textdomain('katsucode', get_theme_file_path('/languages'));
    // タイトル
    add_theme_support('title-tag');
    // RS-feed
    add_theme_support('automatic-feed-links');
    // ウィジェット再読み込み
    add_theme_support('customize-selective-refresh-widgets');
    // アイキャッチ画像
    add_theme_support('post-thumbnails');
    add_image_size('archive-blog', 360, 226, true);
    add_image_size('single-blog', 710, 473, true);
    // 投稿フォーマット
    add_theme_support('post-formats', array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
      'gallery',
      'status',
      'audio',
      'chat',
    ));
    // HTML5サポート
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption',
    ));
    // ブロックエディターサポート
    add_theme_support('wp-block-styles');
    // 幅広、全幅
    add_theme_support('align-wide');
    // オリジナルCSS
    add_theme_support('editor-styles');
    add_editor_style('css/editor.css');
    // レスポンシブ対応
    add_theme_support('responsive-embeds');
    // 翻訳ファイルの場所指定
    // load_theme_textdomain( 'textdomain', get_template_directory() . '/language' );
  }
endif;
add_action('after_setup_theme', 'katsucode_setup');

/* =========================================== */
/* ========== Style & Scripts ========== */
/* =========================================== */
function katsucode_styles_and_scripts()
{
  /* --- Style --- */
  // Font Awesome
  wp_enqueue_style('fontaewsome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '6.1.1');
  // Original Style
  wp_enqueue_style('katsucode-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1');

  /* --- JS --- */
  // WordPressのjQuery解除
  wp_deregister_script('jquery');
  // オリジナルJS読み込み
  wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'katsucode_styles_and_scripts');

/* ================================= */
/* ========== Thumbnail SetUp ========== */
/* ================================= */
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else :
    $img = array(get_template_directory_uri() . '/assets/img/noimage.jpg');
  endif;

  return $img;
}

/* ======================== */
/* ========== Menu ======== */
/* ======================== */
register_nav_menus(array(
  'header-nav' => esc_html__('Header Navigation', 'katsucode'),
  'global-nav' => esc_html__('Global Navigation', 'katsucode'),
  'drawer-nav' => esc_html__('Drawer Navigation', 'katsucode'),
  'footer-nav' => esc_html__('Footer Navigation', 'katsucode'),
  'footer-social' => esc_html__('Footer Social Links', 'katsucode'),
));

/* ================================= */
/* ========== Content Width ======== */
/* ================================= */
function katsucode_content_width()
{
  $GLOBALS['content_width'] = apply_filters('katsucode_content_width', 920);
}
add_action('after_setup_theme', 'katsucode_content_width', 0);

/* ==================================== */
/* ========== Template Title ========== */
/* ==================================== */
function get_main_title()
{
  if (is_singular('post')) :
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif (is_page()) :
    return get_the_title();
  elseif (is_post_type_archive()) :
    return post_type_archive_title();
  elseif (is_category()) :
    return single_cat_title();
  elseif (is_search()) :
    return 'Search Result';
  elseif (is_404()) :
    return '404';
  endif;
};


/* ===================================== */
/* ========== 子ページを取得 ========== */
/* ===================================== */
function get_child_pages($number = -1, $specified_id = null)
{
  if (isset($specified_id)) :
    $parent_id = $specified_id;
  else :
    $parent_id = get_the_ID();
  endif;
  $args = array(
    'posts_per_page' => $number,
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $parent_id,
  );
  $child_pages = new WP_Query($args);
  return $child_pages;
}

/* ===================================== */
/* ========== the_archive_title 余計な文字を削除 ========== */
/* ===================================== */
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }
  return $title;
});

/* ===================================== */
/* ========== パンくずリスト ========== */
/* ===================================== */
function breadcrumb()
{
  $home = '<div class="breadcrumb-item"><a href="' . get_bloginfo('url') . '" ><i class="fas fa-home"></i><span>HOME</span></a></div>';

  if (is_home()) {
    // トップページの場合
  } else if (is_category()) {
    // カテゴリページの場合
    $cat = get_queried_object();
    $cat_id = $cat->parent;
    $cat_list = array();
    while ($cat_id != 0) {
      $cat = get_category($cat_id);
      $cat_link = get_category_link($cat_id);
      array_unshift($cat_list, '<div class="breadcrumb-item"><a href="' . $cat_link . '">' . $cat->name . '</a></div>');
      $cat_id = $cat->parent;
    }
    echo $home;
    foreach ($cat_list as $value) {
      echo $value;
    }
    the_archive_title('<div class="breadcrumb-item">', '</div>');
  } else if (is_archive()) {
    // 月別アーカイブ・タグページの場合
    echo $home;
    the_archive_title('<div class="breadcrumb-item">', '</div>');
  } else if (is_single()) {
    // 投稿ページの場合
    echo $home;
    $cat = get_the_category();
    if (isset($cat[0]->cat_ID)) $cat_id = $cat[0]->cat_ID;
    $cat_list = array();
    while ($cat_id != 0) {
      $cat = get_category($cat_id);
      $cat_link = get_category_link($cat_id);
      array_unshift($cat_list, '<div class="breadcrumb-item"><a href="' . $cat_link . '">' . $cat->name . '</a></div>');
      $cat_id = $cat->parent;
    }
    foreach ($cat_list as $value) {
      echo $value;
    }
    the_title('<div class="breadcrumb-item">', '</div>');
  } else if (is_page()) {
    // 固定ページの場合
    echo $home;
    the_title('<div class="breadcrumb-item">', '</div>');
  } else if (is_search()) {
    // 検索ページの場合
    echo $home;
    echo '<div class="breadcrumb-item">「' . get_search_query() . '」の検索結果</div>';
  } else if (is_404()) {
    // 404ページの場合
    echo $home;
    echo '<div class="breadcrumb-item">ページが見つかりません</div>';
  }
}

/* ================================= */
/* ========== Blog Archive ========== */
/* ================================= */
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';
    $args['label'] = 'Blog';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* ================================= */
/* ========== Custom Post ========== */
/* ================================= */
// カスタム投稿(ポートフォリオを投稿するところ)
function katsucode_custom_post_type()
{
  register_post_type(
    'news',
    array(
      'label' => 'News',
      'labels' => array(
        'add_new' => '新規追加',
        'edit_item' => '記事の編集',
        'view_item' => '記事の表示',
        'search_items' => '記事の検索',
        'not_found' => '記事は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に記事はありませんでした。',
      ),
      'public'       => true,
      'description'  => 'お知らせを投稿するところです。',
      'hierarchical' => true,
      'has_archive'  => true,
      "show_in_rest" => true,
      'menu_position' => 5,
      'supports'     => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'trackbacks',
        'custom-fields',
        'comments',
        'revisions',
        'author',
        'post-formats',
      ),
      'menu_icon'     => 'dashicons-welcome-write-blog'
    )
  );
  register_taxonomy(
    'news-cat',
    'news',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );
  register_taxonomy_for_object_type('news-cat', array('news'));

  register_taxonomy(
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
  register_taxonomy_for_object_type('news-tag', array('news'));
  
  register_post_type(
    'project',
    array(
      'label' => 'Project',
      'labels' => array(
        'add_new' => '新規実績追加',
        'edit_item' => '実績の編集',
        'view_item' => '実績を表示',
        'search_items' => '実績を検索',
        'not_found' => '実績は見つかりませんでした。',
        'not_found_in_trash' => 'ゴミ箱に実績はありませんでした。',
      ),
      'public'       => true,
      'description'  => 'ポートフォリオを投稿するところです。',
      'hierarchical' => true,
      'has_archive'  => true,
      "show_in_rest" => true,
      'menu_position' => 5,
      'supports'     => array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'trackbacks',
        'custom-fields',
        'comments',
        'revisions',
        'author',
        'post-formats',
      ),
      'menu_icon'     => 'dashicons-art'
    )
  );
  register_taxonomy(
    'project-cat',
    'project',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );
  register_taxonomy_for_object_type('project-cat', array('project'));

  register_taxonomy(
    'project-tag',
    'project',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
  register_taxonomy_for_object_type('project-tag', array('project'));


  // register_taxonomy('genre', 'portfolio', [
  //   'label' => 'ジャンル',
  //   'hierarchical' => true,
  //   'show_in_rest' => true,
  // ]);
}
add_action('init', 'katsucode_custom_post_type');

// Sidebar ---Widget---
function my_theme_widgets_init()
{
  register_sidebar(
    array(
      'name' => esc_html__( 'Blog Sidebar', 'katsucode' ),
      'id' => 'sidebar-1',
      'before_widget' => '<aside class="widget p-blog__secondary">',
      'after_widget' => '</aside>',
      'before_title' => '<h4 class="c-title__secondary">',
      'after_title' => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__( 'Blog Footer Sidebar', 'katsucode' ),
      'id' => 'sidebar-2',
      'before_widget' => '<aside class="widget-sidebar">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-sidebar-title">',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__( 'Page Sidebar', 'katsucode' ),
      'id' => 'sidebar-3',
      'before_widget' => '<aside class="widget">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-sidebar-title">',
      'after_title' => '</h3>'
    )
  );
  register_sidebar(
    array(
      'name' => esc_html__( 'Footer Sidebar', 'katsucode' ),
      'id' => 'sidebar-4',
      'before_widget' => '<aside class="widget">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-sidebar-title">',
      'after_title' => '</h3>'
    )
  );
}
add_action('widgets_init', 'my_theme_widgets_init');



// plugin
add_action('enqueue_block_editor_assets', function () {
  wp_enqueue_script(
    'myeditor-script',
    plugins_url('myeditor.js', __FILE__)
  );
});
