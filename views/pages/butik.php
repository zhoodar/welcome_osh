<div id="workArea">                                    <!-- див рабочой зоны  -->
	<a href="index.php?view=index">Главная &rarr;</a> Магазины(Бутик) &rarr;

	<div >
		<table border="0">
			  <tr>
				  <td width="160"><img src="img/nochnye-kluby.png"  /></td> 
				  <td  > <h2>  Магазины(бутики) ОШа  - отзывы и контакты, адреса, телефоны, информация </h2> В этом разделе сайта Вашему вниманию представлена подробная информация о бутиках города ОШ.  	
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
				<td bgcolor="#ced7dd" height="30"> <u>Статистика справочника «Магазины(Бутик) ОШа»</u></td>
			</tr>
			<? foreach($butik as $item):?>
				<tr>
					<td>
		             <div style="padding: 5px; border-radius: 4px 4px 4px 4px; background-color: #FFFFFF;" >
						<a href="organization.php?c=<?=$item['category']?>&id=<?=$item['id']?>"><strong><?=$item['name_org']?></strong> </a> <br> <strong>Адрес:</strong> <?=$item['address']?> 
						<br> <strong>Телефон:</strong> <?=$item['telephone']?>
						<br> <strong>Часы работы:</strong> <?=$item['work_hours']?>
						<br> <a href="#"><strong>Фотографий </strong></a> |
							 <a href="organization.php?c=<?=$item['category']?>&id=<?=$item['id']?>"><strong>Отзывы</strong></a>
					 </div>
					</td>
				</tr>
			<?endforeach;?>	
		</table>
	</div>

</div>