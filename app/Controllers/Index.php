<?php

namespace App\Controllers;

use \Mikewazovzky\Lib\Exceptions\NodataException;

class Index extends \Mikewazovzky\Lib\MVC\Controller  
{
	/**
	 * @var array $actions - list of available actions 
    **/	
	protected $actions = ['Index', 'Location', 'Feedback']; 				// list of available actions
	protected $menu = []; 										// список элементов меню
	
	protected $pages = ['main', 'news', 'about', 'contacts']; 	// list of available pages
	protected $pagesdata = [];										// информация о страницах сайта
	
	protected $locations = ['sequoia', 'vofire', 'gc', 'page', 'antelope', 'monument', 'arches', 'skyisle' , 'bryce'];									// list of available locations
	protected $locationdata = [];		
	
	// !!! добавить в конструктор загрузку $actions and $pages на основании данных в /Data
	
	public function __construct()
	{
		parent::__construct();
		$this->menu = include(__DIR__ . '/../../data/menu.php');			// path to data hardcoded!!
		$this->pagesdata = include(__DIR__ . '/../../data/pages.php');	        // path to pages hardcoded!!
		$this->locationsdata  = include(__DIR__ . '/../../data/locations.php');       // 
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
	 * Метод направляет на страницу запрошенную пользователем страницу
	 **/
	protected function actionIndex()
	{
		$page = $_GET['page'] ?? 'empty';
		if(!in_array($page, $this->pages)) {
			throw new NodataException('Запрошена несуществующая страница:  ' . $page . '.');
		}
		$this->loadPage($page);
	}
	/**
	 * Метод загружает отчет о поездке (Location)
	 **/
	protected function actionLocation()
	{
		$location = $_GET['location'] ?? 'empty';
		if(!in_array($location, $this->locations)) {
			throw new NodataException('Запрошен несуществующий отчет:  ' . $location . '.');
		}
		$this->loadPage('location', $location);
	}

	/**
	 * Метод загружает указанную страницу
	 **/
	protected function loadPage($page, $location = '') 
	{
		// подготовить данные для шаблона
		$data = $this->pagesdata[$page];
		$data['menu'] = $this->menu;
		
		if($page == 'location') {
			$data['title'] = $this->locationsdata[$location]['name'];
			$data['img']   = $this->locationsdata[$location]['img'];
			$data['location'] = 'locations/' . $location . '.twig.php';
		}

		// вызвать шаблон и передать ему данные 
		$this->view->display('index.twig.php', $data);
	}
	/**
	 * Метод отправляет администратору сообщение при нажатии на кнопку отправить на странице "Контакты"
	 **/	
	protected function actionFeedback()
	{
		$to = 'mike.wazovzky@gmail.com';
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subj = 'MESSAGE from SWA.dev: ' . $_POST['subj'];
		$body = 'Send by ' . $name . ' : ' . $email . PHP_EOL . $_POST['body'];
		
		$mailer = new \Mikewazovzky\Lib\Mailer;
		$mailer->send($to, $subj, $body);
		$this->redirect('Contacts');
	}	
}	
?>