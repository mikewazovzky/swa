{% extends 'index.twig.php' %}

{% block head %}
	{{ parent() }}
	 <link rel="stylesheet" type="text/css" href="templates/css/{{css}}">
	 <script>
	window.addEventListener('resize', function(event){
			press();
	});
	
	function press() {
		var width = $(window).width();
			document.getElementById("data").innerHTML = "Window width: " + width;
			var container = width - 50;
			//alert(container + "px");
			document.getElementById("tmp").style.width = container + "px";
			document.getElementById("container").innerHTML = "Window width: " + document.getElementById("tmp").style.width;
	}
	 </script>
{% endblock %}

{% block content %}
<div class="main" id="tmp">

	<h1 id="title">НОВАЯ ГЛАВНАЯ СТРАНИЦА</h1>
	<h2 id="subtitle">Невада. Юта. Аризона. Калифорния.<br>Национальные парки.</h2>
	<h2 id="data" style="color: white;">Window width: </h2>
	<h2 id="container" style="color: white;">Container width: </h2>
	
	<div class="block block1">
		<h2>Парк Секвой</h2>
		<img src="templates/media/sequoia.jpg" width="320px"/>
		<p>	Парк Секвой (Sequoia National Park, CA) - расположенный в северной части Калифорнии парк гигантских деревьев. 
			Секвойи - огромные деревья наблюдающие за развитием нашей цивилизации, возраст некоторых гигантов достигает 6000 лет ...
		</p>
		<a class="button" href="/?ctrl=Index&action=Location&location=sequoia">Подробнее</a>
	</div>
	
	<div class="block block2">
		<h2>Долина Огня</h2>
		<img src="templates/media/vofire.jpg" width="320px"/>
		<p>	Долина Огня (Valley of Fire State Park, NV) - своеобразный сад камней. Приезжать в парк нужно рано утром, желательно 
			к рассвету, днем (после 10:00) здесь испепеляющая жара, бродить среди раскаленных камней небезопасно...
		</p>
		<a class="button" href="/?ctrl=Index&action=Location&location=vofire">Подробнее</a>
	</div>
    
	<div class="block block3">
		<h2>Гранд Каньон</h2>
		<img src="templates/media/gc.jpg" width="320px"/>
		<p>	Гранд Каньон (Grand Canyon, AZ) самый большой каньон и одно из самых посещаемых туристами место. Вы можете не только 
			полюбоваться потрясающими видами, но и совершить запоминающееся путешествие - спуск в каньон...
		</p>
		<a class="button" href="?ctrl=Index&action=Location&location=gc">Подробнее</a>
	</div>

	<div class="block block4">
		<h2>Озеро Пауэлл</h2>
		<img src="templates/media/horseshoe.jpg" width="320px"/>
		<p>	В окрестностях города Пэйдж (Page, AZ) расположено множество интересных мест. Потрясающий цвет озера Пауэлл (Powell), 
			можно не только любоваться но и искупаться - ни с чем не сравнимое удоавольствие в 40 градусную жару! ...
		</p>
		<a class="button" href="?ctrl=Index&action=Location&location=page">Подробнее</a>
	</div>

	
	<div class="block block4">
		<h2>Озеро Пауэлл</h2>
		<img src="templates/media/page.jpg" width="320px"/>
		<p>	В окрестностях города Пэйдж (Page, AZ) расположено множество интересных мест. Потрясающий цвет озера Пауэлл (Powell), 
			можно не только любоваться но и искупаться - ни с чем не сравнимое удоавольствие в 40 градусную жару! ...
		</p>
		<a class="button" href="?ctrl=Index&action=Location&location=page">Подробнее</a>
	</div>
	
	<div class="block block5">
		<h2>Каньон Антилопы</h2>
		<img src="templates/media/antelope.jpg" width="320px"/>
		<p>	Каньон Антилопы  (Antelope Canyon, AZ) - глубокая промытая в скалах расщелина. Если Вы окажетесь в нем в полдень, 
			сможете наблюдать причудливую игру отражений раскрашивающих стены каньона в самые неожиданные цвета ...
		</p>
		<a class="button" href="?ctrl=Index&action=Location&location=antelope">Подробнее</a>
	</div>
    
	<div class="block block6">
		<h2>Долина Монументов</h2>
		<img src="templates/media/monument.jpg" width="320px"/>
		<p>	Долина Монументов (Monument Valley Navajo Tribal Park, AZ) - необычные каменные великаны хорошо известные любителям вестернов. 
			Наиболее впечатлеюще они смотрятся в лучах закатного солнца ...</p>
		<a class="button" href="?ctrl=Index&action=Location&location=monument">Подробнее</a>
	</div>

	
	<div class="block block7">
		<h2>Арки</h2>
		<img src="templates/media/arches.jpg" width="320px"/>
		<p>	Национальный парк Арки (Arches National Park). На относительно небольшой территории парка В найдете удивительную коллекцию 
			необычных природных образований - арок ...
		</p>
		<a class="button" href="?ctrl=Index&action=Location&location=arches">Подробнее</a>
	</div>
	
	<div class="block block8">
		<h2>Остров в небесах</h2>
		<img src="templates/media/skyisle.jpg" width="320px"/>
		<p>	Остров в небесах (Island in the Sky - Canyonlands National Park, UT) - совершенно невозможно не посетить место с таким названием. 
			Потрясающее и не очень популярное у туристов, а потому пустынное место ...
		</p>
		<a class="button" href="?ctrl=Index&action=Location&location=skyisle">Подробнее</a>
	</div>
    
	<div class="block block9">
		<h2>Каньон Брайс</h2>
		<img src="templates/media/bryce.jpg" width="320px"/>
		<p>Каньон Брайс (Bryce Canyon) - территория каменных изваяний Худус. По легенде индейцев Навахо Худус - души умерших. Кто и зачем собирает армию мертвых в каньоне неизвестно ...</p>
		<a class="button" href="?ctrl=Index&action=Location&location=bryce">Подробнее</a>
	</div>
</div>
{% endblock %}	

