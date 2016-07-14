<?php
/**
 * @project sw-adventure
 * @author Mike Wazovzky mike.wazovzky@gmail.com
 * @status wip
**/

// Инициализация приложения
use \Mikewazovzky\Lib\Exceptions\BaseException;
use \Mikewazovzky\Lib\Exceptions\NodataException;
use \Mikewazovzky\Lib\Exceptions\DatabaseException;
use \Mikewazovzky\Lib\Logger;
use \Mikewazovzky\Lib\Controllers\Log;
use \Mikewazovzky\Lib\Controllers\Error;
use \Mikewazovzky\Lib\Mailer;

require __DIR__ . '/autoload.php';

$logger = new Logger;

// ROUTING: определение действий (выбор контроллера и экшен) на основании запроса пользователя
// NB. Используем управляющие директивы (перенаправление) модуля Rewrite - работает только под сервером Apache!!!

// DEBUG: реальный uri запрошенный пользователем и параметры запроса
//echo 'REQUEST_URI = <strong>' . $_SERVER[REQUEST_URI] . '</strong>' . 'REQUEST_METHOD = <strong>' . $_SERVER[REQUEST_METHOD] . '</strong>;' . '<br>';

// Анализ запроса пользователя. 
$ctrl   = $_GET['ctrl']  ? : 'Index';   // Index(default) или Admin
$action = $_GET['action']? : 'Index';    

// DEBUG: выбранный контроллер и действие
echo ' ctrl = <strong>' . $ctrl . '</strong>; action = <strong>' . $action . '</strong>.' . '<br>';

// Выбор и вызов контроллера
try {
	switch($ctrl) {
		case 'Index':
			$controller = new \App\Controllers\Index;
			break;
		case 'Admin':
			$controller = new \App\Controllers\Admin;
			break;
		case 'Log':
			$controller = new Log;
			break;
		default:
			throw new NodataException('Запрошен несуществующий контроллер.');
	}
	$controller->action($action);
} catch(BaseException $be) {
	$be->handle();
} catch(\Exception $e) {
	$logger->toFile($e);
	$eh = new Error;
	$eh->action($e);
}
