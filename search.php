<?php header('Content-type: text/html; charset=utf-8'); ?>
<?
function search($words) {
$words=htmlspecialchars($words);
if ($words === "")return false;
 $query_search = "";
$arraywords=explode(" ", $words);
foreach($arraywords as $key => $value) {
if (isset($arraywords[$key - 1]))
$query_search .= ' OR ';
$query_search .= '`title` LIKE "%'.$value.'%" OR `descrip` LIKE "%'.$value.'%"' ; 
} 
$query = "SELECT * FROM search WHERE $query_search";
$mysqli = new mysqli("localhost", "admin", "12345", "base_search");
$result_set = $mysqli->query($query);
$mysqli->close();

$i = 0;
while($row = $result_set->fetch_assoc()) {
$results[$i] = $row;
$i++;

}

return $results;
}  
if (isset($_POST['bsearch'])) {
$words=$_POST['words'];
$results = search($words);

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title>Добро пожаловать!</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Город Ош, справочник по городу" />
	<meta name="keywords" content="фото, ОШ, здания, маршрутка, ВУЗы и т.д." />

	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="style/slimbox2.css" />
	
	
	<script type="text/javascript"  src="js/slide.js"></script>
	<script type="text/javascript"  src="js/jsforgal.js">   </script> 
	<script type="text/javascript"  src="js/cloud-carousel.1.0.4.min.js"> </script>
	<script type="text/javascript"  src="js/jquery.mousewheel.min.js"> </script>
	<script type="text/javascript"  src="js/slimbox2.js"> </script>
	
</head>

<body class="fon">

	<div class="MainFrame">

		<div class="Lzone"></div>
		<!--Невидимый часть -->

		<div class="Menu">
			<!-- начaло меню -->
			<div class="header">
				<img src="img/logo.png" style="margin-left: 20px;"/>
			</div>
			<br />
			<br />
			<ul id="nav">
				<li>
					<a href="index.php?view=index">Главная</a>
				</li>
				<li>
					<a class="hsubs" href="#">Отдых и развлечение</a>
					<ul class="subs">
						<li>
							<a href="index.php?view=kinoteatr">Кинотеатры</a>
						</li>
						<li>
							<a href="index.php?view=guesthouse">Гостиница</a>
						</li>
						<li>
							<a href="index.php?view=restoran">Ресторан</a>
						</li>
						<li>
							<a href="index.php?view=nigthclub">Ночные клубы</a>
						</li>
						<li>
							<a href="#">Развлекателные центры</a>
						</li>
					   <li>
							<a href="index.php?view=sportclub">Спортивные клубы</a>
						</li>
					
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">Товары и услуги</a>
					<ul class="subs">
						<li>
							<a href="index.php?view=torgovye-sentr">Торговые центры</a>
						</li>
						<li>
							<a href="#">Спермаркеты</a>
						</li>
						<li>
							<a href="#">Магазины</a>
						</li>
						<li>
							<a href="index.php?view=banks">Банки</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">Учебное заведения</a>
					<ul class="subs">
						<li>
							<a href="index.php?view=univers">ВУЗы</a>
						</li>
						<li>
							<a href="index.php?view=schools">Школы</a>
						</li>
						<li>
							<a href="#">Учебные центры</a>
						</li>
						<li>
							<a href="#">Дет сады</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">Интересное </a>
					<ul class="subs">
					<li>
						<a href="galerea.php"> Галерея </a>
					</li>
					<li>
						<a href="#"> Фото блог </a>
					</li>
					<li>
						<a href="#"> Форум </a>
					</li>
					
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">Объявления </a>
					<ul class="subs">
					<li>
						<a href="#"> Эфективная объявления </a>
					</li>
					<li>
						<a href="#"> Отдам бесплатно </a>
					</li>
					<li>
						<a href="#"> Сдать.Снять недвижимость </a>
					</li>
					
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#"> Ош &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
					<ul class="subs">
					<li>
						<a href="index.php?view=oshcity"> О городе Ош </a>
					</li>
					<li>
						<a href="#"> Новости </a>
					</li>
					<li>
						<a href="#"> Карта города </a>
					</li>
					
					</ul>
				</li>

			</ul>
			<br />
			<br />
		

			<div class="Footer">
				<p align="center">
					<br />
					<br />
					<br />
					&copy; 2014
					<a href="#">welcomeOsh.kg</a>
				</p>

			</div>

		</div>

<div class="pois">                             <!-- див поиск  -->
		                                    
		
		<form name="search" action="search.php" method="post"  style="margin: 10px 20px  5px 520px;float: right;">
         <input type="text" name="words" size="25"  placeholder="Поиск по сайту">
        <input type="submit" name="bsearch" value=" поиск ">
       </form>
		
		
		
		</div>


	<div id="workArea">
	
	
	<a href="index.php"><u>Главная </u></a> | Поиск по сайту
<?
if (isset($_POST['bsearch'])) {
echo"<br> <h1 align='center'>Результаты поиска</h1> <hr size='1' color='#107280' width='800'> <br>";
if ($words === ""){ echo "<font size='4'> Вы задали пустой запрос</font>";
 }else if(mb_strlen($words,('UTF-8')) < 2 ) { echo "<font size='4'>Слишком короткий запрос. Введите не менее 2 символа </font>" ;
}else if (count($results) == 0) echo " <font size='4'>По вашему поиску  <b>&quot;$words&quot;</b>  ничего не найдено.</font>";

else {
echo "<font size='4'>По вашему пойску <b>&quot;$words&quot;</b> найдены эти совпадении.</font> <br><br> ";

for ($i = 0; $i < count($results); $i++)
echo $results[$i]["descrip"]." <br/>";

}


}
?>	
	
	

	
	
	</div>
    
	
</div>
	
</body>
</html>