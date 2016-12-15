@extends('locations.location')
@section('location')
<h1>Title: {{ $location->title }}</h1>
<img class="" src="/media/{{ $location->image }}" style="width: 300px; float:right; margin: 0 10px;">
<div class="">
{!! $str !!}
</div>
	
@stop