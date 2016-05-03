
<div id="workArea">            <!-- див рабочой зоны  -->
			
	<div class="innerArea">
		<p style="font-size: 17px;">
				Добро пожаловать на сайт <strong> города Ош </strong>, одного из самых красивых городов Кыргызкой Руспублики. На нашем сайте в разделе «О городе» Вы можете ознакомиться с  городом Ош и получить полную информацию. Для гостей города будет интересно познакомиться с его достопримечательностями, парками и музеями, узнать какие есть кинотеатры и театры, клубы и рестораны в городе ОШ. А наиболее красивые уголки города Вы сможете увидеть в нашей <a  href="galerea.php" > фотогалерее сайта.</a> 
			</p>
	
		<div class="rightDiv">
			 <div>
					 <font size="4px;"> <b><a href="#"> Городской объектив </a></b></font> <br />
					 <hr size="3" color="#537FD3"/>
					  
			</div> 
			<div class="slider">    <!-- див слайд  --> 
			    <br>   
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
				<li><img src="img/slide/1.jpg" alt="Oshh"></li>
				<li><img src="img/slide/2.jpg" alt=""></li>
				<li><img src="img/slide/3.jpg" alt=""></li>
				<li><img src="img/slide/4.jpg" alt=""></li>
				<li><img src="img/slide/5.jpg" alt=""></li>
				<li><img src="img/slide/6.jpg" alt=""></li>
			</ul>
	</div>
		</div>
	
		<div class="leftDiv">	
			<div >
				<div style="border-bottom: dotted 1px #2d79d7;">
					 <font size="4px;"> <b><a href="#"> Новости Ош - сегодня в городе </a></b></font> <br />
					 <hr size="3" color="#537FD3"/>
					  <p align="justify">Будьте в курсе самых свежих и интересных в нашем любимом городе ОШ.Теперь не надо
					   искать новости по интернету, все самое интересное и актуальное можно прочитать на нашем сайте.</p>
				 </div> 		
			    <div class="leftDiv_block">
			    	<div style="float: right;"><img src="img/brt.jpg"> </div> 
		  		    <div style="float: inherit;">
		  		    	<a href="#"><strong> 02.03.2015 на ул. Монуева в ОШе произошло серьезное ДТП  </strong></a> 
		  		    	<p> в ОШе произошло серьезное ДТП с участием 5 машин</p>
		  		    </div>
		  		    
		  		</div>
		  		<div class="leftDiv_block">
			    	<div style="float: right;"><img src="img/brt.jpg"> </div> 
		  		    <div style="float: inherit;">
		  		    	<a href="#"><strong> 02.03.2015 на ул. Монуева в ОШе произошло серьезное ДТП  </strong></a> 
		  		    	<p> в ОШе произошло серьезное ДТП с участием 5 машин</p>
		  		    </div>
		  		    
		  		</div>
			 		            
			</div>
		</div>
		<div class="exclusive">
		
		</div>

	</div>
</div>





