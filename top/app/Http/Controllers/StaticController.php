<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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

    public function templates()
    {
        $client = new Client();
        // TODO: Change host by env.
        $response = $client->get('http://localhost:1323/v1/website_templates');
        $templates = \GuzzleHttp\json_decode($response->getBody());
        return view('static.templates')->with('templates', $templates);
    }

    public function support()
    {
        return view('static.support');
    }
}
