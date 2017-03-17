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
img 	{ padding: 0 10px 10px 0;}
table 	{ padding: 0 20px;}
td 		{ padding: 5px 10px; vertical-align: top; }
iframe 	{ clear: left;}
</style>

<body>

<div id='root'> <!-- root container определяющий размер зоны просмотра-->

<?php showHeader("Контакты", $menu); ?>
		
<div id='main'>
	<h1>Контакты</h1>
	<img src="media/s_isle.jpg" style="float:left;"/>
	<table>
		<tr><td><strong>Адрес:</strong></td>			<td>Россия. Москва.<br>Космодамианская набережная 52/2</td></tr>
		<tr><td><strong>Электроная почта:</strong></td>	<td>admin@sw-adventure.xyz</td></tr>
		<tr><td><strong>Обратная связь:</strong></td>
			<td>
				<form action="mail.php" method='post' enctype='multipart/form-data'>
					<textarea name='text' cols='40' rows='6'>Ваше сообщение. Не забудьте указать контакты для связи.</textarea><br>
					<input type='submit' value="Отправить">
				</form>	
			</td>
		</tr>

	</table>
</div>	
	
<div style="clear:left;">
	<hr>
	<iframe width="400" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgQtiNeBKtUYR2tvvcHt7ZE4&key=AIzaSyCk1tk4ulh8FQpW91l9vCn7c2ze5isgOd0" allowfullscreen></iframe>
</div>
	
</div>

<?php include 'footer.php'; ?>

</body>
</html>