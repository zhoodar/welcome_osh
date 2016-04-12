<div id="workArea">                                    <!-- див рабочой зоны  -->
	<a href="index.php?view=index">Главная &rarr;</a> Банки &rarr;

	<div >
	
		<table border="0">
		   <tr>
			   <td><img src="img/banki.png"  /></td> 
			   <td> <h2>   Банки ОШа - отзывы и контакты, адреса </h2> В данном каталоге представлена подробная информация о <strong>банках города ОШа.</strong> 
			Раздел «Банки ОШа» поможет Вам и другим пользователям правильно определиться с выбором организации для выполнения банковских услуг, а также организовать быстрый доступ к справочной информации любого банка в городе. Здесь предоставлена точная и актуальная информация, постоянно проверяемая модераторами. Оставляйте свои отзывы о банках Новороссийска, оговаривайте плюсы и минусы, замечания, в общем все что может быть полезным для других посетителей данного каталога. 

			Если в списке Вы увидели знакомое место?! Оставьте о нем свой отзыв или фотографию!	</td>
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
				<td bgcolor="#ced7dd" height="30"> <u>Статистика справочника «Банки ОШа»</u></td>
			</tr>
			<? 
			
			$banks = get_banks();
			foreach($banks as $item):?>
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