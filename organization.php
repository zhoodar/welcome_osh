<?php header('Content-type: text/html; charset=utf-8'); ?>
<?include('db_funs.php');

session_start();
include ("db.php");
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Город Ош, справочник по городу" />
		<meta name="keywords" content="фото, ОШ, здания, маршрутка, ВУЗы и т.д." />

		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="stylesheet" type="text/css" href="style/slimbox2.css" />
		<link href="style/comment_style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript"  src="js/slide.js"></script>
		<script type="text/javascript"  src="js/jsforgal.js">   </script> 
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.validationengine.js"></script>
		<script type="text/javascript" src="js/skycom.js"></script>
		
		<title>Добро пожаловать!</title>
	</head>

	<body class="fon">

		<div class="MainFrame">

			

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
								<a href="index.php?view=guesthouse">Гостиницы</a>
							</li>
							<li>
								<a href="index.php?view=restoran">Ресторан</a>
							</li>
							<li>
								<a href="index.php?view=nigthclub">Ночные клубы</a>
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
								<a href="index.php?view=market">Супермаркеты</a>
							</li>
							<li>
								<a href="index.php?view=butik">Магазины(бутик)</a>
							</li>
							<li>
								<a href="index.php?view=attorney">Нотариус</a>
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
								<a href="index.php?view=uch_center">Учебные центры</a>
							</li>
							<li>
								<a href="index.php?view=detskiesady">Дет сады</a>
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
							<a href="index.php?view=panorama"> Панорама </a>
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
						&copy; 2015
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


		<?
		 $category = $_GET['c'];
		 $id = $_GET['id'];
		 switch($category){
		 	case('banks'):
		 	  $organization = get_organ_bank($id);
		 	  break;	
		 	case('hotel'):
		 	  $organization = get_organ_hotel($id);
		 	  break;	
		 	case('kid_garden'):
		 	  $organization = get_organ_detsad($id);
		 	  break;
		 	case('cinema'):
		 	  $organization = get_organ_cinema($id);
		 	  break;
		 	case('mall'):
		 	  $organization = get_organ_mall($id);
		 	  break;
		 	case('school'):
		 	  $organization = get_organ_school($id);
		 	  break;
		 	case('restoran'):
		 	  $organization = get_organ_restoran($id);
		 	  break;
		 	case('night_club'):
		 	  $organization = get_organ_nigthclub($id);
		 	  break;
		 	case('sport_club'):
		 	  $organization = get_organ_sportclub($id);
		 	  break;
		 	case('notarius'):
		 	  $organization = get_organ_attorney($id);
		 	  break;           
		 	case('butik'):
		 	  $organization = get_organ_butik($id);
		 	  break;
		 	case('univer'):
		 	  $organization = get_organ_vuz($id);
		 	  break;     
		 	case('courses'):
		 	  $organization = get_organ_uchcenter($id);
		 	  break;  
		 }

		?>	
		<div id="workArea">     	<!-- див рабочой зоны  -->
			 <a href="index.php?view=index">Главная</a>&rarr;<a href="#">Организации</a> &rarr;
			 <p> <h2>  <?=$organization['name_org']?>. Отзывы, жалобы, контакты</h2> </p>
			 <hr size="6"  class="blue-block"/>	
			 <div >
				  <strong>Адрес:</strong> <?=$organization['address']?>
				  <br> <strong>Телефон:</strong> <?=$organization['telephone']?>
				  <br> <strong>E-mail:</strong> <?=$organization['e_mail']?>
				  <br> <strong>Часы работы:</strong> <?=$organization['work_hours']?>
				  <br> <a href="http://<?=$organization['url']?>">Переийти в сайт организации</a>  
			 </div>
			 <br/>
			 <div>
				 <p>  <strong>Место нахождение на карте</strong> </p>
				 <img border="3" style="border-color: #adafb4;" src="img/map.png"/>
			 </div>
			 <br/>	
			<div align="center">
			<?
			     $cat = $_GET['c'];
			     $idsi = $_GET['id'];
			     switch($cat){
				 	case('banks'):
				 	  $com = 50+$idsi;
				 	  break;	
				 	case('hotel'):
				 	  $com = 100+$idsi;
				 	  break;	
				 	case('kid_garden'):
				 	  $com = 150+$idsi;
				 	  break;
				 	case('cinema'):
				 	  $com = 200+$idsi;
				 	  break;
				 	case('mall'):
				 	  $com = 250+$idsi;
				 	  break;
				 	case('school'):
				 	  $com = 300+$idsi;
				 	  break;
				 	case('restoran'):
				 	  $com = 350+$idsi;
				 	  break;
				 	case('night_club'):
				 	  $com = 400+$idsi;
				 	  break;
				 	case('sport_club'):
				 	  $com = 450+$idsi;
				 	  break;
				 	case('notarius'):
				 	  $com = 500+$idsi;
				 	  break;           
				 	case('butik'):
				 	 $com = 550+$idsi;
				 	  break;
				 	case('univer'):
				 	 $com = 600+$idsi;
				 	  break;     
				 	case('courses'):
				 	  $com = 650+$idsi;
				 	  break;  
				 }
				 
			 //идентификатор $com=переменная; например id темы $com=$news_id; можно использовать лат. буквы например nov_11
			include("comment.php");  ?>
				
			</div>
			 
		</div>
	  </div>
	</body>
</html>