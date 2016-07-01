<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Галерея сайта</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Город Ош, справочник по городу" />
	<meta name="keywords" content="фото, ОШ, здания, маршрутка, ВУЗы и т.д." />

	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="style/slimbox.css" />
	<script type="text/javascript"  src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript"  src="js/jsforgal.js">   </script> 
	<script type="text/javascript"  src="js/cloud-carousel.1.0.4.min.js"> </script>
	<script type="text/javascript"  src="js/jquery.mousewheel.min.js"> </script>
	<script type="text/javascript"  src="js/slimbox.js"> </script>
	
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

		  <div>
		  	<h2> Фото города ОШ 2000-2016 год </h2>
		  </div>
	  
		  <div id="galerea1">
				<div id="galerea"><a href="img/galerea/big_sulaimanka.jpg" rel="lightbox"> 
				<img src="img/galerea/sulaimanka.jpg" alt="сулаймантоо" title="Сулайман Тоо"></a> </div>	  
				<div id="galerea"> <a href="img/galerea/big_aeroport.jpg" rel="lightbox"> 
				 <img src="img/galerea/aeroport.jpg" alt="Аэропорт оша" title="Аэропорт города ОШ">  </a> </div>		
				 <div id="galerea"><a href="img/galerea/big_basnya.jpg" rel="lightbox"> 
				  <img src="img/galerea/basnya.jpg" alt="Башня города ОШ"title="Башня города ОШ">  </a> </div>		 
				 <div id="galerea"><a href="img/galerea/big_mechit.jpg" rel="lightbox"> 
				  <img src="img/galerea/mechit.jpg"  alt="Мечит Сулайман Тоо" title="Мечит Сулайман Тоо" >  </a> </div>		 
				<div id="galerea"> <a href="img/galerea/big_muzei.jpg" rel="lightbox"> 
				 <img src="img/galerea/muzei.jpg" alt="сулаймантоо" title="Плошать города" >  </a> </div>		
				 <div id="galerea"><a href="img/galerea/big_ploshat.jpg" rel="lightbox">
				   <img src="img/galerea/ploshat.jpg" alt="Плошать города"  title="Плошать города"  >  </a> </div>		 
				<div id="galerea"> <a href="img/galerea/big_Sulaymantoo.jpg" rel="lightbox"> 
				<img src="img/galerea/Sulaymantoo.jpg" alt="сулаймантоо" title="Сулайман Тоо" >  </a> </div>		
				 <div id="galerea"><a href="img/galerea/big_dram.jpg" rel="lightbox"> 
				  <img src="img/galerea/dram.jpg" alt="сулаймантоо">  </a> </div>		 
				 <div id="galerea"> <a href="img/galerea/big_aeroport2.jpg" rel="lightbox"> 
				 <img src="img/galerea/aeroport2.jpg" alt="сулаймантоо" title="Аэропорт города ОШ">  </a>  </div>		
				 <div id="galerea"><a href="img/galerea/big_oshmu.jpg" rel="lightbox"> 
				  <img src="img/galerea/oshmu.jpg" alt="ОшМу" title="ОшМУ">  </a"> </div>		 
				 <div id="galerea"><a href="img/galerea/big_3etajka.jpg" rel="lightbox"> 
				  <img src="img/galerea/3etajka.jpg" alt="Араванская" title="Араванская">  </a> </div>		 
				 <div id="galerea"> <a href="img/galerea/big_ploshat3.jpg" rel="lightbox"> 
				  <img src="img/galerea/ploshat3.jpg" alt="сулаймантоо" title="Плошать города" >  </a>  </div>		 
				<div id="galerea"> <a href="img/galerea/big_mechit2.jpg" rel="lightbox"> 
				 <img src="img/galerea/mechit2.jpg" alt="сулаймантоо">  </a>  </div>	
				<div id="galerea"> <a href="img/galerea/big_ploshat2.jpg" rel="lightbox"> 
					 <img src="img/galerea/ploshat2.jpg" alt="сулаймантоо"title="Плошать города" >  </a>  </div>
				<div id="galerea"> <a href="img/galerea/big_sulayman-too.jpg" rel="lightbox"> 
				 <img src="img/galerea/sulayman-too.jpg" alt="сулаймантоо" title="Сулайман Тоо">  </a>  </div>

		     </div>
	 
		 <div >
		 	<hr width="400">
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