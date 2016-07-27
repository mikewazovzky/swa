<?
define(FILE_NAME, 'admin/.htpasswd');
define(ADMIN_LOGIN, 	'admin'); 	//
define(ADMIN_PASSWORD, 	'qwerty'); 	// 

define(DB_HOST, 'localhost');       // Параметры базы данных 
define(DB_LOGIN, 'alexvn');
define(DB_PASSWORD, 'letmein');
define(DB_NAME, 'news_db');
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die('No connection to DB.');

define(ADMIN, 			false);     // временные константы для тестирования режимов администратора
$admin = false;

?>