<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<title>����� ����������!</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="����� ��, ���������� �� ������" />
	<meta name="keywords" content="����, ��, ������, ���������, ���� � �.�." />

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

		

		<div class="Menu">
			<!-- ���a�� ���� -->
			<div class="header">
				<img src="img/logo.png" style="margin-left: 20px;"/>
			</div>
			<br />
			<br />
			<ul id="nav">
				<li>
					<a href="index.php?view=index">�������</a>
				</li>
				<li>
					<a class="hsubs" href="#">����� � �����������</a>
					<ul class="subs">
						<li>
							<a href="index.php?view=kinoteatr">����������</a>
						</li>
						<li>
							<a href="index.php?view=guesthouse">���������</a>
						</li>
						<li>
							<a href="index.php?view=restoran">��������</a>
						</li>
						<li>
							<a href="index.php?view=nigthclub">������ �����</a>
						</li>
						<li>
							<a href="#">�������������� ������</a>
						</li>
					   <li>
							<a href="index.php?view=sportclub">���������� �����</a>
						</li>
					
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">������ � ������</a>
					<ul class="subs">
						<li>
							<a href="index.php?view=torgovye-sentr">�������� ������</a>
						</li>
						<li>
							<a href="#">�����������</a>
						</li>
						<li>
							<a href="#">��������</a>
						</li>
						<li>
							<a href="index.php?view=banks">�����</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">������� ���������</a>
					<ul class="subs">
						<li>
							<a href="index.php?view=univers">����</a>
						</li>
						<li>
							<a href="index.php?view=schools">�����</a>
						</li>
						<li>
							<a href="#">������� ������</a>
						</li>
						<li>
							<a href="index.php?view=detskiesady">��� ����</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">���������� </a>
					<ul class="subs">
					<li>
						<a href="galerea.php"> ������� </a>
					</li>
					<li>
						<a href="#"> ���� ���� </a>
					</li>
					<li>
						<a href="index.php?view=panorama"> �������� </a>
					</li>
					
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#">���������� </a>
					<ul class="subs">
					<li>
						<a href="#"> ���������� ���������� </a>
					</li>
					
					
					</ul>
				</li>
				<li>
					<a class="hsubs" href="#"> �� &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>
					<ul class="subs">
					<li>
						<a href="index.php?view=oshcity"> � ������ �� </a>
					</li>
					<li>
						<a href="#"> ������� </a>
					</li>
					<li>
						<a href="#"> ����� ������ </a>
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

         <div class="pois">                             <!-- ��� �����  -->
		                                    
		     <form name="search" action="search.php" method="post"  style="margin: 10px 20px  5px 520px;float: right;">
                   <input type="text" name="words" size="25"  placeholder="����� �� �����">
                   <input type="submit" name="bsearch" value=" ����� ">
             </form>
		</div>


		<?php  include($_SERVER['DOCUMENT_ROOT'].'/wlcomes-osh/views/pages/'.$view.'.php ');  ?>

	
		
		
	
		
    
	
	</div>
	
</body>
</html>