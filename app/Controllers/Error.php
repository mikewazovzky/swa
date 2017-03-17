<?php

namespace App\Controllers;

class Error extends \Mikewazovzky\Lib\MVC\Controller
{
	public function action($e)
	{
		$data['class'] 		= get_class($e);
		$data['message'] 	= $e->getMessage();
		$data['code'] 		= $e->getCode();
		$data['file'] 		= $e->getFile();
		$data['line'] 		= $e->getLine();
		$data['trace'] 		= $e->getTraceAsString();
		$this->view->display('error.twig.php', $data);
	}	
}
?>