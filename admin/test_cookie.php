<?
// Тестирование функций COOKIE

require_once 'secure.php';
$status = 'Test cookie functions';

if(isset($_GET['check'])) {
	if(is_cookie_set())
		$status = "CHECK: COOKIE is set!";
	else
		$status = "CHECK: COOKIE is NOT set!";
}

if(isset($_GET['set'])) {
	$users = file(FILE_NAME);
	list($user, $hash, $salt, $itertion) = explode(':', $users[0]);
	$str = create_cookie($user, $hash);
	$status = "SET: COOKIE is set: $str";
}
	
if(isset($_GET['delete'])) {
	delete_cookie();
	$status = "DELETE: COOKIE is deleted!";
}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Test COOKIES</title>
	<meta charset="utf-8">
</head>
<body>
<h1><?= $status?></h1>
<ul>
	<li><a href = 'cookie.tmp.php?check'>Проверить, существует ли COOKIE</a></li>
	<li><a href = 'cookie.tmp.php?set'>Установить COOKIE</a></li>
	<li><a href = 'cookie.tmp.php?delete'>Удалить COOKIE</a></li>
</ul>
</body>
</html>