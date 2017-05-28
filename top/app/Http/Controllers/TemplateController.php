<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TemplateController extends Controller
{
    public function index()
    {
        $client = new Client();
        // TODO: Change host by env.
        $response = $client->get('http://localhost:1323/v1/website_templates');
        $templates = \GuzzleHttp\json_decode($response->getBody());
        return view('template.index')->with('templates', $templates->website_templates);
    }
}
