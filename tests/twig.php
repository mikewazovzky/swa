<?php

require __DIR__ . '/../autoload.php';

$view = new \Mikewazovzky\Lib\MVC\ViewTwig;

$num = rand(0,1000);
$div = $num % 2;

// данные для передачи в шаблон

$arr = ['login' => 'n.shourik',
		'password' => 'qwerty',
		'email'	=> 'n.shourik@gmail.com'];

$data = ['name' 	=> 'Clark Kent',
		 'username' => 'ckent',
		 'password' => 'krypt0n1te',
		 'num'		=> $num,
		 'div'		=> $div,
		 'items'	=> $arr		
];	

//передаём методу View::render шаблон массив данных ['переменные' => 'значения']
$view->display('tchild.twig.php', $data);
						
						
?>