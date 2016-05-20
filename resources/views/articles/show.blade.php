@extends('layouts.master')
@section('head.title')
Tieu de bai viet
@stop
@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<a href="{{ url('/') }}" class="btn btn-link">
				<< Back
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h2>{{ $article->title }}</h2>
			<p >{{ $article->content }}</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-sm-offset-3">
			<a href="{{ route('article.edit', $article->id) }}" class="btn btn-info">Edit</a>
			{!! Form::open([
				'route' => ['article.destroy', $article->id],
				'method' => 'DELETE',
				'class' => '',
				'style' => 'display:inline-block'
				]) 
			!!}
			<button class="btn btn-danger">Delete</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@stop