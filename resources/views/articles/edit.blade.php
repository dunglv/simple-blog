@extends ('layouts.master')

@section('head.title', 'Simple Blog | Thêm bài viết')

@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h3>Chỉnh sửa bài viết</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problem with your input <br><br>
					<ul>
						@foreach($errors->all() as $err)
							<li>{{ $err }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			{!! 
				Form::model($article, [
					'route' => ['article.update', $article->id],
					'method' => 'PUT',
					'class' => 'form-horizontal'
				])
			!!}

			@include('articles._form', ['button_form'=> 'Update article'])

			{!! Form::close() !!}
		</div>
	</div>
</div>

@stop