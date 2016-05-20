<?php 
// use App\Event;
// $events = Event::with('user')->get();
// // echo '<pre>';
// // print_r($events);
// // echo '</pre>';
// // exit();
 ?>

<div class="container container-fluid block-event">
	<div class="row">
		<div class="events col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-ms-offset-3 col-lg-offset-3">
			<h2 >Events</h2>
		</div>
	</div>
	<div class="row">
	@foreach($events as $e)
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-ms-offset-3 col-lg-offset-3">
			<h4>Event: {{ $e->event }}</h4>
			<p>
				<span><strong>Start</strong>: {{ $e->date_start }}</span>
				<span><strong>Finish</strong>: {{ $e->date_finish }}</span>
				<span><strong>User</strong>: <a href="#">{{ $e->user->name }}</a></span>
			</p>
		</div>
	@endforeach
	</div>
</div>
<style type="text/css">
	.block-event{
		margin-top: 30px;
	}
	.events{
		border-top: 2px solid #ccc;
		padding-top: 20px;
		padding-bottom: 20px;
	}
	.events h2{
		color: #007E94;
		font-weight: bold;
		text-transform: uppercase;
	}
</style>