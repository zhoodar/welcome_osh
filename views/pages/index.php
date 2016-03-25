
<div id="workArea">            <!-- див рабочой зоны  -->
		
		                                              
		
<div class="slider">    <!-- див слайд  -->    
			<script type="text/javascript">
			$(document).ready(function() {
			 $(".slider").each(function () { // обрабатываем каждый слайдер
			  var obj = $(this);
			  $(obj).append("<div class='nav'></div>");
			  $(obj).find("li").each(function () {
			   $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>"); // добавляем блок навигации
			   $(this).addClass("slider"+$(this).index());
			  });
			  $(obj).find("span").first().addClass("on"); // делаем активным первый элемент меню
			 });
			});
			function sliderJS (obj, sl) { // slider function
			 var ul = $(sl).find("ul"); // находим блок
			 var bl = $(sl).find("li.slider"+obj); // находим любой из элементов блока
			 var step = $(bl).width(); // ширина объекта
			 $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 это скорость перемотки
			}
			window.setInterval(function(){var n = $(".slider .nav span.on").next();if(n.length==0)n=$(".slider .nav span").first();n.click();},5000);
			$(document).on("click", ".slider .nav span", function() { // slider click navigate
			 var sl = $(this).closest(".slider"); // находим, в каком блоке был клик
			 $(sl).find("span").removeClass("on"); // убираем активный элемент
			 $(this).addClass("on"); // делаем активным текущий
			 var obj = $(this).attr("rel"); // узнаем его номер
			 sliderJS(obj, sl); // слайдим
			 return false;
			});
			</script>
			<ul>
				<li><img src="img/1.jpg" alt=""></li>
				<li><img src="img/2.jpg" alt=""></li>
				<li><img src="img/3.jpg" alt=""></li>
				<li><img src="img/4.jpg" alt=""></li>
				<li><img src="img/5.jpg" alt=""></li>
				<li><img src="img/6.jpg" alt=""></li>
			</ul>
		</div>
			
		
		
		

<p style="font-size: 17px;">
Добро пожаловать на сайт <strong> города ОШ </strong>, одного из самых красивых городов Кыргызкой Руспублики. Он современный благоустроенный с развитой инфраструктурой. На нашем сайте в разделе «О городе» Вы можете ознакомиться с  городом ОШ и получить полную информацию  . 
<br /><br />
Для гостей города будет интересно познакомиться с его достопримечательностями, парками и музеями, узнать какие есть кинотеатры и театры, клубы и рестораны в городе ОШ. А наиболее красивые уголки города Вы сможете увидеть в нашей <a  href="galerea.php" > фотогалерее сайта.</a> 
</p>


<hr width="70%" size="2" color="#537FD3" align="center" >
<hr width="50%" size="2" color="#537FD3" align="center" >

<div id="news">

<table border="0">
   <tr>
    <td><img src="img/news.png"  /></td> 
   <td> <strong> <a href="#"> Новости ОШ- самое интересное на сегодня в городе </a> </strong> <br /><br /> Будьте в курсе самых свежих и интересных в нашем любимом городе ОШ. Теперь не надо искать новости по интернету, все самое интересное и актуальное можно прочитать на нашем сайте. 		</td>
 </tr>
 </table>
 
 <hr size="3" color="#537FD3"/>
 
 <table id="news">
  <tr> 
  <td colspan="3" align="center"> <a href="#"><strong> 02.03.2015 на ул. Монуева в ОШе произошло серьезное ДТП  </strong></a> </td>
  </tr>
  <tr>
   <td width="60"></td>
  	<td> <img src="img/brt.jpg"  border="2"  </td>
	<td > <strong>02.03.2015 </strong>  <br />на ул. Раззакова в ОШе произошло серьезное ДТП с участием 5 машин </td>
  </tr>
  
   <td colspan="3" align="center"> <a href="#"><strong> ДТП  в 13 микрорайоне возле Лукойла. Автобус с ВАЗ-2107.  </strong></a> </td>
 
  <tr>
   <td width="60"></td>
  	<td> <img src="img/nw2.jpg"  border="2"  </td>
	<td > <strong>26.02.2015 </strong>  <br />в 18 микрорайоне города ОШа  произошло ДТП с участием маршрутного городского автобуса и легкового автомобиля ВАЗ-2107...  </td>
  </tr>  
  
  <td colspan="3" align="right"> <a href="#"><strong> <a href="#">Перейти к списку последных новестей &gt;&gt; </a>  </strong></a> </td>
</table>


</div>
<br />
<hr width="70%" size="2" color="#537FD3" align="center" >
<hr width="50%" size="2" color="#537FD3" align="center" >

		</div>
