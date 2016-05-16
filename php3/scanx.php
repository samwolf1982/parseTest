<?php
header('Content-Type: text/html; charset=utf-8');
//                 caci@leeching.net   mail
//    db                us                 pass

require_once ('../phpQuery/phpQuery/phpQuery.php');
require_once 'setings.php';


/*require_once 'is_present.php';
require_once 'Manager.php';
require_once 'Sites.php';
require_once 'Parse_a1.php';
require_once 'Sent_to_WP.php';*/
 phpQuery::ajaxAllowHost($GLOBALS['curent_host']);
                    // 50 el
$GLOBALS['is_end'] = false;
if(isset($argv)){

  if (isset($argv[2]) && is_numeric($argv[2])) {

for ($i=1; $i <=intval($argv[2]) ; $i++) {

if($i==1){
  try {
     scanx($argv[1]); 

  } catch (Exception $e) {
     echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
  }


}else{
        
        scanx($argv[1].'?page='.$i);

}

// end loop console
}
/*  for ($i=1; $i <=intval($argv[2]) ; $i++) {

  	# code...else{

  	if($i==1){


  
 try {
 echo "<br>i==".$i.' Line '.__LINE__.PHP_EOL;
 		 scanx($argv[1]); 
        echo "END scanx 1 ".' Line '.__LINE__.PHP_EOL.PHP_EOL;
 	
 } catch (Exception $e) {
 	 echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
 }


  	}
    else
{ 
 try {
 	echo "<br>page i==".$i.' Line '.__LINE__.PHP_EOL;
	scanx($argv[1].'?page='.$i);


 	
 } catch (Exception $e) {
 	 echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
 }

}
  }
    }*/

// end if numeric console
    die();
}
die();
// end console
} 



//     POST
if(isset($_POST['path'])&&isset($_POST['count'])){

//echo "string";
  $c=intval($_POST['count']);  
 for ($i=1; $i <=$c ; $i++) { 

  if($i==1){

                   try {
              scanx($_POST['path']);
                } catch (Exception $e) {
                      echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
                    }
    
           }
           else
           {

                   try {
               scanx($_POST['path'].'?page='.$i);

  

  
                    } catch (Exception $e) {
                      echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
                    }
          }
      
 // end loop
 }


 // end post
}


