<div class="form-group">
	{!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
	{!! Form::text('title', null, ['class'=>'title form-control', 'id'=> 'title', 'placeholder' => 'Input title', 'required' => true]) !!}
</div>
<div class="form-group">
	{!! Form::label('content', 'Content', ['class' => 'control-label']) !!}
	{!! Form::text('content', null, ['class'=>'content form-control', 'id'=> 'content', 'placeholder' => 'Input content...']) !!}
</div>
<div class="form-group">
	{!! Form::submit( $button_form, ['class' => 'btn btn-primary']) !!}
</div>