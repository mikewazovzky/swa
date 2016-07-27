<?

$topic 	= 'Тема сообщения.'; 		// Тема сообщения, выделяется жирным цветом
$img  	= 'Ссылка на изображение'; 	// Ссылка на фото к новости, заменить на возможность загрузки фото
$text  	= 'Текст сообщения'; 		// Текст сообщения
$url  	= 'Ссылка на страницу'; 	// Ссылка на страничку (если есть)
?>

<div id = 'admin' style="color: white;">

<form action="admin/save2news.php" method="post">
<fieldset>
<legend>Панель администратора</legend>
<table style="text-align: left;">
<tr>
	<th><label for="topic">Тема</label></th>
	<td><input id="topic" type="text" name="topic" value="<?= $topic?>" size="80" /></td>
</tr>
<tr>
	<th><label for="img">Ссылка на изображение:</label></th>
	<td><input id="img" type="text" name="img" value="<?= $img?>" size="80" /></td>
</tr>
<tr>
	<th><label for="text">Новость</label></th>
	<td><textarea id="text" name='text' cols='81' rows='5'><?= $text?></textarea></td>
</tr>
<tr>
	<th><label for="url">Ссылка на страницу:</label></th>
	<td><input id="url" type="text" name="url" value="<?= $url?>" size="80" /></td>
</tr>
<tr>
	<td><button type="submit">Загрузить новость</button></td><td></td>
</tr>
</table>
</fieldset>
</form>
</div>