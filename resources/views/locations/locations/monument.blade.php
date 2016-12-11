@extends('locations.location')
@section('location')

<img src="/media/monument.jpg" align="left" width="300px" style="margin: 0 10px 0 0;"/>

<p>	Долина монументов - полное название парка <strong>Monument Valley Navajo Tribal Park</strong>, находится по пути из города 
	Пэйдж (Page AZ) в Моаб (Moab, UT) - ближайший к знаменитым Аркам (
	<button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#about">Arches National Park</button>
	) город. Вся информация о долине есть на 
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
<div class="well well-sm visible-xs-block">
	<p>	<strong>Tecnical comment [Carousel]:</strong><br>You need to make your screen wider to see images Carousel, not visible under xs break point [hidden-xs].<br> 
		Move coursor over the image to stop sliding.</p>
</div>

<div class="modal" id="about">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times</span>
				</button>
				<h3 class="modal-title">Arches National Park</h3>
			</div> <!-- Modal Header -->
			
			<div class="modal-body">
				<img class="img-responsive" src="/media/arches.jpg" style="padding-bottom: 10px; "/>
				<p>	На относительно небольшой территории парка Вы найдете замечательную 
					коллекцию необычных природных образований - каменных арок ...
				</p>
			</div> <!-- Modal Body -->
			
			<div class="modal-footer">
				<a href="{{ action('LocationsController@show', 6) }}">Go to Arches National Park Page</a>
			</div> <!-- Modal Footer -->			
			
		</div> <!-- Modal Content -->
	</div> <!-- Modal Dialog -->
</div> <!-- Modal -->

@stop

@section('foot')
<script>
	$(function() {
		$('.carousel').carousel({
			interval: 3000,         // sliding intervals
			wrap: false,			// continue sliding after reaching last (or first) image
			keyboard: false
		});
	});
</script>
@stop

