<?
define(FILE_NAME, '.htpasswd');

// генерация хеш пароля, возврашает хеш
function getHash($str, $salt, $iterationCount) {
	for($i = 0; $i < $iterationCount; $i++) {
		$str = sha1($str . $salt);
	}
	return $str;
}

// создание новой записи в файле пользователей, если успешно return true 
function saveUser($user, $hash, $salt, $iteration) {
	$str = "$user:$hash:$salt:$iteration\n";
	if(file_put_contents(FILE_NAME, $str, FILE_APPEND))
		return true;
	else
		return false;
}

// удаление пользователя из базы данных, вернуть true в случае успеха, false в случае неудачи
function deleteUser($login) {
	if(!is_file(FILE_NAME))
		return false;
	$users_old = file(FILE_NAME);
	$users_new = array();
	foreach($users_old as $user) {
		if(strpos($user, $login) === false)
			$users_new[] = $user;
	}
	if(!file_put_contents(FILE_NAME, $users_new))
		return false;
	return true;	
}
 
// проверка существования пользователя, если да вернуть строку с описанием пользователя
function userExists($login) {
	if(!is_file(FILE_NAME))
		return false;
	$users = file(FILE_NAME);
	//print_r($users);
	foreach($users as $user) {
		if(strpos($user, $login) !== false)
			return $user;
	}
	return false;
}

// получить список всех пользователей в виде массива
function getUsers() {
	$users = array();
	if(!is_file(FILE_NAME))
		return false;
	$results = file(FILE_NAME);
	foreach($results as $item) {
		list($login, $password, $salt, $iteration) = explode(':', $item);
		$user = array();
		$user['login'] = $login;
		$user['password'] = $password;
		$user['salt'] = $salt;
		$user['iteration'] = $iteration;
		$users[] = $user;
	}
	return $users;
}
// выход из режима администратора системы
function logOut() {
	global $admin;
//	delete_cookie();
	session_destroy();
	header('Location: ../news.php');
	exit;
}
//************* набор функций для работы с COOKIE *************************//
// 	проверить существует ли cookie
function is_cookie_set() {
	if(!isset($_COOKIE['swa'])) 
		return false;
	$str = $_COOKIE['swa'];
	list($login, $hash)  = explode(':', $str);
	
	if(!is_file(FILE_NAME))
		return false;
	$users = file(FILE_NAME);
	foreach($users as $user) {
		list($l, $h, $s, $i) = explode(':', $user);
		if($login == $l and $hash == $h)
			return true;
	}
	echo 'Нет совпадений!';
	return false;
}
// 	удалить COOKIE
function delete_cookie() {
	return setcookie('swa', '', time() - 3600);	
}
// 	создать COOKIE в формате "$login:$hash"
function create_cookie($login, $hash) {
	$str = "$login:$hash";
	setcookie('swa', $str, time() + 604800);
	echo $str;
	return $str;	
}

?>