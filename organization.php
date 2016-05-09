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
		<script type="text/javascript" src="panorama/swfobject.js"></script>
		
		<title>Добро пожаловать!</title>
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


		<?
		 $category = $_GET['c'];
		 $id = $_GET['id'];
		 switch($category){
		 	case('banks'):
		 	  $organization = get_organ_bank($id);
		 	  $com = 50+$id;
		 	  break;	
		 	case('hotel'):
		 	  $organization = get_organ_hotel($id);
		 	  $com = 100+$id;
		 	  break;	
		 	case('kid_garden'):
		 	  $organization = get_organ_detsad($id);
		 	  $com = 150+$id;
		 	  break;
		 	case('cinema'):
		 	  $organization = get_organ_cinema($id);
		 	  $com = 200+$idsi;
		 	  break;
		 	case('mall'):
		 	  $organization = get_organ_mall($id);
		 	  $com = 250+$id;
		 	  break;
		 	case('school'):
		 	  $organization = get_organ_school($id);
		 	  $com = 300+$id;
		 	  break;
		 	case('restoran'):
		 	  $organization = get_organ_restoran($id);
		 	   $com = 350+$id;
		 	  break;
		 	case('night_club'):
		 	  $organization = get_organ_nigthclub($id);
		 	   $com = 400+$id;
		 	  break;
		 	case('sport_club'):
		 	  $organization = get_organ_sportclub($id);
		 	  $com = 450+$id;
		 	  break;
		 	case('notarius'):
		 	  $organization = get_organ_attorney($id);
		 	  $com = 500+$id;
		 	  break;           
		 	case('butik'):
		 	  $organization = get_organ_butik($id);
		 	  $com = 550+$id;
		 	  break;
		 	case('univer'):
		 	  $organization = get_organ_vuz($id);
		 	  $com = 600+$id;
		 	  break;     
		 	case('courses'):
		 	  $organization = get_organ_uchcenter($id);
		 	  $com = 650+$id;
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
			 <script language="JavaScript1.2">
				var ns6=document.getElementById&&!document.all?1:0
				var head="display:''"
				var folder=''
				function expandit(curobj){
				folder=ns6?curobj.nextSibling.nextSibling.style:document.all[curobj.sourceIndex+1].style
				if (folder.display=="none")
				folder.display=""
				else
				folder.display="none"
				}
				</script>
				<p style="cursor:pointer; font-size: 16px; font-weight: bolder;" onClick="expandit(this)"> 
					Показать/скрыть панорамный вид</p>
				<span style="display:none" style=&{head};>
				<? 
				
				if($category=="univer" && $_GET['id']==1 ){
					include("panorama/oshtu.php");
				}
				
				else{
					echo" <p style='font-size: 14px; font-style:italic;'>Контракт не подписан чтобы показать понараму!</p>";
				}
				?>
				</span>
			 </div>	
			 <h3> Оставить коментарий</h3>	
			<div align="center">
			
			<? 				 
			 //идентификатор $com=переменная; например id темы $com=$news_id; можно использовать лат. 
			include("comment.php");  ?>
				
			</div>
			 
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
				   		<a href="#">О городе</a>
				   	</div>
				   	
				   	<div style="float: left; color: #ffffff; padding: 20px; width: 150px; ">
				   		<b>Все новости</b>
				   		<hr />
				   		<a href="#">Новости Оша</a>
				   	</div>
				   	<div style="float: left; color: #ffffff; padding: 20px; width: 150px; ">
				   		<b>Интересное</b>
				   		<hr />
				   		<a href="#">Городской объектив</a>
				   	</div>
				   	<div style="float: left; color: #ffffff; padding: 20px; width: 150px;">
				   		<b>Passion</b>
				   		<hr />
				   		<a href="#">Обратный связь</a>
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