<?php

add_action( 'myprefix_cron_other', 'run_other' );
	function cron_other( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_other' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_other' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
function run_other()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/other',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_adult18 
	function cron_adult18( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_adult18' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_adult18' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_adult18', 'run_adult18' );

function run_adult18()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/adult18',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}


// ---------------------cron_elektronika 
	function cron_elektronika( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_elektronika' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_elektronika' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_elektronika', 'run_elektronika' );

function run_elektronika()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/elektronika',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}

// ---------------------cron_sport_khobbi_i_razvlecheniya 
	function cron_sport_khobbi_i_razvlecheniya( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_sport_khobbi_i_razvlecheniya' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_sport_khobbi_i_razvlecheniya' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_sport_khobbi_i_razvlecheniya', 'run_sport_khobbi_i_razvlecheniya' );

function run_sport_khobbi_i_razvlecheniya()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/sport_khobbi_i_razvlecheniya',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}


// ---------------------cron_avtotovary 
	function cron_avtotovary( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_avtotovary' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_avtotovary' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_avtotovary', 'run_avtotovary' );

function run_avtotovary()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/avtotovary',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}



// ---------------------cron_telefony_i_kompyutery 
	function cron_telefony_i_kompyutery( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_telefony_i_kompyutery' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_telefony_i_kompyutery' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_telefony_i_kompyutery', 'run_telefony_i_kompyutery' );

function run_telefony_i_kompyutery()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/telefony-i-kompyutery',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}



//http://alitrust.ru/boasts/sumki_i_aksessuary

// ---------------------cron_sumki_i_aksessuary 
	function cron_sumki_i_aksessuary( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_sumki_i_aksessuary' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_sumki_i_aksessuary' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_sumki_i_aksessuary', 'run_sumki_i_aksessuary' );

function run_sumki_i_aksessuary()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/sumki-i-aksessuary',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}

   // ---------------------cron_home 
	function cron_home( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_home' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_home' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_home', 'run_cron_home' );

function run_cron_home()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/home',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}


// ---------------------cron_pets 
	function cron_pets( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_pets' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_pets' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_pets', 'run_pets' );

function run_pets()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/pets',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}

//------------------ bizhuteriya_i_chasy
	function cron_bizhuteriya_i_chasy( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_bizhuteriya_i_chasy' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_bizhuteriya_i_chasy' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_bizhuteriya_i_chasy', 'run_bizhuteriya_i_chasy' );

function run_bizhuteriya_i_chasy()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/bizhuteriya-i-chasy',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}

//------------------ vse_dlya_detyei
	function cron_vse_dlya_detyei( $schedules ) {
			$schedules['weekly'] = array(
				'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_vse_dlya_detyei' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_vse_dlya_detyei' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_vse_dlya_detyei', 'run_vse_dlya_detyei' );

function run_vse_dlya_detyei()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/vse-dlya-detyei',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}


// ---------------------cron_odezhda_i_obuv 
	function cron_odezhda_i_obuv( $schedules ) {
			$schedules['weekly'] = array(
				//'interval' => $GLOBALS['interval_alitrust'], // каждые 2 сикунды
				'interval' => 120, // каждые 2 сикунды
				'display'  => __( 'Once Weekly' ),
			);
			return $schedules;
	}
	if ( ! wp_next_scheduled( 'myprefix_cron_odezhda_i_obuv' ) ) {
			wp_schedule_event( time()+$GLOBALS['interval_next'], 'weekly', 'myprefix_cron_odezhda_i_obuv' );
			$GLOBALS['interval_next']+=$GLOBALS['interval_add'];
	}
add_action( 'myprefix_cron_odezhda_i_obuv', 'run_odezhda_i_obuv' );

function run_odezhda_i_obuv()
{
	# code...
   $data = array('path'=>'http://alitrust.ru/boasts/odezhda-i-obuv',
              'count'=>'1'
              );
          $url='http://imageplugin.dev/wp-content/plugins/megaparse/php3/scanx.php';


          send_post($url,$data);
}



?>