@extends('locations.location')
@section('location')

<img class="img-responsive" style="float: left; max-height: 200px; margin-right: 10px;" src="{{ $images['018']['src'] }}">
<h1>Остров в Небесах</h1>
<h3>Canyonlands National Park and Dead Horse Point State Park, Uta</h3>
<p>	В отличие от остальных парков, которые я планировал посетить во время поездки, про Остров в Небесах (он Каньонлэндс) я
    никогда раньше не слышал. Я наткнулся на информацию о парке планируя маршрут из Парка Арки в Каньон Брайс и решил заехать. 
    Особенно меня заинтриговало название  Dead Horse Point, но до него я к сожалению не доехал.</p>
	
<p>	Приезжать в парк нужно рано утром, чтобы увидеть его главную достопримечательность - рассвеченную рассветными лучами 
    арку Меса (Mesa Arch).</p>

<p> Остров в Небесах (<strong>Isle in The Sky</strong>) включает в себя <a href="https://www.nps.gov/cany/index.htm">Canyonlands National Park</a> и 
	<a href="http://stateparks.utah.gov/parks/dead-horse/">Dead Horse Point State Park</a>.

<hr>
<h3>Mesa Arch</h3>
<p> Несмотря на то, что в парк я ехал в полной темноте и одиночестве, не встретив ни одной живой души, кроме выскочившего под колеса 
    койота (посмотрел на меня недовольно и убежал с дороги), возле арки было людно. Огромная толпа фотографов (большинство - китайцы)
    полностью оккупировала площадку у арки, загородив лесом штативов все подступы к ней. 
    В короткий момент выхода солнца из-за горизонта все оживленно бегают вокруг и щелкают затворами, затем в течение буквально 
    5 минут упаковывают оборудование и отчаливают.</p>

<div class="row">		
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['001']['src'] }}"></div>	
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['002']['src'] }}"></div>
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['003']['src'] }}"></div>			
</div>

			
<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['005']['src'] }}">	
</div>
<hr>
<h3>Grand Point Outlook</h3>
<p> Вдоль Гранд Поинт Аутлук можно прогуляться по краю пропасти, тропа длиной 1.5 - 2 километра. После Mesa Arch
    гуляя по парку не встретил ни одной живой души, потрясащий масштаб и тишина.</p>
<div class="row">		
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['008']['src'] }}"></div>			
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['010']['src'] }}"></div>
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['013']['src'] }}"></div>			
</div>

<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['009']['src'] }}">
</div>

<hr>
<h3>Green River Outlook</h3>
<p>Вид на зеленую реку.</p>
<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['017']['src'] }}">
</div>

<div class="row">		
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['014']['src'] }}"></div>	
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['016']['src'] }}"></div>		
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['020']['src'] }}"></div>
</div>

<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['018']['src'] }}">
</div>

<hr>	
<h3>False Kiva Trail</h3>
<p> Очень странный хайк ведет к фальшивой киве (False Kiva). Тропа обозначенная камещками ведет к краю каньона 
    и начинает петлять вдоль него, постепенно опускаясь все ниже и ниже. Периодически кажется, что дальше 
    идти не куда и невозможно, что люди заманившие тебя камушками в эту глухомань просто посмеялись над тобой. 
    Но внимательно осмотревшись по сторонам ты находишь вдали следующую крошечную пирамидку и идешь за дальше ...</p>
<p> В конце тропы вас ждет качестве приза небольшая пещерка с кивой, whatever it really means :))</p>
<div class="row">		
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['021']['src'] }}"></div>	
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['023']['src'] }}"></div>			
	<div class="image-item col-sm-4"><img class="img-responsive center-block" src="{{ $images['024']['src'] }}"></div>
</div>

<div class="image-solo">
	<img class="img-responsive center-block" src="{{ $images['025']['src'] }}">
</div>	

@stop

