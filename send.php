<?php
//Принимаем постовые данные
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// $message = $_POST['message'];
// $uploaddir = '/home\localhost\www\tavdinka\tmp/';
// $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

//Тут указываем на какой ящик посылать письмо
$to = "fox-wm@yandex.ru";

//Далее идет тема и само сообщение
$subject = "Из формы на OLEG MATVEEV3D";
$message = "Заявка на создание сайта! <br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone)."<br />
E-mail: ".htmlspecialchars($email);
$headers = "From: <no-reply>\r\nContent-type: text/html; charset=utf-8 \r\n";

mail ($to, $subject, $message, $headers);
//header('Location: thanks.html');

exit;
?>
