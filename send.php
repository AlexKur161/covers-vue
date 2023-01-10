<?php

$param1 = $_POST['name'] ?: 'Не выбрано';
$param2 = $_POST['phone'] ?: 'Не выбрано';
$param3 = $_POST['mark'] ?: 'Не выбрано';
$param4 = $_POST['mod'] ?: 'Не выбрано';
$param5 = $_POST['type'] ?: 'Не выбрано';
$param6 = $_POST['colorBody'] ?: 'Не выбрано';
$param7 = $_POST['center'] ?: 'Не выбрано';
$param8 = $_POST['colorCenter'] ?: 'Не выбрано';
$param9 = $_POST['alkantara'] ?: 'Не выбрано';
$param10 = $_POST['colorAlkantara'] ?: 'Не выбрано';
$param11 = $_POST['lines'] ?: 'Не выбрано';
$param12 = $_POST['dublelinesside'] ?: 'Не выбрано';
$param13 = $_POST['additi'] ?: 'Не выбрано';
$param16 = $_POST['additicolor'] ?: 'Не выбрано';
$param14 = $_POST['embro'] ?: 'Не выбрано';
$param15 = $_POST['fromprice'] ?: 'Не выбрано';

// несколько получателей
$to = 'AlexKur-web@yandex.ru'; // обратите внимание на запятую

// тема письма
$subject = 'Заявка с калькулятора';

// текст письма
$message = '
<html>
<head>
  <title>Заявка с сайта</title>
</head>
<body>
  <p>Заявка с сайта</p>
  <table>
    <tr>
      <td>Имя клиента:</td><td>'.$param1.'</td>
    </tr>
    <tr>
      <td>Телефон клиента:</td><td>'.$param2.'</td>
    </tr>
    <tr>
      <td>Марка автомобиля:</td><td>'.$param3.'</td>
    </tr>
    <tr>
      <td>Модель автомобиля:</td><td>'.$param4.'</td>
    </tr>
    <tr>
    <td>Тип кожи:</td><td>'.$param5.'</td>
  </tr>
  <tr>
    <td>Цвет основы:</td><td>'.$param6.'</td>
  </tr>
  <tr>
  <td>Тип центральной вставки:</td><td>'.$param7.'</td>
</tr>
<tr>
<td>Цвет центральной вставки:</td><td>'.$param8.'</td>
</tr>
<tr>
<td>Алькантара:</td><td>'.$param9.'</td>
</tr>
<tr>
<td>Алькантара цвет:</td><td>'.$param10.'</td>
</tr>
<tr>
<td>Количество строчек:</td><td>'.$param11.'</td>
</tr>
<tr>
<td>Двойная строчка сбоку:</td><td>'.$param12.'</td>
</tr>
<tr>
<td>Дополнительно:</td><td>'.$param13.'</td>
</tr>
<tr>
<td>Цвет дополнительно:</td><td>'.$param16.'</td>
</tr>
<tr>
<td>Своя вышивка:</td><td>'.$param14.'</td>
</tr>
<tr>
<td>Итоговая цена:</td><td>'.$param15.'</td>
</tr>
  </table>
</body>
</html>
';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Дополнительные заголовки
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'To: goncharovcar <AlexKur-web@yandex.ru>';
$headers[] = 'From: goncharovcar.ru <birthday@example.com>';

// Отправляем
if (mail($to, $subject, $message, implode("\r\n", $headers))) {
	echo json_encode(['message'=>'ok']);
} else {
	echo json_encode(['message'=>'ne ok']);
}
?>