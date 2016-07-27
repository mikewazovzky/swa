<?php 
//include 		'header.php'; 
require_once 	'../admin/data.php';
require_once 	'../admin/lib.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Database test</title>
	<meta charset="utf-8">
</head>

<body>
<!------ LIST of NEWS (Открыть базу данных, считать и вывести все записи) ---->
<p id="news_title">Последние новости</p>
<div id='news_main'>
<? 
$news = getRecords(); 
foreach ($news as $item) {
?>
	<hr>
	<div class="news_block">
		<img class="news_img" align="left" src="<?= $item['img']?>" height="60px"/>
		<p class="news_span"><strong><?= date('d-m-Y H:i:s.',  $item['dt'])?></strong> 
		<strong><?= $item['topic']?> </strong>
		<?= $item['text']?>
		<?if($item['url']) { ?> <a href='<?= $item['url']?>'>Подробнее</a> <? } ?>
		<a href='admin/delete_record.php?id=<?= $item['id']?>'>Удалить новость</a>
		</p>
	</div>
<?
}
?>
</div>
</body>
</html>