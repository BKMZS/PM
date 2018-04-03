<?php
	else {
//показываем форму
	$fio = $_POST['fio'];
	$phone= $_POST['phone'];
	$email = $_POST['email'];
	$adres= $_POST['adres'];
	$fio = htmlspecialchars($fio);
	$phone= htmlspecialchars($phone);
	$email = htmlspecialchars($email);
	$adres = htmlspecialchars($adres);
	$fio = urldecode($fio);
	$phone = urldecode($phone);
	$email = urldecode($email);
	$adres = urldecode($adres);
	$fio = trim($fio);
	$phone = trim($phone);
	$email = trim($email);
	$adres = trim($adres);
	if (mail("lanvin90@mail.ru", "Заявка с сайта", "ФИО:".$fio. "Ваш номер телефона:".$phone. ". E-mail: ".$email ,"From: zel-mebel89@mail.ru \r\n" "Адрес доставки:".$adres.)){ 
	echo "Сообщение успешно отправлено"; 
	} else { 
	echo "При отправке сообщения возникли ошибки";
	}
	}
?>

<!--<?php
	$to = "lanvin90@mail.ru"; // емайл получателя данных из формы 
	$tema = "Заявка с сайта"; // тема полученного емайла 
	$message = "ФИО: ".$_POST['fio']."<br>";//присвоить переменной значение, полученное из формы name=name
	$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
	$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
	$message .= "Адрес доставки: ".$_POST['adres']."<br>"; //полученное из формы name=adres
	$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
	mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>-->