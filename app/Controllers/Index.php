<?php

namespace App\Controllers;

use \Mikewazovzky\Lib\Exceptions\NodataException;

class Index extends \Mikewazovzky\Lib\MVC\Controller  
{
	/**
	 * @var array $actions - list of available actions 
    **/	
	protected $actions = ['Index', 'About'];
	protected $menu = [];
	protected $pages = [];
	
	public function __construct()
	{
		parent::__construct();
		$this->pages = include(__DIR__ . '/../../data/pages.php');	        // path to pages hardcoded!!
		$this->menu = include(__DIR__ . '/../../data/menu.php');	// path to data hardcoded!!
	
	}
	/**
	 * Метод вызываемый перед выполением действия, проверяет является ли действие допустимым  
	 * @param  string $action запрошенное пользователем действие
	 * @return void
	 * @throws NodataException
     **/	
	public function beforeAction($action) 
	{
		if(!in_array($action, $this->actions)) {
			throw new NodataException('Запрошенo несуществующее действие в ' . static::class);
		}
	}
	/**
	 * Метод направляет на страницу "Главная"
	 **/
	protected function actionIndex()
	{
		$this->loadPage('empty');
	}
	/**
	 * Метод направляет на страницу "О сайте"
	 **/
	protected function actionAbout()
	{
		$this->loadPage('about');
	}
	/**
	 * Метод загружает выбранную страницу
	 **/
	protected function loadPage($page) 
	{
		// подготовить данные для шаблона
		$data = $this->pages[$page];
		$data['menu'] = $this->menu;
		
		// вызвать шаблон и передать ему данные 
		$this->view->display('index.twig.php', $data);
	}
}	
?>