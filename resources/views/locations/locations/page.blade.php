@extends('locations.location')
@section('location')

<img src="/media/page.jpg" align="left" width="300px" style="margin: 0 10px 0 0;"/>

<h1>Пэйдж (Page, AZ)</h1>
<p>	Благодаря своему удобному расположению, город Пэйдж (Page AZ) является центральной перевалочной 
	базой для туристов путешествующих по американскому юго-западу. По крайней мере я рассматривал его 
	именно в этом качестве - переночевать по пути из Большого Каньона в Парк Арки, заглянуть ненадолго в 
	Каньон Антилопы.</p>
	
<p>	После знакомства с окрестностями Пэйджа оказалось, что здесь имеется немало интересного. 
	Рядом с городом расположены знаменитая Подкова (Horseshoebend), два - верхний и нижний - каньона Антилопы
	(Antelope Canyon), озеро Пауэлл (Lake Powell), Радужный Мост (Rainbow Bridge), скопления Худусов и много 
	всего интересного в Парке Глен Каньон (Glen Canyon).</p>


<hr>	

<div style="background-color: #fff; padding: 10px;">

<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#lakepowell" >Lake Powell</a></li>
	<li><a data-toggle="tab" href="#horseshoebend" >Horseshoebend</a></li>
	<li><a data-toggle="tab" href="#antelopecanyon" >Antelope Canyon</a></li>	
</ul>	

<div class="tab-content" style="background-color: #fff;">
	
	<div class="tab-pane active" id="lakepowell">
		<h1>Озеро Пауэлл</h1>
		<p>	Потрясающее сочетание цветов неба и озера Пауэлл (Powell), можно не только любоваться, но 
			и купаться. Ни с чем не сравнимое удовольствие в 40 градусную жару.</p>
		<p> На берегах озера необычный пейзаж и множество интересных мест, в том числе знаменитый Rainbow Bridge,
			священная гора индейцев Навахо.
			Стоит вернуться сюда и запланировать больше временина прогулки по окрестностям. 
			Вся необходимя информация есть на официальном сайте
			<a href="https://www.nps.gov/glca/index.htm">Glen Canyon National Recreation Area</a>.</p>
		
		<div class="row">
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['005']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['008']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['010']['src'] }}"></div>
		</div>
		
		<div class="row">	<!-----  Large Image --------->
			<div class="image-item col-sm-12"><img class="img-responsive center-block" src="{{ $images['022']['src'] }}"></div>			
		</div>
		<div class="row">				
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['018']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['019']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['020']['src'] }}"></div>
		</div>	
		<hr>	
		<p>	Зайчики скачут по берегу.</p>
		<div class="row"> <!----- Зайчик  -------->	
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['015']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['017']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['014']['src'] }}"></div>			
		</div>	
		<hr>
		<p>	Для любителей промышленного дизайна имеется такое сооружение - Glen Canyon Dam. Прочитал в интернете,
			что здесь живет семья огромных грифов. Сегодня их, увы, не было.</p>
		<div class="row"> <!----- Glen Canyon Dam -------->			
			<div class="image-item col-sm-6 col-md-4"><img class="img-responsive center-block" src="{{ $images['001']['src'] }}"></div>
			<div class="image-item col-sm-6 col-md-4"><img class="img-responsive center-block" src="{{ $images['002']['src'] }}"></div>
			<div class="image-item col-sm-6 col-md-4"><img class="img-responsive center-block" src="{{ $images['004']['src'] }}"></div>			
		</div>
		
	</div>
	
	<div class="tab-pane" id="horseshoebend">
		<h1>Подкова</h1>
		<p>	Еше одно произведение исскуства созданное автором Большого Каньона - рекой Колорадо. 
			Возле дороги есть указатель (Horseshoebend) и парковка.<br> 
			Тропинка ведущая от парковки к Подкове.</p>

		<div class="image-solo"><img class="img-responsive center-block" src="{{ $images['101']['src'] }}"></div>
		
		<div class="row">	
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['103']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['105']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['104']['src'] }}"></div>				
		</div>
			
		<div class="image-solo"><img class="img-responsive center-block" src="{{ $images['102']['src'] }}"></div>		

		<p>	Местный житель фотографируется с удовольствием.</p>				

		<div class="image-solo"><img class="img-responsive center-block" src="{{ $images['106']['src'] }}"></div>

		<p>	Площадки на отвесных стенах - любимое место фотографов. Выглядят не надежно.</p>
		<div class="row">				
			<div class="image-item col-xs-6"><img class="img-responsive center-block" src="{{ $images['107']['src'] }}"></div>			
			<div class="image-item col-xs-6"><img class="img-responsive center-block" src="{{ $images['108']['src'] }}"></div>	
		</div>
		<p>	Гхм...</p>		

		<div class="image-solo"><img class="img-responsive center-block" src="{{ $images['109']['src'] }}"></div>				

		</div>
	
	<div class="tab-pane" id="antelopecanyon">
		<h1>Каньон Антилопы</h1>
		<p>	Нижний каньон Антилопы (Lower Antelope Canyon, AZ) - глубокая промытая в скалах расщелина.
			Свободного доступа в каньон нет, только в составе небольших групп сопровождаемых гидом.
			В полдень в каньоне можно наблюдать причудливую игру отражений проникающих сверху лучей солнца,
			раскрашивающих стены каньона в самые неожиданные цвета.</p>
		<p>	Кроме нижнего есть, естественно, расположенный по соседству верхний каньон Антелопы 
			(Upper Antelope Canyon, AZ).</p>			
		<p>	Вход в каньон.</p>
		<div class="row"> <!---   Вход в Каньон --->
			<div class="image-item col-sm-6"><img class="img-responsive center-block" src="{{ $images['201']['src'] }}"></div>
			<div class="image-item col-sm-6"><img class="img-responsive center-block" src="{{ $images['202']['src'] }}"></div>
		</div>
		
		<p>	Фотографии из каньона очень необычные, но немного однообразные.</p>
		<div class="row">		
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['204']['src'] }}"></div>				
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['211']['src'] }}"></div>			
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['212']['src'] }}"></div>	
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['213']['src'] }}"></div>
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['214']['src'] }}"></div>			
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['215']['src'] }}"></div>
		</div>	
		<div class="row"> <!---   Horizontal Images --->		
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['208']['src'] }}"></div>				
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['216']['src'] }}"></div>			
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['221']['src'] }}"></div>	
		</div>	
		<div class="row"> <!--- Images --->	
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['217']['src'] }}"></div>			
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['218']['src'] }}"></div>	
			<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['219']['src'] }}"></div>
		</div>
		
		<p>	Выход из каньона.</p>
		<div class="row">	<!---   Выход из Каньона --->	
			<div class="image-item col-sm-6"><img class="img-responsive center-block" src="{{ $images['222']['src'] }}"></div>			
			<div class="image-item col-sm-6"><img class="img-responsive center-block" src="{{ $images['223']['src'] }}"></div>			
		</div>				
	</div>
	
</div>
</div>

@stop

