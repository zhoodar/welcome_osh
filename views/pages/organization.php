<?
 $category = $_GET['c'];
 $id = $_GET['id'];
 switch($category){
 	case('banks'):
 	  $table=$category;
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
		<hr size="6"  class="blue-block" color="#3379ee" />
		
		<div>
		    <strong>Адрес:</strong> <?=$organization['address']?>
			<br> <strong>Телефон:</strong> <?=$organization['telephone']?>
			<br> <strong>E-mail:</strong> <?=$organization['e_mail']?>
			<br> <strong>Часы работы:</strong> <?=$organization['work_hours']?>
			<br> <a href="http://<?=$organization['url']?>">Переийти в сайт организации</a>
		</div>

	    <br/><br/>
		
		<div>
			<p >  <strong>Место нахождение на карте</strong> </p>
			<img border="3" style="border-color: #adafb4;" src="img/map.png"/>
		</div>
	   <br/>
	
		

	
</div>