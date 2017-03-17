<?php 
include 		'header.php'; 
require_once 	'admin/data.php';
require_once 	'admin/lib.php';
require_once	'admin/secure.php';
session_start();
header("HTTP/1.0 401 Unauthorized");

if(isset($_GET['logout']))
	logOut();

$welcome = '';
if($_SESSION['admin']) 
	$welcome .= 'Добро пожаловать, АДМИНИСТРАТОР!';

$msg = 'Введите имя пользователя и пароль.';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = trim(strip_tags($_POST['user']));
	$pw = trim(strip_tags($_POST['pw']));
	if($user and $pw) {
		if($result = userExists($user)) {
			list($login, $password, $salt, $iteration) = explode(':', $result);
			if(getHash($pw, $salt, $iteration) == $password) {
				$_SESSION['admin'] = true;
				header("Location: ../news.php");
				exit;
			} else {
				//$msg = "Неправильный пароль!";
				  $msg = "Неправильное имя пользователя или пароль!";
			}
		} else {
			//$msg = "Пользователь не существует!";
			  $msg = "Неправильное имя пользователя или пароль!";
		}
	} else {
		$msg = "Заполните все поля формы!";
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Travel USA South-West Nevada Uta Arizona California</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/sw-a.css">
	<link rel="stylesheet" href="css/news.css">
</head>

<body>
<!-- root - container определяющий размер и поведение зоны просмотра -------->
<div id='root'> 
<!-- показать HEADER (menu) --------------------------->
<? showHeader("Главная", $menu);?>
<!-- LOGIN AREA --------------------------->
<div id = 'login' style="color: white; float: right;">
<h1><?= $welcome?></h1>
<?
if(!$_SESSION['admin']) 
	include 'admin/login.php';
else 
	include 'admin/logout.php';
?> 	
</div>	
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
		<?if($item['url']) { ?>
			<a href='<?= $item['url']?>'>Подробнее</a>
		<? } ?>
		<? if($_SESSION['admin']) { ?>
			<a href='admin/delete_record.php?id=<?= $item['id']?>'>Удалить новость</a>
		<? } ?>
		</p>
	</div>
<?
}
?>
</div>
<!-- Блок администратора, возможность добавления новых записей в базу новостей -->
<?
if ($_SESSION['admin'])
	include 'admin/admin.php';
?>	
<!-- показать FOOTER -------------------------------------------------------------->
<?php include 'footer.php'; ?>
</div>

</body>
</html>