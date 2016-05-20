@extends('layouts.master')
@section('head.title')
Danh sach cac bi=ai viet
@stop
@section('body.content')
	<div class="container">
		@foreach ($articles as $art)
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2>{{ $art->title }}</h2>
				<p >{{ $art->content }}</p>
				<p><a href="{{ route('article.show', $art->id) }}">Read more</a></p>
			</div>
		</div> <!-- end article -->
		@endforeach

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				{!! $articles->render() !!}
			</div>
		</div>
	</div>
@stop