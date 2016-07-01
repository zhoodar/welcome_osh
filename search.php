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
		<title>Поиск по сайту!</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="Город Ош, справочник по городу" />
		<meta name="keywords" content="фото, ОШ, здания, маршрутка, ВУЗы и т.д." />

		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="stylesheet" type="text/css" href="style/slimbox2.css" />
		
		<script type="text/javascript"  src="js/slide.js"></script>
		<script type="text/javascript"  src="js/jsforgal.js">   </script> 
	</head>

	<body class="fon">

		<div class="MainFrame">
			<div class="header">
				 <div style=" margin:10px 10px 30px 180px; float: inherit; 	"><img src="img/logo.png "></div>	
				 <div style="background: #aad5ee; height: 30px; opacity:0.6;"> </div>
			</div>
			 <div class="pois">                             <!-- Под головной  -->
			     <a  href="index.php?view=index"><img style="margin: 10px;" src="img/dom_white.png" ></a>            
			     <form  name="search" action="search.php" method="post"  style="margin: 7px 30px  5px 520px;float: right;">
	                   <input class="find_text" type="text" name="words" size="25"  placeholder="Поиск по сайту">
	                   <input class="find" type="submit" name="bsearch" value=" поиск ">
	             </form>
			</div>

			<div class="Menu"> <!-- начaло меню -->
				
				<ul id="navmenu-v">
					<li><a href="index.php?view=index">Главная</a></li>
					<li><a href="#">Отдых и развлечение</a>
						<ul >
							<li><a href="index.php?view=kinoteatr">Кинотеатры</a></li>
							<li><a href="index.php?view=guesthouse">Гостиницы</a></li>
							<li><a href="index.php?view=restoran">Ресторан</a></li>
							<li><a href="index.php?view=nigthclub">Ночные клубы</a></li>
							<li><a href="index.php?view=sportclub">Спортивные клубы</a></li>										
						</ul>
					</li>
					<li><a href="#">Товары и услуги</a>
						<ul >
							<li><a href="index.php?view=torgovye-sentr">Торговые центры</a></li>
							<li><a href="index.php?view=market">Супермаркеты</a></li>
							<li><a href="index.php?view=butik">Магазины(бутик)</a></li>
							<li><a href="index.php?view=attorney">Нотариус</a></li>
							<li><a href="index.php?view=banks">Банки</a></li>
						</ul>
					</li>
					<li><a href="#">Учебное заведения</a>
						<ul >
							<li><a href="index.php?view=univers">ВУЗы</a></li>
							<li><a href="index.php?view=schools">Школы</a></li>
							<li><a href="index.php?view=uch_center">Учебные центры</a></li>
							<li><a href="index.php?view=detskiesady">Дет сады</a></li>
						</ul>
					</li>
					
					<li><a href="#">Интересное </a>
						<ul >
							<li><a href="galerea.php"> Галерея </a></li>
							<li><a href="index.php?view=panorama"> Панорама </a></li>
						</ul>
					</li>
					<li><a  href="#"> Ош </a>
						<ul >
							<li><a href="index.php?view=oshcity"> О городе Ош </a></li>
							<li><a href="#"> Новости </a></li>
							<li><a href="#"> Карта города </a></li>
						</ul>
					</li>
				</ul>
			
			</div>


		<div id="workArea">
			<a href="index.php"><u>Главная </u></a> | Поиск по сайту
			<?
			if (isset($_POST['bsearch']))
			{
				echo"<br> <h1 align='center'>Результаты поиска</h1> <hr size='1' color='#107280' width='800'> <br>";
				if ($words === "")
				{
					echo "<font size='4'> Вы задали пустой запрос</font>";
				}
				else if(mb_strlen($words,('UTF-8')) < 2 )
			    {
			    	 echo "<font size='4'>Слишком короткий запрос. Введите не менее 2 символа </font>" ;
				}
				else if (count($results) == 0)
			    	echo " <font size='4'>По вашему поиску  <b>&quot;$words&quot;</b>  ничего не найдено.</font>";
				else
				{
					echo "<font size='4'>По вашему пойску <b>&quot;$words&quot;</b> найдены эти совпадении.</font> <br><br> ";
					for ($i = 0; $i < count($results); $i++)
					echo $results[$i]["descrip"]." <br/>";
			    }
			}
			?>	
		</div>
		<div class="footer">                             <!-- Над footer  -->
			  <a  href="index.php?view=index"><img style="margin: 10px;" src="img/dom_white.png" ></a>                           
			  <form name="search" action="search.php" method="post"  style="margin: 7px 30px  5px 520px;float: right;">
	                <input class="find_text" type="text" name="words" size="25"  placeholder="Поиск по сайту">
	                <input class="find" type="submit" name="bsearch" value=" поиск ">
	          </form>	    
		</div>
		<div class="Footer">  <!-- Footer menu -->
			<div style="margin-left: 150px;">	
				<div style="float: left; color: #ffffff; padding: 20px; width: 150px;">
				   		<font size="4px">Город Ош</font>
				   		<hr />
				   		<a href="index.php?=oshcity</a>=">О городе</a>
				   	</div>
				   	
				   		<div style="float: left; color: #ffffff; padding: 20px; width: 150px; ">
				   		<b>Организации</b>
				   		<hr />
				   		<a href="index.php?view=add_organization">Добавить огранизацию</a>
				   	</div>
				   	<div style="float: left; color: #ffffff; padding: 20px; width: 150px; ">
				   		<b>Интересное</b>
				   		<hr />
				   		<a href="galerea.php">Городской объектив</a>
				   	</div>
				   	<div style="float: left; color: #ffffff; padding: 20px; width: 150px;">
				   		<b>Passion</b>
				   		<hr />
				   		<a href="index.php?view=about">Обратная связь</a>
				   		<a href="#">Авторы</a>
				   		
				   </div>   	
			</div>
		</div>
		<div class="Footer_bottom">  <!-- Footer  -->
			<div style="margin-left: 170px;"><p style="color: #b0b6c4">2016 ©  "PASSION CO". Все права защищены.</p></div>
		</div>
	
	</div>	
</body>
</html>