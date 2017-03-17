<?php 

/*************************** Menu Data **************************************************/
$logo = '';
$slogan = 'Путевые заметки';	
$menu = array(
				array('link' => 'Главная', 		'href' => 'main.php'),
				array('link' => 'Новости', 		'href' => 'news.php'),
				array('link' => 'О сайте', 		'href' => 'about.php'),
				/* array('link' => 'Маршруты', 	'href' => 'under_construction.php'), */
				/* array('link' => 'Фотогалерея', 	'href' => 'under_construction.php'), */
				array('link' => 'Контакты', 	'href' => 'contacts.php')
			);
/******************************************************************************************/

$menu2 = array(
				array('link' => 'Главная', 		'href' => '../main.php'),
				array('link' => 'Новости', 		'href' => '../news.php'),
				array('link' => 'О сайте', 		'href' => '../about.php'),
				/* array('link' => 'Маршруты', 	'href' => '../under_construction.php'), */
				/* array('link' => 'Фотогалерея', 	'href' => '../under_construction.php'), */
				array('link' => 'Контакты', 	'href' => '../contacts.php')
			);

function showHeader($item, $array) { 	
	echo "<div id='header'>";
	echo 	"<div id='logo'></div>";
	echo 	"<div id='slogan'>".'Путевые заметки'."</div>";
	showMenu($item, $array);
	echo "</div>";
	}
	
/******************* Menu String Format **********************************	
"<li><a [style='color: #fcc500;'] href='".$array[href]."'>".$array[link]"."</a></li>"	
*************************************************************************/
function showMenu($item, $array) { 
	
	echo "<ul id='hmenu'>";
	
	foreach ($array as $line) {
		$str = "<li><a ";
		if ($line[link] == $item) $str = $str."style='color: #fcc500;' ";
		echo $str." href='".$line[href]."'>".$line[link]."</a></li>";
			
	}
	
	echo "</ul>";
}


?>