/*
if(isset($_POST['path'])){

	if(isset($_POST['path'])){
			  // echo $_POST['path'];
	//die();
		if(isset($_POST['count'])){

			 for ($i=1; $i <=intval($_POST['count']) ; $i++) { 
			 	# code...
			 	if($i==1){
          scanx($_POST['path']);}else{
 try {
			 				 scanx($_POST['path'].'?page='.$i);

 	

 	
 } catch (Exception $e) {
 	 echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
 }



			 				}
			 }

		}else{
try{
	// scanx($_POST['path']);

 	

 	
 } catch (Exception $e) {
 	 echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
 }


	}
	}
		else{
			try{
	$path_site='http://alitrust.ru/boasts/odezhda-i-obuv';
echo "117";
 echo $_POST ;
           scanx($path_site);

 	

 	
 } catch (Exception $e) {
 	 echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
 }


       }

}
*/





 function scanx($path_site)
{
	//$path_site='http://alitrust.ru/boasts/odezhda-i-obuv';
	# code...
  
	$file_c = file_get_contents($GLOBALS['path_hash']);
        $all_hasess = explode(",",trim($file_c));
$GLOBALS['counter']=count($all_hasess);

  phpQuery::get($path_site,function ($do)
    {
    	# code...
         $arrayName = array('main' =>'div.b-boast-list__item:nth-child() ', 'links_add_a'=>'div.b-boast-list__item:nth-child(' );

 // $obj=new Parse_alitruse($arrayName,'http://alitrust.ru');
   # code...
  // create page    witn 50 el 
      $document=phpQuery::newDocument($do);
  



  //      take count  
 $total_count =$document->find($str=str_replace('>', '','div.b-boast-list__item:nth-child() ')   )->count();


//***** 



 // 1  loop
    # code...    count == 50    manual 1  // собрать ссилки на дочер ст.
 //for ($i=1; $i <= $total_count-$total_count+2 ; $i++) { 
     $child_links=array();
    // echo "TOTAL COUNT ".$total_count.PHP_EOL;
 	for ($i=1; $i <= $total_count ; $i++) { 
  // результат для сссылок на дочерние страницы
           $res=array();
      
  # code...
     $a_main='div.b-boast-list__item:nth-child('.$i.") a";
     $el=$document->find($str=str_replace('>', '', $a_main) );
//$a="div.b-boast-list__item:nth-child(".$i.") img";
$pq=pq($el);

// result    формирование полной ссылки
$child_links[]=$GLOBALS['curent_host_full'].$pq->attr('href');
//$res['href']=$obj->curenhost.$pq->attr('href');
 
$pq=null;


   // end loop
  }

// loop 2  проход по 50 ссилок  sett time script (50*4)
  try {
   set_time_limit($total_count*3); 
} catch (Exception $e) {
    echo 'Выброшено исключение: для  set_time_limit() ',  $e->getMessage(), "\n";
}
$c=count($child_links);

 echo "TOTAL COUNT ".$c.' Line '.__LINE__.PHP_EOL.PHP_EOL;
 
///     проход по всем 50 ссилкам для нахождения тех что нету в хеше

$result_links = array();

foreach ($child_links as $key => $value) {
  # code...
//echo "VAL:  ".$value."  line ".__LINE__.PHP_EOL;
  //           balue       ccилка
      $hash_temp=hash('ripemd160', $value);

// если нету то запись в конец
    if( is_present($hash_temp)==false){
         $result_links[]=$value;  

    }

}


 echo "Only count ".count($result_links).' Line '.__LINE__.PHP_EOL.PHP_EOL;

 foreach ($result_links as $key => $value) {
   # code...
 echo "Find ".$value.' Line '.__LINE__.PHP_EOL.PHP_EOL;

   sleep(rand(1,2));
echo PHP_EOL."after sleep".PHP_EOL;
  // поход в дочерние ссылки по полной ссылке выше
  $r=go_to_main_el($value,$GLOBALS['curent_host_full']);


$res['fotos']=$r['fotos'];
$res['text']=$r['text'];
//$obj->result[]=$res;

// post to wp

$path_parts = pathinfo($value);




$data='title='.$path_parts['dirname'].'&'.create_content($res);
//echo PHP_EOL."CONTENT ".$data."  ".PHP_EOL;
// отправка на вп
$wp=send('root',$data);
//$wp=send($GLOBALS['author'],$data);
//$wp->send('root');

//$GLOBALS['counter']++;
echo "ok aftre send + $value   ".' Line '.__LINE__.PHP_EOL;


//   end loop для обхода найденых ссилок

 }
// теперь проход то мем что ос






/*
for ($i=0; $i < $c; $i++) { 
	# code...

// is present  only link 
     

  if ($GLOBALS['is_end'] == true) {
    # code...
    break;
  }
$value=$child_links[$i];*/








/*

  # code...
    $hash_temp=hash('ripemd160', $value);
      if( is_present($hash_temp)==false){

         // поход в дочерние ссылки по полной ссылке выше
  $r=go_to_main_el($value,$GLOBALS['curent_host_full']);

  sleep(rand(1,2));
        

   // проверка на совпадение  сделать     false    go to wp 


$res['fotos']=$r['fotos'];
$res['text']=$r['text'];


// post to wp

$path_parts = pathinfo($value);




$data='title='.$path_parts['dirname'].'&'.create_content($res);
echo PHP_EOL."CONTENT ".$data."  ".PHP_EOL;
$wp=send('root',$data);

echo "ok + $value \n ";

}else{
	$file_c = file_get_contents($GLOBALS['path_hash']);
        $all_hasess = explode(",",trim($file_c));
        $count=count($all_hasess);


  echo 'Есть совпадение \n'.$value.'\n  дальше не обрабатываеться. Добавлено'.($count-$GLOBALS['counter']).'  <br/>  hash: '.hash('ripemd160', $r['text'])."  <br>";

  //если надо то закоментировать и будет проверять все ссилки
  die();
   break;
}

*/



   // end loop 2
         //  }
  //*****
 
   $document=null;
echo "<br? Найдено: ".$GLOBALS['counter'].' елементов<br>';






   //print_r($obj->result);


             


     //end anonim n GET
    }); 



//die();
// end fun scanx    
}

    // переход на страницу  собратть aдресс фото и текст
