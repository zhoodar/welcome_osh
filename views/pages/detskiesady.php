<div id="workArea">                                    <!-- див рабочой зоны  -->
<a href="index.php?view=index">Главная &rarr;</a> Детские сады &rarr;

	<div >
		<table border="0">
			<tr>
			   <td><img src="img/detskie-sady.png"  /></td> 
			   <td> <h2>   Детские сады ОШа - отзывы и контакты, адреса</h2> 	 	

			В разделе <strong>«Детские сады ОША»</strong>, для Вас собрана масса полезной информации, касаемо дошкольных образовательных учреждений города. Здесь есть и адреса садиков, контакты, фотографии, отзывы реальных людей, жалобы и пожелания.
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
				<td bgcolor="#ced7dd" height="30"> <u>Статистика справочника «Детские сады ОШа»</u></td>
			</tr>
			   <? 
				$kid_garden = get_kid_garden();
				foreach($kid_garden as $item):?>
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