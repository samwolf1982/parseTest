<?php
/**
 * @package Akismet
 */
/*
Plugin Name: mega parse
Plugin URI: mega parse
Description: mega parse
Version: 3.1.7
Author: Automattic
Author URI: http://mega parse
License: GPLv2 or later
Text Domain: mega parse
*/

/*
mega parsemega parsemega parsemega parse.
*/

$GLOBALS['interval_alitrust'] =900;
$GLOBALS['interval_next'] = 120;
$GLOBALS['interval_add']=120; 

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

/*define( 'AKISMET_VERSION', '3.1.7' );
define( 'AKISMET__MINIMUM_WP_VERSION', '3.2' );
define( 'AKISMET__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'AKISMET__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'AKISMET_DELETE_LIMIT', 100000 );*/

register_activation_hook( __FILE__, 'plugin_activation' );

register_deactivation_hook( __FILE__, 'plugin_deactivation' );




// Hook for adding admin menus
add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages() {
	    // Add a new top-level menu (ill-advised):
    add_menu_page('Test Toplevel', 'Parse', 8, __FILE__, 'mt_toplevel_page');
    // Add a new submenu under Options:
    add_options_page('Test Options', 'Test Options', 8, 'testoptions', 'mt_options_page');

    // Add a new submenu under Manage:
    add_management_page('Test Manage', 'Test Manage', 8, 'testmanage', 'mt_manage_page');



    // Add a submenu to the custom top-level menu: alitrust.ru/boasts
    add_submenu_page(__FILE__, 'alitrust.ru/boasts', 'alitrust.ru/boasts', 8, 'sub-page', 'mt_sublevel_page');

    // Add a second submenu to the custom top-level menu:
    add_submenu_page(__FILE__, 'shophelp.ru', 'shophelp.ru', 8, 'sub-page2', 'mt_sublevel_page2');

      // Add a second submenu to the custom top-level menu:
    add_submenu_page(__FILE__, 'anti-free.ru', 'anti-free.ru', 8, 'sub-page3', 'mt_sublevel_page3');
}

// mt_options_page() displays the page content for the Test Options submenu
function mt_options_page() {

    echo "<h2>Test Options</h2>";
}

// mt_manage_page() displays the page content for the Test Manage submenu
function mt_manage_page() {
    echo "<h2>Test Manage</h2>";
}

// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function mt_toplevel_page() {
    echo "<h2>Глобальные настройки</h2>";
}

// mt_sublevel_page() displays the page content for the first submenu
// of the custom Test Toplevel menu
//// "<h2>Test Sublevel 1</h2>";
function mt_sublevel_page() {

	require_once 'parsess/parse1/wiew.php';


 //$my_settings_page = new MySettingsPage();
}

// mt_sublevel_page2() displays the page content for the second submenu
// of the custom Test Toplevel menu
   // "<h2>Test Sublevel 2</h2>";
function mt_sublevel_page2() {


   // echo "<h2>Test Sublevel 2</h2>";
    	require_once 'parsess/parse2/wiew.php';


}

// mt_sublevel_page3() displays the page content for the second submenu
// of the custom Test Toplevel menu
   // "<h2>Test Sublevel 2</h2>";
function mt_sublevel_page3() {


   // echo "<h2>Test Sublevel 2</h2>";
    	require_once 'parsess/parse3/wiew.php';


}


	/* 
	 *activator
	 */
	 function plugin_activation() {
		




	}

/*
	


// cron         
	//------------  alitrust.ru/boasts
	add_filter( 'cron_schedules', 'cron_other');
	
	
	add_filter( 'cron_schedules', 'cron_bizhuteriya_i_chasy');
	add_filter( 'cron_schedules', 'cron_vse_dlya_detyei');
	add_filter( 'cron_schedules', 'cron_home');
	add_filter( 'cron_schedules', 'cron_telefony_i_kompyutery');
	add_filter( 'cron_schedules', 'cron_sumki_i_aksessuary');
	add_filter( 'cron_schedules', 'cron_sport_khobbi_i_razvlecheniya');
add_filter( 'cron_schedules', 'cron_avtotovary');
add_filter( 'cron_schedules', 'cron_elektronika');
add_filter( 'cron_schedules', 'cron_adult18');
add_filter( 'cron_schedules', 'cron_odezhda_i_obuv');
   require_once 'parsess/parse1/cron.php';

//------        shophelp.ru/forum
	add_filter( 'cron_schedules', 'cron_Ou_shoping_part_3');
		add_filter( 'cron_schedules', 'cron_Rewievs');
			add_filter( 'cron_schedules', 'cron_Our_shopihg');
				add_filter( 'cron_schedules', 'cron_child_2');
					add_filter( 'cron_schedules', 'cron_Sales');
						add_filter( 'cron_schedules', 'cron_Long_time');
							add_filter( 'cron_schedules', 'cron_Big_size');
								add_filter( 'cron_schedules', 'cron_Live_hack');
									add_filter( 'cron_schedules', 'cron_child_1');


      require_once 'parsess/parse2/cron.php';



//  anty-free

      	add_filter( 'cron_schedules', 'cron_a_free');


      require_once 'parsess/parse3/cron.php';


*/


//require_once 'parsess/parse2/cron.php';
// ---------------------cron_other 








function send_post($url,$data)
{
	# code...
	$data=$data;

$url=$url;
$result = file_get_contents($url, false, stream_context_create(array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data)
    )
)));
}

/**
	 *deactivator
	 */
/*	 function plugin_deactivation( ) {
		//return self::deactivate_key( self::get_api_key() );
		wp_clear_scheduled_hook('myprefix_cron_avtotovary');
		wp_clear_scheduled_hook('myprefix_cron_elektronika');
		wp_clear_scheduled_hook('myprefix_cron_adult18');
		wp_clear_scheduled_hook('myprefix_cron_other');
		wp_clear_scheduled_hook('myprefix_cron_telefony_i_kompyutery');
		wp_clear_scheduled_hook('myprefix_cron_sumki_i_aksessuary');
		wp_clear_scheduled_hook('myprefix_cron_sport_khobbi_i_razvlecheniya');
		wp_clear_scheduled_hook('myprefix_cron_pets');
		wp_clear_scheduled_hook('myprefix_cron_bizhuteriya_i_chasy');
		wp_clear_scheduled_hook('myprefix_cron_odezhda_i_obuv');
		wp_clear_scheduled_hook('myprefix_cron_vse_dlya_detyei');
		wp_clear_scheduled_hook('myprefix_cron_home');

//******
		wp_clear_scheduled_hook('myprefix_cron_child_1');
			wp_clear_scheduled_hook('myprefix_cron_Live_hack');
				wp_clear_scheduled_hook('myprefix_cron_Big_size');
					wp_clear_scheduled_hook('myprefix_cron_Long_time');
						wp_clear_scheduled_hook('myprefix_cron_Sales');
							wp_clear_scheduled_hook('myprefix_cron_child_2');
								wp_clear_scheduled_hook('myprefix_cron_Our_shopihg');
									wp_clear_scheduled_hook('myprefix_cron_Rewievs');
										wp_clear_scheduled_hook('myprefix_cron_Ou_shoping_part_3');

//**********       
 
		wp_clear_scheduled_hook('myprefix_cron_a_free');
 
	}*/