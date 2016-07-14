<?php

namespace App\Controllers;

use \Mikewazovzky\Lib\Logger;

class Log extends \Mikewazovzky\Lib\MVC\Controller  
{
	public function actionView() 
	{
		$data['errors'] = Logger::view();
		$this->view->display('log.twig.php', $data);
	}
}