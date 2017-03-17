<?
require_once "secure.php";
header("Cash-Control: no-store; max-age=0");

$user = 'root';
$pw = '1234';
$salt = '';
$iteration = 10;
$result = '';

if (!$salt)
	$salt = str_replace('=', '', base64_encode(md5(microtime() . '1FD37EAA5ED9425683326EA68DCD0E59')));

if ($_SERVER['REQUEST_METHOD']=='GET')
	if(isset($_GET['login'])) 
		deleteUser($_GET['login']);

if ($_SERVER['REQUEST_METHOD']=='POST'){
	$user = $_POST['user'] ?: $user;
	if(!userExists($user)){
		$pw = $_POST['pw'] ?: $pw;
		$salt = $_POST['salt'] ?: $salt;
		$iteration = (int) $_POST['iteration'] ?: $iteration;
		$result = getHash($pw, $salt, $iteration);
		if(saveUser($user, $result, $salt, $iteration))
			$result = 'Пользователь '. $user. ' успешно добавлен в файл';
		else
			$result = 'При записи пользователя '. $user. ' произошла ошибка';
	} else {
		$result = "Пользователь $user уже существует. Выберите другое имя.";
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>User Administration</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>

<body>
<h1>User Administration</h1>

<h3><?= $result?></h3>
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
	<div>
		<label for="txtUser">Логин</label>
		<input id="txtUser" type="text" name="user" value="<?= $user?>" style="width:40em"/>
	</div>
	<div>
		<label for="txtString">Пароль</label>
		<input id="txtString" type="text" name="pw" value="<?= $pw?>" style="width:40em"/>
	</div>
	<div>
		<label for="txtSalt">Соль</label>
		<input id="txtSalt" type="text" name="salt" value="<?= $salt?>"  style="width:40em"/>
	</div>	
	<div>
		<label for="txtIterationCount">Число иттераций</label>
		<input id="txtIterationCount" type="text" name="iteration" value="<?= $iteration?>"  style="width:4em"/>
	</div>		
	<div>
		<button type="submit">Создать</button>
	</div>	
</form>
<h3>Список существующих пользователей</h3>
<?
$users = getUsers();
//print_r($users);
$n = 1;
foreach($users as $user) {
?>
	<p><?= $n?>. USER: <?= $user['login'] ?>. <a href = 'users.php?login=<?= $user['login']?>'>Delete</a></p>
	<hr>
<?
$n++;
}
?>

</body>
</html>