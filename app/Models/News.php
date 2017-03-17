<?php
namespace App\Models;
use \Mikewazovzky\Lib\Exceptions\MultiException;
/**
 * 
**/
class News extends \Mikewazovzky\Lib\MVC\Model 
{
	const TABLE = 'news';
	
	public $date;
	public $title;
	public $text;
	public $link;
	
	public function __construct() 
	{
		// проверить существует ли база данных xxx
			
		// проверить существует ли таблица
		// если нет, то создать
		
		// parent::__construct 

	}
	
	/** 
	 *   Заполняем поля объекта переданными данными
	 *   Данные могут быть переды пользователем ($_POST), требуют предварительного анализа
	 **/
	public function fill(array $params = []) 
	{
		$e = new MultiException;
		if( isset($params['head']) && ( $params['head'] != '')) {
			$this->head = $params['head'];
		} else {
			$this->head = '';
			$e[] = new \Exception('Неверный заголовок (head) новости.');
		}
		
		if( isset($params['text']) && ( $params['text'] != '')) {
			$this->text = $params['text'];
		} else {
			$this->text = '';
			$e[] = new \Exception('Неверный текст (text) новости.');
		}
		
		if( 0 != count($e)){
			throw $e;
		}
	}
}
?>