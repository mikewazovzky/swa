<?
define(FILE_NAME, 'admin/.htpasswd');
define(ADMIN_LOGIN, 	'admin'); 	//
define(ADMIN_PASSWORD, 	'qwerty'); 	// 

define(DB_HOST, 'mysql.hostinger.ru');       // Параметры базы данных 
define(DB_LOGIN, 'u339834249_avn');
define(DB_PASSWORD, 'ononHLLK9a');
define(DB_NAME, 'u339834249_news');
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die('No connection to DB.');

?>