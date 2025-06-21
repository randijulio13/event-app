<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        if (app()->environment('production')) {
            return view('events.coming-soon');
        }

        return view('events.index');
    }
}
