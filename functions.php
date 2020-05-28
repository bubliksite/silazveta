<?

/** Перечень стилей и скриптов **/
function load_style_script () {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Отключаем визуальный редактор **/
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');