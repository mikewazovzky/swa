<?
require_once 'imgs.data.php';
class Imgs {
	private $imgs;							// массив ссылок на фотографии
	private $title;							// название location, используется в качестве подписи к фото в lightbox
	function __construct($location) {		//  @param $location - идентификатор location
		global $sequoia, $gc;
		switch ($location) {
			case 'sequoia': 	$this->imgs  = $sequoia; 	$this->title = "Sequoia National Park"; 	break;
			case 'gc':			$this->imgs  = $gc; 		$this->title = "Grand Canyon";				break;
		}
	}
	// 	Метод отображения фотографии
	// 	string format: 	
	//		<img class='hlarge' alt='101' title='101' src='link'/>
	//	@parameters		
	//		string 	$id 		- идентификатор фотографии
	// 		string 	$class 		- класс CSS используемый для отображения фото, default - 'hlarge'
	function imgsSingle($id, $class = 'hlarge') {
		echo "<img class='$class' alt='$id' title='$id' src='{$this->imgs[$id]}'/>";
	}
	// 	Функция отображения фотографии входящей в lightbox set
	//	string format
	//		<a class='example-link' href='link' data-lightbox='example-set-2' data-title='title'><img alt='103' title='103' src='link'/></a>	
	//	@parameters
	//		string 	$id 		- идентификатор фотографии
	//		integer	$set 		- индентификатор набора (set) фотографий lightbox
	//		string 	$class 		- класс CSS используемый для отображения фото, default - ''
	function imgsSet($id, $set, $class = '') {
		echo "<a class='example-link' href='{$this->imgs[$id]}' data-lightbox='example-set-$set' data-title='$this->title'>
				<img class='$class' alt='$id' title='$id' src='{$this->imgs[$id]}'/></a>";
	}
}
// test class Imgs
// $imgs = new Imgs('sequoia');
// $imgs->imgsSingle('101');
// $imgs->imgsSet('103', 2); 	
?>
