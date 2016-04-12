<div id="workArea">                                    <!-- див рабочой зоны  -->
<a href="index.php?view=index">Главная &rarr;</a> Гостиницы &rarr;

	<div >
    	<table border="0">
		   <tr>
		     <td width="160"><img src="img/gostinicy-novorossijska.png"  /></td> 
		     <td  > <h2>   Гостиницы ОШа - отзывы и контакты, адреса </h2> Вашему вниманию в данном каталоге <strong>«Гостиницы ОШа»</strong> предложена достоверная и точная информация о месторасположении на карте любой интересующей гостиницы ее телефонами, адресами, часами работы и ссылками на официальные сайты. Так же можно просмотреть фотографии и отзывы о гостиницах ОШа. Здесь Вы легко сможете найти место для временного пребывания в г. ОШ.	</td>
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
				<td bgcolor="#ced7dd" height="30"> <u>Статистика справочника «Гостиныцы ОШа»</u></td>
			</tr>
			<? 
			$hotel = get_hotel();
			foreach($hotel as $item):?>
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