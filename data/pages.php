<?php

return ['main'	=> [
			'link'		=> 'Главная',
			'href'		=> '/?action=Index&page=main',
			'title' 	=> 'ПУТЕВЫЕ ЗАМЕТКИ',
			'css' 		=> 'main.css',
			'content'	=> 'main.twig.php'
		],
		'news'	=> [
			'link'		=> 'Новости',
			'href'		=> '/?action=Index&page=news',
			'title' 	=> 'НОВОСТИ',
			'css' 		=> 'empty.css',
			'content'	=> 'empty.twig.php'
		],
		'about'	=> [
			'link'		=> 'О сайте',
			'href'		=> '/?action=Index&page=about',
			'title' 	=> 'О САЙТЕ',
			'css' 		=> 'about.css',
			'content'	=> 'about.twig.php'
		],
		'contacts'	=> [
			'link'		=> 'Контакты',
			'href'		=> '/?action=Index&page=contacts',
			'title' 	=> 'КОНТАКТЫ',
			'css' 		=> 'contacts.css',
			'content'	=> 'contacts.twig.php'
		],
		'location' 	=> [
			'link'		=> '',
			'href'		=> '',
			'title' 	=> '',
			'css' 		=> 'location.css',
			'content'	=> 'location.twig.php'
		]
]; 