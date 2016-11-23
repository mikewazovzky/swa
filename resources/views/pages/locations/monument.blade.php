@extends('pages.location')

@section('location')
<img src="/media/monument.jpg" align="left" width="300px" style="margin: 0 10px 0 0;"/>

<p>	Долина монументов - полное название парка <strong>Monument Valley Navajo Tribal Park</strong>, находится по пути из города 
	Пэйдж (Page AZ) в Моаб (Moab, UT) - ближайший к знаменитым Аркам (<strong>Arches National Park</strong>) город. 
	Вся информация о долине есть на 
	<a href="http://navajonationparks.org/htm/monumentvalleyhours.htm">официальном сайте парка</a>.</p>

<p>	Несмотря на первоначальный план провести в парке вторую половину дня, обнаружив множество интересных мест в 
	окрестностях Пэйджа и застряв там до вечера, я решил пожертвовать посещением Долины Монументов, особенно с учетом 
	предстоящего 4-х часового (??) переезда Пэйдж - Моаб, прибытия в Моаб поздно вечером и планируемого раннего (для 
	встречи восхода в Арках) подъема. Ну что мы там не видели в этой Долине Монументов? С учетом многочисленных творений 
	американского кинематографа (любимый "Назад в Будущее", бесконечная череда вестернов) долина кажется знакомой с детства.</p>

<p>	Дорога проходит прямо рядом с парком, издалека заметив характерные силуэты каменных великанов появляется соблазн 
	ненадолго съехать с дороги в их сторону. В момент когда солнце опустилось к горизонту осветив скалы ярко красным цветом 
	ехать дальше стало невозможно, пришлось парковаться на обочине, доставать фотоаппарат и штатив. Результаты ниже.</p>

<div class="row">
	<section class="col-sm-12">
		<div class="carousel slide hidden-xs" id="monuments">
			
			<ol class="carousel-indicators">
				<li data-target="#monuments" data-slide-to="0" class="active"></li>
				<li data-target="#monuments" data-slide-to="1"></li>
				<li data-target="#monuments" data-slide-to="2"></li>
				<li data-target="#monuments" data-slide-to="3"></li>
				<li data-target="#monuments" data-slide-to="4"></li>				
				<li data-target="#monuments" data-slide-to="5"></li>
				<li data-target="#monuments" data-slide-to="6"></li>
				<li data-target="#monuments" data-slide-to="7"></li>				
				<li data-target="#monuments" data-slide-to="8"></li>				
				<li data-target="#monuments" data-slide-to="9"></li>
			</ol>
			
			<div class="carousel-inner">	
				<div class="item active"><img src="{{ $images['001']['src'] }}"></div>
				<div class="item"><img src="{{ $images['002']['src'] }}"></div>
				<div class="item"><img src="{{ $images['003']['src'] }}"></div>	
				<div class="item"><img src="{{ $images['008']['src'] }}"></div>
				<div class="item"><img src="{{ $images['009']['src'] }}"></div>
				<div class="item"><img src="{{ $images['010']['src'] }}"></div>	
				<div class="item"><img src="{{ $images['012']['src'] }}"></div>
				<div class="item"><img src="{{ $images['015']['src'] }}"></div>
				<div class="item"><img src="{{ $images['016']['src'] }}"></div>	
				<div class="item"><img src="{{ $images['017']['src'] }}"></div>	

				
			</div>
			
			<a class="left carousel-control" href="#monuments" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#monuments" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>			
			
		</div>		
	</section>
</div>

<br>
<div class="well well-sm">
	<p>	<strong>Tecnical comment:</strong><br>Testing bootstrap carousel. Move coursor over the image to stop sliding images.<br>
		Carousel is not visible (hiddend) under xs break point.</p>
</div>

@stop

@section('foot')
<script>
	$(function() {
		$('.carousel').carousel({
			interval: 2000,         // sliding intervals
			wrap: false,			// continue sliding after reaching last (or first) image
			keyboard: false
		});
	});
</script>
@stop

