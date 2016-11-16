<div class="block" style="background: {{ $location->color}};">

	<h2>{{ $location->title}}</h2>

	<img src="media/{{ $location->img }}" width="320px"/>

	<p>	{{ $location->description }}</p>

	<a class="button" href="/?ctrl=Index&action=Location&location={{ $location->id }}">Подробнее</a>

</div>		