<?php?>
                  <section>
                        <h2>shophelp.ru'</h2>
                    <div class="demo">
        <p>Ручное сканирование</p>
<?php  
//$way=plugin_dir_path(__FILE__);
$way=plugins_url();
echo '<form  method="post" action="'.$way.'/megaparse/php4/scanx.php">  ';
?>

  <select name="path">
 <option value="http://shophelp.ru/forum/showthread.php?t=94461">Ou shoping part 3</option>
    <option value="http://shophelp.ru/forum/showthread.php?t=85974">child 1</option>
    <option value="http://shophelp.ru/forum/showthread.php?t=88243">Live hack</option>
<option value="http://shophelp.ru/forum/showthread.php?t=74176">Big size</option>
<option value="http://shophelp.ru/forum/showthread.php?t=79870">Long time</option>
<option value="http://shophelp.ru/forum/showthread.php?t=57487">Sales</option>
<option value="http://shophelp.ru/forum/showthread.php?t=76726">child 2</option>
<option value="http://shophelp.ru/forum/showthread.php?t=45896">Our shopihg</option>
<option value="http://shophelp.ru/forum/showthread.php?t=80450">Rewievs</option>
              
                                
  </select><br/>
    Количество дочерних страниц для сканирования( 1 или 1):
  <input type="number" name="count" value="1" min="1" max="1"><br/>

  <input type="submit" value="Scan"/>
</form>

<br/>
<hr>
           <p>Настройки планировщика</p>
 <form hidden="true"  method="post" action="php4/scanx.php">
  <select name="path">
    <option value="http://alitrust.ru/boasts/odezhda-i-obuv" selected="selected">odezhda-i-obuv</option>
    <option value="http://alitrust.ru/boasts/bizhuteriya-i-chasy">bizhuteriya-i-chasy</option>
    <option value="http://alitrust.ru/boasts/vse-dlya-detyei">vse-dlya-detyei</option>
        <option value="http://alitrust.ru/boasts/home">home</option>
            <option value="http://alitrust.ru/boasts/pets">pets</option>
                <option value="http://alitrust.ru/boasts/telefony-i-kompyutery">telefony-i-kompyutery</option>
                    <option value="http://alitrust.ru/boasts/sumki-i-aksessuary">sumki-i-aksessuary</option>
                        <option value="http://alitrust.ru/boasts/sport-khobbi-i-razvlecheniya">sport-khobbi-i-razvlecheniya</option>
                            <option value="http://alitrust.ru/boasts/avtotovary">avtotovary</option>
                                <option value="http://alitrust.ru/boasts/elektronika">elektronika</option>
                                    <option value="http://alitrust.ru/boasts/adult18">adult18</option>
                                        <option value="http://alitrust.ru/boasts/other">other</option>
                                
  </select><br/>
    Интервал повторения в минутах:
  <input type="number" name="count" value="1" min="1" max="1440"><br/>

  <input type="submit" value="Save"/>
</form>  
<hr>
<p>очистить хеш</p>
<?php  
//$way=plugin_dir_path(__FILE__);
$way=plugins_url();
echo '<form  method="post" action="'.$way.'/megaparse/php4/clear_last.php">  ';
 ?>

	   очистка всего кеша, при следующем сканирование даные добавятся и снова.
  <input hidden="true" type="number" name="count" value="1" min="1" max="100000"><br/>
   <input type="submit" value="Очистить хеш"/>
</form>

   
</div>
                    </section>

<?php ?>