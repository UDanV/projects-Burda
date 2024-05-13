<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['sub'])) {$sub = $_POST['sub'];}
 if (isset($_POST['body'])) {$body = $_POST['body'];}

/* Сюда впишите свою эл. почту */
 $address = "------@mail.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Имя: $name \nE-mail: $email \nТема: $sub \nТекст: $body";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");
 if ($send == 'true')
 {
 echo "Сообщение отправлено";
 }
 else
 {
 echo "Сообщение не отправлено";
 }
?>