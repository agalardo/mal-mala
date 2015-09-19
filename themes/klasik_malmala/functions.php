<?php

/********** KLASIK DEFINITION *************/
global $themeoptionsvalue,  $meta_boxes;

if ( ! isset( $content_width ) ) $content_width = 1140;
$child_path			= get_stylesheet_directory() . '/';
//$admin_path 		= get_template_directory() . '/admin/';
$includes_path 		= get_template_directory() . '/includes/';
$meta_boxes 		= array(); 

define('KLASIK_THEMENAME', 'Klasik');
define('KLASIK_PARENTMENU_SLUG', 'klasiktheme-settings');

/********** END KLASIK DEFINITION *************/

// Theme Options
require_once $includes_path . 'theme-admin.php';

//Theme init
require_once $includes_path . 'theme-init.php';

//Metabox Function
require_once $includes_path . 'theme-metaboxes.php';

//Widgets
require_once $includes_path . 'theme-widgets.php';

//Sidebar
require_once $includes_path . 'theme-sidebar.php';

//Additional function
require_once $includes_path . 'theme-function.php';

//Header function
require_once $includes_path . 'header-function.php';

//Footer function
require_once $includes_path . 'footer-function.php';

//Loading jQuery
require_once $includes_path . 'theme-scripts.php';

//Loading Style Css
require_once $includes_path . 'theme-styles.php';

if(file_exists($child_path . 'includes/child-functions.php')){
	require_once $child_path . 'includes/child-functions.php';
}

if(file_exists($child_path . 'includes/child-metaboxes.php')){
	require_once $child_path . 'includes/child-metaboxes.php';
}

if(file_exists($child_path . 'includes/child-shortcodes.php')){
	require_once $child_path . 'includes/child-shortcodes.php';
}


//Добавляем Иконку Корзины В Меню С Количеством И Суммой В WooCommerce
//* Активируем поддержку шрифта Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );

}

/**
 * Помещаем иконку корзины с количеством товаров и общей стоимостью в меню навигации.
 *
 * Источник: http://wordpress.org/plugins/woocommerce-menu-bar-cart/
 */
add_filter('wp_nav_menu_items','sk_wcmenucart', 10, 2);
function sk_wcmenucart($menu, $args) {

	// Проверяем, установлен ли и активирован плагин WooCommerce и добавляем новый элемент в меню, назначенному основным меню навигации
	if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'mainmenu' !== $args->theme_location )
		return $menu;

	ob_start();
		global $woocommerce;
		$viewing_cart = __('View your shopping cart', 'your-theme-slug');
		$start_shopping = __('Start shopping', 'your-theme-slug');
		$cart_url = $woocommerce->cart->get_cart_url();
		$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		$cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'your-theme-slug'), $cart_contents_count);
		$cart_total = $woocommerce->cart->get_cart_total();
		// Раскомментируйте строку ниже для того, чтобы скрыть иконку корзины в меню, когда нет добавленных товаров в корзине.
		 if ( $cart_contents_count > 0 ) {
			if ($cart_contents_count == 0) {
				$menu_item = '<li class="right"><a class="wcmenucart-contents" href="'. $shop_page_url .'" title="'. $start_shopping .'">';
			} else {
				$menu_item = '<li class="right"><a class="wcmenucart-contents" href="'. $cart_url .'" title="'. $viewing_cart .'">';
			}

			$menu_item .= '<i class="fa fa-shopping-cart"></i> ';

			$menu_item .= $cart_contents.' - '. $cart_total;
			$menu_item .= '</a></li>';
		// Раскомментируйте строку ниже для того, чтобы скрыть иконку корзины в меню, когда нет добавленных товаров в корзине.
		 }
		echo $menu_item;
	$social = ob_get_clean();
	return $menu . $social;

}
?>