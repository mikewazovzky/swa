<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Travel USA South-West Nevada Uta Arizona California</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/sw-a.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id='root'> <!-- root container определяющий размер зоны просмотра-->
	
	<?php showHeader("Главная", $menu);?>
	
	<div id='main'>
		<p id="title">Путеводитель по юго-западу<br>США</p>
		<p id="subtitle">Невада. Юта. Аризона. Калифорния.<br>Национальные парки.</p>

<!-- Блоки- элементы содержащие описание конкретных мест - locations  -->	

		<div id="block1" class="block">
			<h1>Парк Секвой</h1>
			<img src="media/s_sequoia.jpg" width="320px"/>
			<p>Парк Секвой (Sequoia National Park, CA) - расположенный в северной части Калифорнии парк гигантских деревьев. Секвойи - огромные деревья наблюдающие за развитием нашей цивилизации, возраст некоторых гигантов достигает 6000 лет ...</p>
			<a class="block_button" href="locations/sequoia.php">Подробнее</a>
		</div>

		<div id="block2" class="block">
			<h1>Долина Огня</h1>
			<img src="media/s_vofire.jpg" width="320px"/>
			<p>Долина Огня (Valley of Fire State Park, NV) - своеобразный сад камней. Приезжать в парк нужно рано утром, желательно к рассвету, днем (после 10:00) здесь испепеляющая жара, бродить среди раскаленных камней небезопасно...</p>
			<a class="block_button" href="under_construction.php">Подробнее</a>
		</div>
		
		<div id="block3" class="block">
			<h1>Гранд Каньон</h1>
			<img src="media/s_gk.jpg" width="320px"/>
			<p>Гранд Каньон (Grand Canyon, AZ) самый большой каньон и одно из самых посещаемых туристами место. Вы можете не только полюбоваться потрясающими видами, но и совершить запоминающееся путешествие - спуск в каньон...</p>
			<a class="block_button" href="locations/grandcanyon.php">Подробнее</a>
		</div>

		<div id="block4" class="block">
			<h1>Озеро Пауэлл</h1>
			<img src="media/s_page.jpg" width="320px"/>
			<p>В окрестностях города Пэйдж (Page, AZ) расположено множество интересных мест. Потрясающий цвет озера Пауэлл (Powell), можно не только любоваться но и искупаться - ни с чем не сравнимое удоавольствие в 40 градусную жару! ...</p>
			<a class="block_button" href="under_construction.php">Подробнее</a>
		</div>	
		
		<div id="block5" class="block">
			<h1>Каньон Антилопы</h1>
			<img src="media/s_antelope.jpg" width="320px"/>
			<p>Каньон Антилопы  (Antelope Canyon, AZ) - глубокая промытая в скалах расщелина. Если Вы окажетесь в нем в полдень, сможете наблюдать причудливую игру отражений раскрашивающих стены каньона в самые неожиданные цвета ...</p>
			<a class="block_button" href="under_construction.php">Подробнее</a>
		</div>

		<div id="block6" class="block">
			<h1>Долина Монументов</h1>
			<img src="media/s_monument.jpg" width="320px"/>
			<p>Долина Монументов (Monument Valley Navajo Tribal Park, AZ) - необычные каменные великаны хорошо известные любителям вестернов. Наиболее впечатлеюще они смотрятся в лучах закатного солнца ...</p>
			<a class="block_button" href="under_construction.php">Подробнее</a>
		</div>		

		<div id="block7" class="block">
			<h1>Арки</h1>
			<img src="media/s_arches.jpg" width="320px"/>
			<p>Национальный парк Арки (Arches National Park). На относительно небольшой территории парка В найдете удивительную коллекцию необычных природных образований - арок ...</p>
			<a class="block_button" href="under_construction.php">Подробнее</a>
		</div>
		
		<div id="block8" class="block">
			<h1>Остров в небесах</h1>
			<img src="media/s_isle.jpg" width="320px"/>
			<p>Остров в небесах (Island in the Sky - Canyonlands National Park, UT) - совершенно невозможно не посетить место с таким названием. Потрясающее и не очень популярное у туристов, а потому пустынное место ...</p>
			<a class="block_button" href="under_construction.php">Подробнее</a>
		</div>

		<div id="block9" class="block">
			<h1>Каньон Брайс</h1>
			<img src="media/s_bryce.jpg" width="320px"/>
			<p>Каньон Брайс (Bryce Canyon) - территория каменных изваяний Худус. По легенде индейцев Навахо Худус - души умерших. Кто и зачем собирает армию мертвых в каньоне неизвестно ...</p>
			<a class="block_button" href="locations/bryce.php">Подробнее</a>
		</div>
	</div>
</div>

<hr>
<div class="fb-like" data-href="http://sw-adventure.xyz/main.php" data-width="400px" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>	
<?php include 'footer.php'; ?>
</body>
</html>