<?php

/*
タイトルタグの自動挿入
*/
add_theme_support('title-tag');


/*
wordpressで特殊文字を画像に置換してしまう設定を削除
*/

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );



/*
wp_headの情報を削除
*/

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);


//投稿に画像を挿入した際にclass,titleが自動で挿入されるのを回避
function remove_img_attr($html, $id, $alt, $title, $align, $size) {
  $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html);
  return preg_replace('/ class=[\'"]([^\'"]+)[\'"]/i', '', $html);
}
add_filter('get_image_tag','remove_img_attr', 10, 6);



//wpでデフォルトでは絶対パスで指定する関数を相対パスに変更。
//http://www.warna.info/archives/20/

function make_href_root_relative($input) {
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

function root_relative_permalinks($input) {
    return make_href_root_relative($input);
}


add_filter( 'template_directory_uri', 'root_relative_permalinks' );
add_filter( 'the_permalink', 'root_relative_permalinks' );


function delete_host_from_attachment_url( $url ) {
    $regex = '/^http(s)?:\/\/[^\/\s]+(.*)$/';
    if ( preg_match( $regex, $url, $m ) ) {
        $url = $m[2];
    }
    return $url;
}
add_filter( 'wp_get_attachment_url', 'delete_host_from_attachment_url' );


/*
管理画面の不要な要素を削除
*/

add_action('admin_menu', 'remove_admin_menus');

function remove_admin_menus() {
    // 管理者以外のユーザーを対象
        global $menu;
    if (!current_user_can('administrator')) {

        // unsetで非表示にするメニューを指定
        // unset($menu[2]);        ダッシュボード
        unset($menu[5]);       // 投稿
        unset($menu[10]);       //メディア
        unset($menu[20]);       //固定ページ
        unset($menu[25]);       // コメント
        unset($menu[60]);       // 外観
        unset($menu[65]);       // プラグイン
        unset($menu[70]);       // ユーザー
        unset($menu[75]);       // ツール
        unset($menu[80]);       // 設定
 
    }else{
        unset($menu[10]);       //メディア
        unset($menu[25]);       // コメント
    }
}



/*
画像サイズを設定
*/

add_action('init', 'mytheme_setup'); 

function mytheme_setup() {

  add_editor_style();

  add_theme_support( 'post-thumbnails' );
  add_image_size( 'スクエアサムネイル', 200, 200, true);

  update_option('thumbnail_size_w', 400);
  update_option('thumbnail_size_h', 200);
  update_option("thumbnail_size_crop", "1");

  update_option('medium_size_w', 9999);
  update_option('medium_size_h', 600);

  update_option('large_size_w', 1200);
  update_option('large_size_h', 9999);

    $webshufu_default_imagelink = get_option( 'image_default_link_type' );

    if ($webshufu_default_imagelink !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}

function additional_image_size_names_choose($sizes){
  /* add_img_sizeで追加したサイズを投稿画面に追加する */
  global $_wp_additional_image_sizes;

  if ( $_wp_additional_image_sizes ) {
    foreach ( $_wp_additional_image_sizes as $key => $value ) {
      if ( !$sizes[$key] )
        $sizes[$key] = $key;
    }
  }

  return $sizes;
}
add_filter('image_size_names_choose','additional_image_size_names_choose');




/*
ユーザー権限の設定
*/

function add_theme_caps(){
	$role = get_role( 'editor' );
	$role->add_cap( 'upload_files' );
}
add_action( 'admin_init', 'add_theme_caps' );


function remove_theme_caps(){
	$role = get_role( 'editor' );
	$role->remove_cap( 'upload_files' );
}
add_action( 'admin_init', 'remove_theme_caps' );




/*
  固定ページの作成および表示設定の変更
 https://ibgroup.co.jp/wordpress-create-pages-and-setting/
 */

function create_pages_and_setting() {
  if ( 'page' === get_option('show_on_front') ) {
    return;
  } else {
    if ( get_page_by_path('parts') === null && get_page_by_path('js') === null ) {
      $partsPage = wp_insert_post(
        array(
          'post_title'   => 'Parts',
          'post_name'    => 'parts',
          'post_status'  => 'publish',
          'post_type'    => 'page',
          'page_template'  => '_original_parts.php',
          'post_content' => '',
        )
      );
      $jsPage = wp_insert_post(
        array(
          'post_title'   => 'Js sample',
          'post_name'    => 'js',
          'post_status'  => 'publish',
          'post_type'    => 'page',
          'page_template'  => '_original_js.php',
          'post_content' => '',
        )
      );
      if ( $partsPage && $jsPage ) {
        // update_option('show_on_front', 'page');
        update_option('page_on_front', $partsPage);
        update_option('page_on_front', $jsPage);
      }
    }
  }
}

add_action('after_setup_theme', 'create_pages_and_setting');


/*
カスタム投稿タイプ、タクソノミーを設定
*/

function my_custom_stuff(){
	  register_post_type(
    'original_ptName',
    array(
      'label' => __('ptName'),
      'singular_label' => __('カスタム投稿タイプ1'),
      'public' => true, //この欄はfalseにすることでページを作成せずにDB的に利用できる。
      'exclude_from_search' => false,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'ptName', 'with_front' =>false ),
      'query_var' => false,
      'supports' => array(
	'title',
	'editor',
	'revisions',
	'thumbnail'
      ),
    )
  );

	register_taxonomy(
	'TaxName',
	array('post'),
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'TaxName',
			'singular_label' => 'TaxName',
			'public' => true,
			'show_ui' => true
		)
	);
}

add_action('init', 'my_custom_stuff'); 



/*
スマートカスタムフィールドを設定
*/

add_filter( 'smart-cf-register-fields', 'my_register_fields', 10, 4 );
function my_register_fields( $settings, $type, $id, $meta_type ) {
  $set1 = SCF::add_setting( 'setId1', 'アウトライン' );
  $set1->add_group( 'setId1-1', false, array(
      array(
        'name'  => 'original_txt',
        'label' => '1行テキスト',
        'type'  => 'text'
      ),
     array(
        'name'  => 'original_txtArea',
        'label' => 'テキストエリア',
        'type'  => 'textarea'
      ),
     array(
        'name'  => 'original_data',
        'label' => '日付入力',
        'type'  => 'datepicker'
      ),
     array(
        'name'  => 'original_img',
        'label' => '画像',
        'type'  => 'image'
      ),
     array(
        'name'  => 'original_file',
        'label' => '添付',
        'type'  => 'file'
      )
  ));

  if($type == 'post'){
    $settings[] = $set1;
    return $settings;
  }

  }




?>