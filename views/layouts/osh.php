<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Город Ош, справочник по городу" />
	<meta name="keywords" content="фото, ОШ, здания, маршрутка, ВУЗы и т.д." />

	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="style/slimbox2.css" />
		
	<script type="text/javascript"  src="js/slide.js"></script>
	<script type="text/javascript"  src="js/jsforgal.js">   </script> 
	<script type="text/javascript"  src="js/cloud-carousel.1.0.4.min.js"> </script>
	<script type="text/javascript"  src="js/jquery.mousewheel.min.js"> </script>
	<script type="text/javascript"  src="js/slimbox2.js"> </script>
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
					     <?
						$categories = get_cat();
						foreach($categories as $item):
						?>
						<li>
							<a href="index.php?view=cat&id=<?=$item['cat_id'];?>"> <?=$item['name'];?> </a>
						</li>
						<?endforeach;?>
										
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
						<a href="#"> Фото блог </a>
					</li>
					<li>
						<a href="index.php?view=panorama"> Панорама </a>
					</li>
					
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">Объявления </a>
					<ul class="subs">
					<li>
						<a href="#"> Эфективная объявления </a>
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


		<?php  include($_SERVER['DOCUMENT_ROOT'].'/wlcomes-osh/views/pages/'.$view.'.php ');  ?>

	
		
		
	
		
    
	
	</div>
	
</body>
</html>