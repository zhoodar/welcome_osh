<?php
	include('db_funs.php');

	$view = empty($_GET['view']) ? 'index' : $_GET['view'];

	include($_SERVER['DOCUMENT_ROOT'].'/welcome_osh/views/layouts/osh.php');

?>