function go_to_main_el($link,$host)
  {

   //temp=array(); // fotos[] text
     $temp=$host; // fotos[] text
try{
     phpQuery::get($link, array(), function ($d) use (&$temp)
     {
      $host=$temp;
      $temp=array();
       # code...
  
     $doc=phpQuery::newDocument($d);
                   // image 
  $a_main=".fotorama > img:nth-child()";
$el=$doc->find($str=str_replace('>', '', $a_main) );
$total_count =$doc->find($str=str_replace('>', '', $a_main) )->count();

//$resarr=array();
 for ($i=1; $i <=$total_count ; $i++) { 
  # code...
  $a_main=".fotorama > img:nth-child(".$i.")";
$el=$doc->find($str=str_replace('>', '', $a_main) );
$temp['fotos'][]=$host.pq($el)->attr('src');
 }
// текст
$a_main='div.stripe > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > p';
$el=$doc->find($str=str_replace('>', '', $a_main) );


$temp['text']=pq($el)->text();

     }, "GET"); 


 	
 } catch (Exception $e) {
 	 echo 'Выброшено исключение: для  scanx ',  $e->getMessage(), "\n";
 }


      
      $doc=null;
  return $temp;
  //  end go_to_main_el
}


//    fasle если нету
function is_present($value)
  {
//echo "VAL ".$value.PHP_EOL;
$path=$GLOBALS['path_hash'];
    if (!file_exists($path)) {
$myfile = fopen($path, "w") or die("Unable to open file!");
fclose($myfile);
}
         // добавить блокировку
    $file_c = file_get_contents($GLOBALS['path_hash']);
        $all_hasess = explode(",",trim($file_c));
    # code...
    if(!in_array($value, $all_hasess)){
                   //$all_hasess[]=$value;
                   // работа дальше
         file_put_contents($path, (','.$value) ,FILE_APPEND | LOCK_EX);
//echo "Im not in arr";

           // die();
                   return false;
    }
    else {
      //die();
     // return false; //    //remove later
      $GLOBALS['is_end']=true;
      //echo "P is die";
     // die();
       return true;
    }
  // end  is_present
  }
	 function create_content($data)
{
  $res='';
  $thumb=$data['fotos'][0];
  foreach ($data['fotos'] as $key => $value) {
    # code...

   $res.=('<p><img src="'.$value.'" /></p>');
   
  }

     $res.='<p>'.$data['text'].'</p>';
  # code...

  return 'content='.$res.'&thumd='.$thumb;
 // end create_content
}

	 function send($autor,$data)
	{
		


$path=$GLOBALS['path_to_WP']; 


// test 
// $data2='json=posts/create_post&autor='.$autor.'&'.$data;
// echo "------".$path.$data2.PHP_EOL;
//error_log('curl  ',3,'log.txt');
//http://dscnt.pro/api/posts/create_post/
$path="http://dscnt.pro/api/posts/create_post/";
		# code...
 if( $curl = curl_init() ) {


    curl_setopt($curl, CURLOPT_URL, $path);
  //http://dscnt.pro/?json=posts/create_post
     // curl_setopt($curl, CURLOPT_URL, $path."/?json=posts/create_post/");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, false);

//$data2='json=posts/create_post&autor='.$autor.'&'.$data;
 $data2='autor='.$autor.'&'.$data;    
    // error_log($data2.PHP_EOL.PHP_EOL,3,'logERROR.txt');
    curl_setopt($curl, CURLOPT_POSTFIELDS,$data2);
      echo "IN CURL ".$path.$data2;
    $out = curl_exec($curl);


     echo "CURL "  .$out;
    curl_close($curl);
    "<br? Найдено: ".$GLOBALS['counter']++.' елементов<br>';
  }else
  {

    echo "cant curl_init CURL   line".__LINE__.PHP_EOL;
  }

 // end send 
  
	}

  function create_title($value)
  {
    # code...
       

  }



//die();
?>