<div id="workArea">                                    <!-- див рабочой зоны  -->
	<a href="index.php?view=index">Главная &rarr;</a> Школы &rarr;

	<div >
		
		<table border="0">
			<tr>
			   <td><img src="img/shkoly.jpg"  /></td> 
			   <td> <h2>   Школы ОШа- отзывы и  контакты, адреса, информация</h2> 	Школы начали появляться еще в древние времена, когда людям понадобилось передавать свои знания будущему поколению – своим детям о письменности и речи. В нашем современном мире, для того что бы попасть в мир взрослой жизни, школу проходит каждый, получив там необходимый набор знаний. Чем больше город, тем больше в нем школ, и это логично.ОШ, хоть и город не особо большой, но образовательных учреждений в нем достаточно, чтобы стать перед выбором: в какую школу пойти в ОШ?! Этот раздел сайта именно для этого и создан, чтобы помочь родителям определиться с выбором.	</td>
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
				<td bgcolor="#ced7dd" height="30"> <u>Статистика справочника «Школы ОШа»</u></td>
			</tr>
			<? 
			$school = get_school();
			foreach($school as $item):?>
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