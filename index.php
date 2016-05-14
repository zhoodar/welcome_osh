<?php
	include('db_funs.php');

	$view = empty($_GET['view']) ? 'index' : $_GET['view'];
	
	switch($view){
		case('index'):
		break;
		case('attorney'):
			$attorney = get_attorney();
		break;
		case('banks'):
			$banks = get_banks();
		break;
		case('butik'):
			$butik = get_butik();
		break;
		case('detskiesady'):
			$kid_garden = get_kid_garden();
		break;
		case('guesthouse'):
			$hotel = get_hotel();
		break;
		case('kinoteatr'):
			$cinemas = get_cinema();
		break;
		case('market'):
			$market = get_market();
		break;
		case('nigthclub'):
			$nigthclub = get_nigth_club();
		break;
		case('restoran'):
			$restoran = get_restobar();
		break;
		case('schools'):
			$school = get_school();
		break;
		case('sportclub'):
			$sport = get_sportclub();
		break;
		case('torgovye-sentr'):
			$mall = get_mall();
		break;
		case('uch_center'):
			$uch_center = get_uch_center();
		break;
		case('univers'):
			$vuz = get_vuz();
		break;
	}
	
	$arr = array('univers','torgovye-sentr','sportclub','schools','restoran','nigthclub','market','kinoteatr','guesthouse','detskiesady','butik','banks','attorney','index');
	
	if(!in_array($view,$arr)) die("<p align='center'><h1>ERROR 404!</h1><br><hr>Bad request!</p>");

	include($_SERVER['DOCUMENT_ROOT'].'/welcome_osh/views/layouts/osh.php');

?>