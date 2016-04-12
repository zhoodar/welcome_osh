<div id="workArea">                                    <!-- див рабочой зоны  -->
	<a href="index.php?view=index">Главная &rarr;</a> ВУЗы &rarr;

	<div >
		
		<table border="0">
			   <tr>
				   <td><img src="img/univers.jpg"  /></td> 
				   <td> <h2>   ВУЗы ОШа - отзывы , контакты, адреса  </h2> Перед Вами представлен <strong>
				   полный  список университетов ОШа. </strong><br />
				Ищите адреса, контактные телефоны, сайты, читайте отзывы реальных пользователей о лучших университетах ОШа.  Не забывайте изучать также и фотографии.
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
				<td bgcolor="#ced7dd" height="30"> <u>Статистика справочника «Университеты ОШа»</u></td>
			</tr>
			<? 
				$vuz = get_vuz();
				foreach($vuz as $item):?>
				<tr>
					<td>
		             <div style="padding: 5px; border-radius: 4px 4px 4px 4px; background-color: #FFFFFF;" >
						<a href="organization.php?c=<?=$item['category']?>&id=<?=$item['id']?>"><strong><?=$item['name_org']?></strong> </a> <br> <strong>Адрес:</strong> <?=$item['address']?> 
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