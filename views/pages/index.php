
<div id="workArea">            <!-- ��� ������� ����  -->
		
		                                              
		
<div class="slider">    <!-- ��� �����  -->    
			<script type="text/javascript">
			$(document).ready(function() {
			 $(".slider").each(function () { // ������������ ������ �������
			  var obj = $(this);
			  $(obj).append("<div class='nav'></div>");
			  $(obj).find("li").each(function () {
			   $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>"); // ��������� ���� ���������
			   $(this).addClass("slider"+$(this).index());
			  });
			  $(obj).find("span").first().addClass("on"); // ������ �������� ������ ������� ����
			 });
			});
			function sliderJS (obj, sl) { // slider function
			 var ul = $(sl).find("ul"); // ������� ����
			 var bl = $(sl).find("li.slider"+obj); // ������� ����� �� ��������� �����
			 var step = $(bl).width(); // ������ �������
			 $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 ��� �������� ���������
			}
			window.setInterval(function(){var n = $(".slider .nav span.on").next();if(n.length==0)n=$(".slider .nav span").first();n.click();},5000);
			$(document).on("click", ".slider .nav span", function() { // slider click navigate
			 var sl = $(this).closest(".slider"); // �������, � ����� ����� ��� ����
			 $(sl).find("span").removeClass("on"); // ������� �������� �������
			 $(this).addClass("on"); // ������ �������� �������
			 var obj = $(this).attr("rel"); // ������ ��� �����
			 sliderJS(obj, sl); // �������
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
����� ���������� �� ���� <strong> ������ �� </strong>, ������ �� ����� �������� ������� ��������� ����������. �� ����������� ��������������� � �������� ���������������. �� ����� ����� � ������� �� ������ �� ������ ������������ �  ������� �� � �������� ������ ����������  . 
<br /><br />
��� ������ ������ ����� ��������� ������������� � ��� �����������������������, ������� � �������, ������ ����� ���� ���������� � ������, ����� � ��������� � ������ ��. � �������� �������� ������ ������ �� ������� ������� � ����� <a  href="galerea.php" > ����������� �����.</a> 
</p>


<hr width="70%" size="2" color="#537FD3" align="center" >
<hr width="50%" size="2" color="#537FD3" align="center" >

<div id="news">

<table border="0">
   <tr>
    <td><img src="img/news.png"  /></td> 
   <td> <strong> <a href="#"> ������� ��- ����� ���������� �� ������� � ������ </a> </strong> <br /><br /> ������ � ����� ����� ������ � ���������� � ����� ������� ������ ��. ������ �� ���� ������ ������� �� ���������, ��� ����� ���������� � ���������� ����� ��������� �� ����� �����. 		</td>
 </tr>
 </table>
 
 <hr size="3" color="#537FD3"/>
 
 <table id="news">
  <tr> 
  <td colspan="3" align="center"> <a href="#"><strong> 02.03.2015 �� ��. ������� � ��� ��������� ��������� ���  </strong></a> </td>
  </tr>
  <tr>
   <td width="60"></td>
  	<td> <img src="img/brt.jpg"  border="2"  </td>
	<td > <strong>02.03.2015 </strong>  <br />�� ��. ��������� � ��� ��������� ��������� ��� � �������� 5 ����� </td>
  </tr>
  
   <td colspan="3" align="center"> <a href="#"><strong> ���  � 13 ����������� ����� �������. ������� � ���-2107.  </strong></a> </td>
 
  <tr>
   <td width="60"></td>
  	<td> <img src="img/nw2.jpg"  border="2"  </td>
	<td > <strong>26.02.2015 </strong>  <br />� 18 ����������� ������ ���  ��������� ��� � �������� ����������� ���������� �������� � ��������� ���������� ���-2107...  </td>
  </tr>  
  
  <td colspan="3" align="right"> <a href="#"><strong> <a href="#">������� � ������ ��������� �������� &gt;&gt; </a>  </strong></a> </td>
</table>


</div>
<br />
<hr width="70%" size="2" color="#537FD3" align="center" >
<hr width="50%" size="2" color="#537FD3" align="center" >

		</div>
