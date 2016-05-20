<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;
class EventsController extends Controller
{
	public function index()
	{
		# code...
	}
    public function detail($id)
    {
    	$event = Event::find($id);
    	return view('events.detail', compact('event'));
    }
}
