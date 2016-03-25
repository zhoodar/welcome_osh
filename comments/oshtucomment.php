

  <div class="comment">
  <div class="cart"></div>
 
  
  <?
 
if($_GET['c'] == ''){
 
print "
<form>
  <input type='hidden' name='c' value='obr' />
  <b>Имя:</b> <br><input type='text' name='name' value='' class='pole' /><br>
  <b>Дата отзыва:</b> <br><input type='date' name='tems' value='' class='pole' /><br>
  <b>Отзыв:</b><br>
  <textarea name='content' cols='60' rows='6' class='pole'></textarea><br><br>
  <input type='submit' value='Оставить свой отзыв' />
</form> ";
 
 
$fp = fopen("comments/oshtu.txt", "r"); // Открываем файл в режиме чтения
if ($fp) 
{
while (!feof($fp))
{
$mytext = fgets($fp, 999);
echo $mytext." <br />";
}
}
else echo "Ошибка при открытии файла";
fclose($fp);
 
 
}elseif($_GET['c'] == 'obr'){
  // заносим в массив значение полей
  $znach = array(
    1 => $_GET['name'],
    2 => $_GET['tems'],
    3 => $_GET['content']
  );
  
  if( !$znach[1] ){ print "Поле <b>Имя</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else
  if( !$znach[2] ){ print "Поле <b>Тема отзыва</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else
  if( !$znach[3] ){ print "Поле <b>Отзыв</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else{
  
  
$fp = fopen("comments/oshtu.txt", "a+"); // Открываем файл в режиме записи 
$mytext = "\r\n" . "Отзыв дабавил(а): ". "<strong>" . $znach[1] ." </strong>" . "\r\n" . "Дата:". "<strong>".$znach[2]."</strong>"  . "\r\n" .$znach[3] ."\r\n"."<HR>"; // Исходная строка
$test = fwrite($fp, $mytext); // Запись в файл
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fp); //Закрытие файла
 
 
print "<meta http-equiv='Refresh' content='0; url=?c=' >";
}
}
 
?>
 
</div>


