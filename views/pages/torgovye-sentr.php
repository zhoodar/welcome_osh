<div id="workArea">                                    <!-- див рабочой зоны  -->
	<a href="index.php?view=index">Главная &rarr;</a> Торговые центры &rarr;

	<div >
		
		<table border="0">
			   <tr>
				   <td width="160"><img src="img/torgovye-tsentry.jpg"  /></td> 
				   <td  > <h2> Торговые центры (ТЦ) ОШа - отзывы и  контакты, адреса </h2>  В данном каталоге  находятся, торговые центры ОШа. Теперь Вам не надо «путешествовать» по интернету в поисках контактной информации, отзывов, и жалоб об интересующей организации, все это теперь есть здесь. 
				   </td>
			 </tr>
			 <tr>
			    <td width="120">&nbsp;</td>
			 	<td>
	   				<div  align="center" >
						<form action="add_organization.php" method="POST" class="decorated-form">
							<input name="news" type="submit" value="Добавить свою организацию" class="orange-button">
						</form>
					</div>
		        </td>
			 </tr>
		 </table>
		
	</div>
	<br />
	<div id="kino">
		<table align="center"  cellspacing="5" bgcolor="#ced7dd">
			<tr>
				<td bgcolor="#ced7dd" height="30"> <u>Статистика справочника «Торговые центры (ТЦ) ОШа»</u></td>
			</tr>
			<? 
				$mall = get_mall();
				foreach($mall as $item):?>
				<tr>
					<td>
		             <div style="padding: 5px; border-radius: 4px 4px 4px 4px; background-color: #FFFFFF;" >
						<a href="#"><strong><?=$item['name_org']?></strong> </a> <br> <strong>Адрес:</strong> <?=$item['address']?> 
						<br> <strong>Телефон:</strong> <?=$item['telephone']?>
						<br> <strong>Часы работы:</strong> <?=$item['work_hours']?>
						<br> <a href="#"><strong>Фотографий </strong></a> |<a href="#"><strong>Отзывы</strong></a>
					 </div>
					</td>
				</tr>
			<?endforeach;?>		
		</table>
	</div>

</div>