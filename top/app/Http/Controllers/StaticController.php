<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function top()
    {
        return view('static.top');
    }

    public function features()
    {
        return view('static.features');
    }

    public function subscriptions()
    {
        return view('static.subscriptions');
    }

    public function support()
    {
        return view('static.support');
    }
}
