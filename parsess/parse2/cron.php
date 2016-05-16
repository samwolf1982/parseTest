<?php

// ---------------------cron_child_1 
	function cron_child_1( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_child_1' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_child_1' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_child_1', 'run_child_1' );

function run_child_1()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=85974',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_Live_hack 
	function cron_Live_hack( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_Live_hack' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_Live_hack' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_Live_hack', 'run_Live_hack' );

function run_Live_hack()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=88243',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_Big_size 
	function cron_Big_size( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_Big_size' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_Big_size' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_Big_size', 'run_Big_size' );

function run_Big_size()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=74176',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_Long_time 
	function cron_Long_time( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_Long_time' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_Long_time' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_Long_time', 'run_Long_time' );

function run_Long_time()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=79870',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_Sales 
	function cron_Sales( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_Sales' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_Sales' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_Sales', 'run_Sales' );

function run_Sales()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=57487',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_child_2 
	function cron_child_2( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_child_2' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_child_2' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_child_2', 'run_child_2' );

function run_child_2()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=76726',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_Our_shopihg 
	function cron_Our_shopihg( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_Our_shopihg' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_Our_shopihg' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_Our_shopihg', 'run_Our_shopihg' );

function run_Our_shopihg()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=45896',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_Rewievs 
	function cron_Rewievs( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_Rewievs' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_Rewievs' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_Rewievs', 'run_Rewievs' );

function run_Rewievs()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=80450',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_Ou_shoping_part_3 
	function cron_Ou_shoping_part_3( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_Ou_shoping_part_3' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_Ou_shoping_part_3' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_Ou_shoping_part_3', 'run_Ou_shoping_part_3' );

function run_Ou_shoping_part_3()
{
	# code...
   $data = array('path'=>'http://shophelp.ru/forum/showthread.php?t=94461',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php4/scanx.php';


          send_post($url,$data);
}


?>