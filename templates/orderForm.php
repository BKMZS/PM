<div id="promoOrderForm">
    <h1 id="promoTextOrderForm">
        Форма заявки для заказа на сайте
    </h1>
</div>

<!--<?php
if(!isset($_POST['fio']) and !isset($_POST['phone']) and !isset($_POST['email']) and !isset($_POST['adres']))?>
-->
<div id="inline">
	<form action="send.php" method="post">
		<input id="name" name="fio" placeholder="Укажите ФИО" class="textbox" required>
		<input id="phone" name="phone" placeholder="Укажите Ваш номер телефона" class="textbox" required>
		<input id="email" name="email" placeholder="Укажите E-Mail" class="textbox" required><br>
		<textarea id="adres" rows="4" cols="50" type="txt" name="adres" placeholder="Укажите адреc доставки" class="textbox" required></textarea><br>
		<input type="submit" value="Отправить" class="button">
	</form>
</div>