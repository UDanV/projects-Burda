<?php
 /* ����� ����������� ������������� ���������� */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['sub'])) {$sub = $_POST['sub'];}
 if (isset($_POST['body'])) {$body = $_POST['body'];}

/* ���� ������� ���� ��. ����� */
 $address = "------@mail.ru";

/* � ����� ������������� ����� ���������, \n - ������� ������ */
 $mes = "���: $name \nE-mail: $email \n����: $sub \n�����: $body";

/* � ��� ������� ��� ��� ���������� ��������� ������ �� ��������� ���� email */
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");
 if ($send == 'true')
 {
 echo "��������� ����������";
 }
 else
 {
 echo "��������� �� ����������";
 }
?>