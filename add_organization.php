<?php header('Content-type: text/html; charset=utf-8'); ?>
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
		
		<div style="margin: 10px">
			 	
	     <h1> Добавить организацию в справочник Ош </h1>
	 	<p align="justify" style="font-size: 16px; ">
		Добавить организацию в Наш справочник Оша очень легко. Для этого Вам потребуется заполнить правильно форму 
		находящуюся ниже, и уже через несколько секунд, без проверки модераторов <br/>
		 Ваша организация появится в справочнике. Так же мы оставляем за собой право на удаление Вашей организации: за неправильно 
		 заполненную форму, использование спама, дублирование организации в одной и той же категории.
		</p>
		<?php
		include('db_funs.php');
		db_connect();
	
		if(isset($_POST['add_organization']))
		{
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$adres = $_POST['adres'];
			$telefon = $_POST['telefon'];
			$chasi_raboti = $_POST['chasi_raboti'];
			$url = $_POST['url'];
			$dop_opisanie = $_POST['dop_opisanie'];
			$cat = $_POST['cat'];
			
			switch($cat){
				case('bank'):
					$query = mysql_query("INSERT INTO banks(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('cinema'):
					$query = mysql_query("INSERT INTO cinemas(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('hotel'):
					$query = mysql_query("INSERT INTO hotels(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('restoran'):
					$query = mysql_query("INSERT INTO restobars(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('night_club'):
					$query = mysql_query("INSERT INTO nigthclubs(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('sport_club'):
					$query = mysql_query("INSERT INTO sportclubs(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('school'):
					$query = mysql_query("INSERT INTO schools(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('kid_garden'):
					$query = mysql_query("INSERT INTO kid_garden(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('mall'):
					$query = mysql_query("INSERT INTO mall(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('butik'):
					$query = mysql_query("INSERT INTO butik(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('market'):
					$query = mysql_query("INSERT INTO markets(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('notarius'):
					$query = mysql_query("INSERT INTO attorney(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('univer'):
					$query = mysql_query("INSERT INTO vuz(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;
				case('courses'):
					$query = mysql_query("INSERT INTO uch_center(
			                     category,name_org, e_mail,address, telephone, work_hours,  description, url) 
			             VALUES ('$cat', '$name', '$email', '$adres', '$telefon', '$chasi_raboti', '$dop_opisanie', '$url')        
					");
					break;													
			
			}
			
			mysql_close();
		    echo "<h4 align='center' style='color:#54a7fa ' >Организация успешно добавлено!</h4>";
		}
	
		?>	
		</div>
		
	
		<table width="790" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="20">&nbsp;</td>
			<td align="left" valign="top">
			<div id="map-shadow">
			 <div id="map-container">
			  <form class="decorated-form" method="post" action="add_organization.php">
			   <fieldset>
				<label class="field ">
					<span>Категория<em>*</em></span>
					<select name="cat" id="cat" >
						<option value='cinema'>Кинотеатры</option><br />
						<option value='hotel'>Гостиницы</option><br />
						<option value='restoran'>Рестораны </option><br />
						<option value='night_club'>Ночные клубы</option><br />
						<option value='sport_club'>Спортивные клубы</option><br />
						<option value='banks'>Банки</option><br />
						<option value='school'>Школы</option><br />
						<option value='kid_garden'>Детские сады</option><br />
						<option value='mall'>Торговые центры</option><br />
						<option value='butik'>Магазин(одежды,обуви)</option><br />
						<option value='market'>Супермаркеты</option><br />
						<option value='notarius'>Нотариус</option><br />
						<option value='univer'>ВУЗ</option><br />
						<option value='courses'>Учебные центры</option><br />
					</select>
					</label>

				<label class="field ">
					<span>Название организации<em>*</em></span>
					<input name="name" type="text" id="name" value="" maxlength="256" required >
					<span class="hint">Например:Торговый центр Ынтымак</span>
				</label>
				<label class="field ">
					<span>E-mail для связи<em>*</em></span>
					<input type="text" name="email" maxlength="100" id="id_email" value="" required>
				</label>
				<label class="field ">
					<span>Адрес<em>*</em></span>
					<input type="text" name="adres" maxlength="256" id="id_adres" value="" required>
					<span class="hint">Например: г. Ош, ул. Раззакова, д. 37</span>
				</label>
				<label class="field ">
					<span>Телефоны<em>*</em></span>
					<input type="text" name="telefon" maxlength="200" id="telefon" value="" required>
					<span class="hint">Например: +996(778)66-66-66, 22-22-22</span>
				</label>
				<label class="field ">
					<span>Часы работы</span>
					<input type="text" name="chasi_raboti" maxlength="256" id="chasi_raboti" value="" >
					<span class="hint">Например: пн-пт с 10:00 до 19:00; сб с 10:00 до 17:00</span>
				</label>
				<label class="field ">
					<span>Вебсайт</span>
					<input type="text" name="url" maxlength="256" id="id_url" value="">
					<span class="hint">Например: www.welcomeosh.kg</span>
				</label>
				<label class="field ">
					<span>Дополнительное описание</span>
					<textarea id="dop_opisanie" rows="10" name="dop_opisanie" cols="40"></textarea>
				</label>
				<strong style="color:"> &nbsp;Защита от робота (заглавными буквами)<em style="color:#FF6035">*</em></strong>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="left" valign="middle" class="text">
						<img src="capcha.php"  align="absmiddle" /></td>
						<td width="10" align="left" valign="middle" class="text">&nbsp;</td>
						<td align="left" valign="bottom" class="text"><label class="field2 ">
						<input type="text" style="height: 30px; font-size: 16px;" name="pr" maxlength="12" id="id_name">
						</label> </td>
						<td align="left" valign="middle" class="text"><p class="pravila">&nbsp; </p></td>
					</tr>
				</table>
				<br />
				<div class="clear"></div>
				<button type="reset" class="gray-button">Сбросить поля формы</button>
				<button class="orange-button" type="submit" name="add_organization">Добавить организацию</button>
				<div class="clear"></div>
			  </fieldset>
			  </form>
			 </div>
			</div>
			</td>
			<td width="20">&nbsp;</td>
		  </tr>
		</table>
	
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

