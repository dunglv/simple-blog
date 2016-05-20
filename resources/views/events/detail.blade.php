@extends('layouts.master')
@section('head.title', 'Event')
@section('body.content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-xs-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3">
				<div class="event">
					<div class="title-event">
						<h1>Event: {{ $event->event }}</h1>
					</div>
					<div class="infor">
						<div class="user-create">
							create by: {{ $event->user->name }}
						</div>
						<div class="date-start">
							start at: {{ $event->date_start }}
						</div>
						<div class="date-finish">
							finish at: {{ $event->date_finish }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop