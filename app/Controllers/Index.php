<?php

namespace App\Controllers;

use \Mikewazovzky\Lib\Exceptions\NodataException;

class Index extends \Mikewazovzky\Lib\MVC\Controller  
{
	/**
	 * @var array $actions - list of available actions 
    **/	
	protected $actions = ['Index', 'About'];
	protected $data = [];
	
	public function __construct()
	{
		parent::__construct();
		$this->data['menu'] = include(__DIR__ . '/../../data/menu.php');	// path to data hardcoded!!
	
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
		// подготовить данные для шаблона
		$this->data['title'] = 'ПУТЕВЫЕ ЗАМЕТКИ';
		$this->data['css'] = 'empty.css';
		$this->data['content'] = 'empty.twig.php';
		
		// вызвать шаблон и передать ему данные 
		$this->view->display('index.twig.php', $this->data);
	}
	/**
	 * Метод направляет на страницу "О сайте"
	 **/
	protected function actionAbout()
	{
		// подготовить данные для шаблона
		$this->data['title'] = 'О САЙТЕ';
		$this->data['css'] = 'about.css';
		$this->data['content'] = 'about.twig.php';
		
		// вызвать шаблон и передать ему данные 
		$this->view->display('index.twig.php', $this->data);
	}
}	
?>