<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function show($location, $name)
    {
        return view('events.show')
            ->with('location', $location)
            ->with('name', $name);
    }
}
