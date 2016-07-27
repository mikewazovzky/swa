<?
$result = '';
//$headers = 'MIME-Version: 1.0'."\r\n";
//$headers .= 'Contect-type: text/html; charset=utf-8'."\r\n";
$headers .= 'From: <robot@sw-adventure.xyz>';
if($_SERVER[REQUEST_METHOD] == 'POST') {
	$name = trim(strip_tags($_POST['name']));
	$mail = trim(strip_tags($_POST['mail']));
	$subject = trim(strip_tags($_POST['subject']));
	$body = trim(strip_tags($_POST['body']));
	if(mail('admin@sw-adventure.xyz', 'sw-adventure.xyz: '.$subject, $body."\nFrom: ".$name."\nE-mail: ".$mail, $headers))
		$result = "Ваше собщение передано почтовому серверу.";
	else
		$result = "ERROR. Ошибка при отправке письма.";
}
$text = ($text) ? $text : 'no message';
?>

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>About: Travel USA South-West Nevada Uta Arizona California</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/sw-a.css">
</head>

<style>
body 	{ background-color: #cfcfff;}
table 	{ margin-left: 10px;}
td 		{ padding: 5px 0; vertical-align: top; }
iframe 	{ margin-left: 10px;}
</style>

<body>

<div id='root'> <!-- root container определяющий размер зоны просмотра-->

<?php showHeader("Контакты", $menu); ?>
		

	<h1>Контакты</h1>
	
	
	<iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgQtiNeBKtUYR2tvvcHt7ZE4&key=AIzaSyCk1tk4ulh8FQpW91l9vCn7c2ze5isgOd0" allowfullscreen></iframe>
	
	
	<hr>
	
	<table>
		<tr><td><strong>Адрес:</strong></td>			<td>Россия. Москва.<br>Космодамианская набережная 52/2</td></tr>
		<tr><td><strong>Электроная почта:</strong></td>	<td>admin@sw-adventure.xyz</td></tr>
		
		<form action='' method='post' enctype='multipart/form-data'>
		<tr><td><strong>Обратная связь</strong><td><td></td></tr>
		<tr><td><label>Ваше имя (ник): </label></td>
			<td><input name='name' type='text' size="40"/></td>
		<tr><td><label>Ваш e-mail: </label></td>
			<td><input name='mail' type='text' size="40"/></td>
		<tr><td><label>Тема сообщения: </label></td>
			<td><input name='subject' type='text' size="40"/></td>
		</tr>
		</tr>
		<tr><td>Ваше сообщение:</td>
			<td>
				<textarea name='body' cols='41' rows='6'>Напишите нам что-нибудь )</textarea><br>
				<input type='submit' value="Отправить">
				<p><?= $result ?></p>
			</td>
		</tr>
		
		</form>
	</table>
</div>	
	
<?php include 'footer.php'; ?>

</body>
</html>