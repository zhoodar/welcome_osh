<div id="workArea">
	
	<p><b>Контакты</b> <br><hr color="#537FD3">
		<strong>Телефон:</strong> +996778 111 000 <br>
		<strong>E-mail:</strong> copassion@gmail.com
	</p>
	<?
		db_connect();
	if(isset($_POST['ab'])){
	 	$name =$_POST['name']; 
	    $email =$_POST['email'];
	    $number = $_POST['number']; 
	    $massege =$_POST['text'];
	    
	    $query = mysql_query("INSERT INTO feedback(name,email,phone_number,text) VALUES ('$name','$email','$number','$massege')"); 
		
		echo "<h4 align='center' style='color:#54a7fa ' >Успешно отправлено!</h4>";
	}
	?>
	<h4 style="text-align: left;"></h4>
	<div id="map-shadow" style="width: 790px; margin-left:10px; " >
			 <div id="map-container">
				<form action="<?=$_SERVER['REQUEST_URI'];?>" method="post" class="decorated-form">
					<fieldset>
						<label class="field" ><span>Обратная связь</span></label><br />
						<label class="field" ><span>Ваша Имя<em>*</em></span>
							<input type="text" name="name" required>
						</label>
						
						<label class="field" ><span>Ваш e-mail<em>*</em></span>
							<input type="text" name="email" required>
						</label> 
						<label class="field" >Eсли хотите заказать услуги сайта, тогда пишите Ваш номер телефона 
						и напишите об этом подробнее в ячейку сообщения.</label>
						<label class="field" ><span>Ваш телефон</span>
							<input type="text" name="number" required>
						</label>
						<label class="field" ><span>Ваша сообщения</span>
							<textarea rows='5'cols='40'name='massege'placeholder='Сообщения...'></textarea>
						</label>
						<button class="orange-button" type="submit" name="ab" >Отправить </button>
					</fieldset>
				</form>
					
			</div>
	</div>
</div>